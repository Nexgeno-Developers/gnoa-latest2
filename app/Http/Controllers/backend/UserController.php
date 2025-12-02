<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $this->ensureSuperAdmin();

        $users = User::with('role')->orderBy('id', 'asc')->get();

        return view('backend.pages.user.index', compact('users'));
    }

    public function add()
    {
        $this->ensureSuperAdmin();
        $roles = Role::orderBy('id')->get();

        return view('backend.pages.user.add', compact('roles'));
    }

    public function create(Request $request)
    {
        $this->ensureSuperAdmin();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'designation' => 'nullable|string|max:255',
            'password' => 'required|min:6|confirmed',
            'role_id' => 'required|in:1,2,3',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all(),
            ], 200);
        }

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'designation' => $request->input('designation'),
            'password' => Hash::make($request->input('password')),
            'role_id' => $request->input('role_id'),
        ]);

        $response = [
            'status' => true,
            'notification' => 'User created successfully!',
        ];

        return response()->json($response);
    }

    public function edit($id)
    {
        $author = User::find($id);

        if (!$author) {
            abort(404);
        }

        $this->ensureCanEdit($author);

        $roles = auth()->user()->role_id === 1 ? Role::orderBy('id')->get() : collect();
        $canEditRole = auth()->user()->role_id === 1 && $author->id !== 1;

        return view('backend.pages.user.edit', compact('author', 'roles', 'canEditRole'));
    }
        
    public function update(Request $request)
    {
        $id = $request->input('id');
        $author = User::find($id);

        if (!$author) {
            return response()->json([
                'status' => false,
                'notification' => 'User not found!',
            ], 404);
        }

        $this->ensureCanEdit($author);

        $canEditRole = auth()->user()->role_id === 1 && $author->id !== 1;

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'designation' => 'nullable|string|max:255',
        ];

        if ($canEditRole) {
            $rules['role_id'] = 'required|in:1,2,3';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        } 

        if ($author->id === 1 && $request->filled('role_id') && (int) $request->input('role_id') !== 1) {
            return response()->json([
                'status' => false,
                'notification' => ['The super admin role cannot be changed.'],
            ]);
        }

        $author->name = $request->input('name');
        $author->email = $request->input('email');
        $author->designation = $request->input('designation');

        if ($canEditRole) {
            $author->role_id = $request->input('role_id');
        }

        $author->save();

        $response = [
            'status' => true,
            'notification' => 'User updated successfully!',
        ];

        return response()->json($response);
    }

    public function password($id) {
        $author = User::find($id);
        if (!$author) {
            abort(404);
        }

        $this->ensureCanEdit($author);

        return view('backend.pages.user.password_edit', compact('author'));
    } 
    
    public function reset(Request $request) {
        $author = User::find($request->input('id'));

        if (!$author) {
            return response()->json([
                'status' => false,
                'notification' => ['User not found!']
            ], 404);
        }

        $this->ensureCanEdit($author);

        // Validate form data
        $validator = Validator::make($request->all(), [
            'password' => 'nullable|min:6|confirmed',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }
    
        if ($request->filled('password')) {
            $author->password =  Hash::make($request->input('password'));
        }
    
        $author->save();
    
        $response = [
            'status' => true,
            'notification' => 'Password Reset successfully!',
        ];
    
        return response()->json($response);
    }

    public function delete($id)
    {
        $this->ensureSuperAdmin();
        $author = User::find($id);

        if (!$author) {
            return response()->json([
                'status' => false,
                'notification' => 'User not found!',
            ]);
        }

        if ($author->id === 1 || $author->role_id === 1) {
            $response = [
                'status' => false,
                'notification' => 'Super admin cannot be deleted!',
            ];
            return response()->json($response);
        }

        $author->delete();
        
        $response = [
            'status' => true,
            'notification' => 'User Deleted successfully!',
        ];

        return response()->json($response);
    }

    private function ensureSuperAdmin(): void
    {
        if (!auth()->check() || auth()->user()->role_id !== 1) {
            abort(403);
        }
    }

    private function ensureCanEdit(User $user): void
    {
        if (!auth()->check()) {
            abort(403);
        }

        $authUser = auth()->user();
        if ($authUser->role_id !== 1 && $authUser->id !== $user->id) {
            abort(403);
        }
    }
}
