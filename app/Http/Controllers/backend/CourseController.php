<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index() {
        $course = Courses::orderBy('id', 'desc')->get();
        return view('backend.pages.course.index', compact('course'));
    }

    public function add() {
        $course = Courses::where('status', 1)->get();
        return view('backend.pages.course.add', compact('course'));
    }  
    
    public function create(Request $request) {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:191',
            'slug' => 'required|unique:courses',
            'short_description' => 'required',
            'image' => 'image',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required',
            'language' => 'required',
            'rating' => 'required',
            'cont_title' => 'required',
            'content' => 'required',
            //'period_b' => 'required',
            //'duration_b' => 'required',
            //'period_s' => 'required',
            //'duration_s' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }        
    
        // Upload image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('assets/image/course', 'public');
        } else {
            $imagePath = null;
        }

        $slug = Str::slug($request->input('slug'), '-');
    
        // Create the course record with 'course_category_ids' included
        Courses::create([
            'title' => $request->input('title'),
            'slug' => $slug,
            'short_description' => $request->input('short_description'),
            'content' => $request->input('content'),
            'image' => $imagePath,
            'alt_image' => $request->input('alt_image'),

            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),

            'language' => json_encode($request->input('language')),
            'rating' => $request->input('rating'),
            'cont_title' => $request->input('cont_title'),
            'content' => $request->input('content'),
            'period_b' => $request->input('period_b'),
            'duration_b' => $request->input('duration_b'),
            'period_s' => $request->input('period_s'),
            'duration_s' => $request->input('duration_s'),

        ]);
    
        $response = [
            'status' => true,
            'notification' => 'Course added successfully!',
        ];
    
        return response()->json($response);
    }   

    public function edit($id) {
        $course = Courses::find($id);
        return view('backend.pages.course.edit', compact('course'));
    }
    
    public function view($id) {
        $course = Courses::find($id);
        return view('backend.pages.course.view', compact('course'));
    }  
    
    public function delete($id) {
        
        $course = Courses::find($id);
        $course->delete();

        $response = [
            'status' => true,
            'notification' => 'Course deleted successfully!',
        ];

        return response()->json($response);
    }  
    
    public function status($id, $status) { 
        $course = Courses::find($id);
        $course->status = $status;
        $course->save();
    
        return redirect(route('course.index'))->with('success', 'Status changed successfully!');
    }  
    
    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:191',
            'slug' => 'required',
            'short_description' => 'required',
            'image' => 'image',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required',
            'language' => 'required',
            'rating' => 'required',
            'cont_title' => 'required',
            'content' => 'required',
            //'period_b' => 'required',
            //'duration_b' => 'required',
            //'period_s' => 'required',
            //'duration_s' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        $id = $request->input('id');
        $course = Courses::find($id);
    
        if ($request->hasFile('image')) {
            // Update the image if a new one is uploaded
            $imagePath = $request->file('image')->store('assets/image/course', 'public');
            $course->image = $imagePath;
        }else{
            if($request->has('image_check') && $course->image){
                Storage::disk('public')->delete($course->image);
                $course->image = null;
            }
        }

        $slug = Str::slug($request->input('slug'), '-');
    

        $course->title = $request->input('title');
        $course->slug = $slug;
        $course->alt_image = $request->input('alt_image');

        $course->short_description = $request->input('short_description');
        $course->content = $request->input('content');

        $course->meta_title = $request->input('meta_title');
        $course->meta_description = $request->input('meta_description');

        $course->language = $request->input('language');
        $course->rating = $request->input('rating');
        $course->cont_title = $request->input('cont_title');
        $course->period_b = $request->input('period_b');
        $course->duration_b = $request->input('duration_b');
        $course->period_s = $request->input('period_s');
        $course->duration_s = $request->input('duration_s');

        $course->save();

        $response = [
            'status' => true,
            'notification' => 'Course updated successfully!',
        ];

        return response()->json($response);
    }   
}
