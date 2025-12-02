<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request) {
        $query = Contact::query();

        $user = auth()->user();
        $roleGender = null;
        if ($user && in_array($user->role_id, [2, 3])) {
            $roleGender = $user->role_id === 2 ? 'male' : 'female';
            $query->whereRaw('LOWER(gender) = ?', [$roleGender]);
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('phone', 'like', '%' . $search . '%');
            });
        }

        if ($request->filled('gender') && !$roleGender) {
            $query->whereRaw('LOWER(gender) = ?', [strtolower($request->input('gender'))]);
        }

        if ($request->filled('from_date')) {
            $fromDate = Carbon::parse($request->input('from_date'))->startOfDay();
            $query->whereDate('created_at', '>=', $fromDate);
        }

        if ($request->filled('to_date')) {
            $toDate = Carbon::parse($request->input('to_date'))->endOfDay();
            $query->whereDate('created_at', '<=', $toDate);
        }

        if ($request->filled('section')) {
            $query->where('section', $request->input('section'));
        }

        $contacts = $query->orderBy('id', 'desc')->paginate(15)->appends($request->query());

        $sections = Contact::select('section')
            ->whereNotNull('section')
            ->where('section', '!=', '')
            ->distinct()
            ->orderBy('section')
            ->pluck('section');

        $filters = [
            'search' => $request->input('search', ''),
            'gender' => $roleGender ?? $request->input('gender', ''),
            'from_date' => $request->input('from_date', ''),
            'to_date' => $request->input('to_date', ''),
            'section' => $request->input('section', ''),
        ];

        return view('backend.pages.contact.index', compact('contacts', 'sections', 'filters', 'roleGender'));
    }    

    public function view($id) {
        $contact = Contact::find($id);
        if ($contact && !$this->canAccessLead($contact)) {
            abort(403);
        }
        return view('backend.pages.contact.view', compact('contact'));
    }  
    
    public function delete($id) {
        
        $contact = Contact::find($id);
        if (!$contact) {
            $response = [
                'status' => false,
                'notification' => 'Record not found.!',
            ];
            return response()->json($response);
        }

        if (!$this->canAccessLead($contact)) {
            return response()->json([
                'status' => false,
                'notification' => 'You are not authorized to modify this lead.',
            ]);
        }

        $contact->delete();

        $response = [
            'status' => true,
            'notification' => 'Contact Deleted successfully!',
        ];

        return response()->json($response);
    }  
    
    private function canAccessLead(Contact $contact): bool
    {
        $user = auth()->user();
        if ($user && in_array($user->role_id, [2, 3])) {
            $allowedGender = $user->role_id === 2 ? 'male' : 'female';
            return strtolower((string) $contact->gender) === $allowedGender;
        }

        return true;
    }
    /*
    public function status($id, $status) { 
        $contact = Contact::find($id);
        $contact->status = $status;
        $contact->save();
    
        return redirect(route('Contact.index'))->with('success', 'Status Change successfully!');
    }  
    
    public function update(Request $request) {
        $id = $request->input('id');
        $contact = Contact::find($id);
        $contact->update($request->all());

        $response = [
            'status' => true,
            'notification' => 'Contact Update successfully!',
        ];

        return response()->json($response);
    } */   
}
