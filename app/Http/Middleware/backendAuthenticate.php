<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Closure;
class backendAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        $routeName = $request->route()->getName() ?? '';

        if ($request->route()->getName() == 'backend.login') {
            return $next($request);
        }

        if (!$user) {
            return redirect(route('backend.login'));
        }

        // Super admin: full access
        if ($user->role_id == 1) {
            return $next($request);
        }

        // Restricted users (roles 2,3): allow leads, profile actions, and logout only
        $allowedPrefixes = ['contact.', 'user.'];
        $allowedExact = ['backend.logout'];
        $isAllowedPrefix = false;
        foreach ($allowedPrefixes as $prefix) {
            if (str_starts_with($routeName, $prefix)) {
                $isAllowedPrefix = true;
                break;
            }
        }

        if ($isAllowedPrefix || in_array($routeName, $allowedExact)) {
            return $next($request);
        }

        return redirect()->route('contact.index');
    }
}
