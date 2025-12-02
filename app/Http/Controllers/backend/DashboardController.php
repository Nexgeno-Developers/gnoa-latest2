<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Blog;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index(){
        $courseCount = Courses::count();
        $postCount = Blog::count();
        $contactCount = Contact::count();
        return view('backend.pages.dashboard.index', compact('courseCount', 'postCount', 'contactCount'));
    }
}

