<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Course;
use App\CourseCategory;
use App\Tutorial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('dashboard.details')->with('user', $user);
    }

    // This will display the list of favorite courses
    public function favorites()
    {
        return view('dashboard.favorites');
    }

    // This will show edit form for a user detail
    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.edit')->with('user', $user);
    }

    // This will desplay the list of favorite courses
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:15',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->middle_name = $request->input('middle_name');
        $user->last_name = $request->input('last_name');
        $user->phone = $request->input('phone');
        $user->university = $request->input('university');
        $user->department = $request->input('department');
        $user->save();

        return redirect('/dashboard')->with('success', 'Details updated successfully');
    }

    // The functions below serves for displaying and controlling tutorial pages which should be available 
    // for authenticated users

    // This will display the individual course page
    public function show_course($course_id, $chapter_number){
        $tutorials = Tutorial::where('course_id', $course_id)->get();
        $course = Course::find($course_id);
        $chapter = Tutorial::where(['course_id'=>$course_id, 'chapter_number'=>$chapter_number])->get()->first();
        return view('pages.tutorials.course')->with([
            'course'=> $course,
            'tutorials'=> $tutorials,
            'chapter'=> $chapter
        ]);
    }

    // This will display the course create template
    public function create_course(){
        return view('pages.tutorials.create_course');
    }

    // This will store the created course
    public function store_course(Request $request)
    {
        $this->validate($request, [
            'course_category' => 'required|string|max:255',
            'course_title' => 'required|string|max:255',
            'course_image' => 'required|image|max:1999',
            'course_description' => 'required|string|max:175',
        ]);

        $course = new Course();
        $course->user_id = Auth::id();
        $course_category = CourseCategory::where('course_category', $request->input('course_category'))->get()->first();
        $course->course_category_id = $course_category->id;
        $course->course_title = $request->input('course_title');
        $course->course_image = '';
        $course->course_description = $request->input('course_description');
        $course->save();

        // Handle file upload
        if ($request->hasFile('course_image')) {
            // Get filename with the extention
            $filenameWithExt = $request->file('course_image')->getClientOriginalName();
            // Get just ext
            $extention = $request->file('course_image')->getClientOriginalExtension();
            // Filename to store
            $ciNameToStore = 'course_image_'.Auth::id().'_'.$course->id.'_'.time().'.'.$extention;
            // Upload image
            $path = $request->file('course_image')->storeAs('public\courses\course_images', $ciNameToStore);
        }
        $course->course_image = $ciNameToStore;
        $course->save();

        $chapter = new Tutorial();
        $chapter->user_id = Auth::id();
        $chapter->course_id = $course->id;
        $chapter->chapter_number = '1';
        $chapter->chapter_title = 'Introduction';
        $chapter->chapter_body = '';
        $chapter->save();

        return redirect('/tutorials')->with('success', 'Course created successfully');
    }

    // This will display the chapter create template
    public function create_course_content($course_id) {
        return view('pages.tutorials.create_chapter')->with('course_id', $course_id);
    }

    // This will update a chapter
    public function store_course_content(Request $request, $course_id){
        $this->validate($request, [
            'chapter_number' => 'required|string|max:255',
            'chapter_title' => 'required|string|max:255',
            'chapter_body' => 'required',
        ]);

        $chapter = new Tutorial();
        $chapter->user_id = Auth::id();
        $chapter->course_id = $course_id;
        $chapter->chapter_number = $request->input('chapter_number');
        $chapter->chapter_title = $request->input('chapter_title');
        $chapter->chapter_body = $request->input('chapter_body');
        $chapter->save();

        return redirect('/tutorials/'.$course_id.'/'.$chapter->chapter_number)->with('success', 'Chapter created successfully');
    }

    // This will display the chapter edit template
    public function edit_course_content($course_id, $chapter_number){
        $chapter = Tutorial::where(['course_id'=>$course_id,'chapter_number'=>$chapter_number])->get()->first();
        return view('pages.tutorials.edit_chapter')->with('chapter', $chapter);
    }

    // This will update a chapter
    public function update_course_content(Request $request, $course_id, $chapter_number){
        $this->validate($request, [
            'chapter_number' => 'required|string|max:255',
            'chapter_title' => 'required|string|max:255',
            'chapter_body' => 'required',
        ]);

        $chapter = Tutorial::where(['course_id'=>$course_id,'chapter_number'=>$chapter_number])->get()->first();
        $chapter->chapter_number = $request->input('chapter_number');
        $chapter->chapter_title = $request->input('chapter_title');
        $chapter->chapter_body = $request->input('chapter_body');
        $chapter->save();

        return redirect('/tutorials/'.$course_id.'/'.$chapter_number)->with('success', 'Chapter updated successfully');
    }
}
