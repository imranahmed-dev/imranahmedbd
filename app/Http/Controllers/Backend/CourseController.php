<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Str;
use Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['courses'] = Course::latest()->get();
        return view('backend.course.index-course', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.course.create-course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:courses,title',
            'category' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'student_enroll' => 'required',
            'duration' => 'required',
            'skill_level' => 'required',
            'fee' => 'required',
            'short_description' => 'required',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $course = new Course;
        $course->title                  = $request->title;
        $course->slug                   = Str::slug($request->title);
        $course->category               = $request->category;
        $course->student_enroll         = $request->student_enroll;
        $course->duration               = $request->duration;
        $course->skill_level            = $request->skill_level;
        $course->fee                    = $request->fee;
        $course->short_description      = $request->short_description;
        $course->long_description       = $request->long_description;
        
        //Image
        $image = $request->file('image');
        if ($image) {
            /*$image_path = public_path($course->image);
            @unlink($image_path);*/
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploaded/course'), $imageName);
            $course->image = '/uploaded/course/' . $imageName;
        }

        $course->save();

        $notification = array(
            'message' => 'Course created successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['course'] = Course::find($id);
        return view('backend.course.show-course', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['course'] = Course::find($id);
        return view('backend.course.edit-course', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:courses,title,'.$id,
            'category' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
            'student_enroll' => 'required',
            'duration' => 'required',
            'skill_level' => 'required',
            'fee' => 'required',
            'short_description' => 'required',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }

        $course = Course::find($id);
        $course->title                  = $request->title;
        $course->slug                   = Str::slug($request->title);
        $course->category               = $request->category;
        $course->student_enroll         = $request->student_enroll;
        $course->duration               = $request->duration;
        $course->skill_level            = $request->skill_level;
        $course->fee                    = $request->fee;
        $course->short_description      = $request->short_description;
        $course->long_description       = $request->long_description;
        
        //Image
        $image = $request->file('image');
        if ($image) {
            $image_path = public_path($course->image);
            @unlink($image_path);
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploaded/course'), $imageName);
            $course->image = '/uploaded/course/' . $imageName;
        }

        $course->save();

        $notification = array(
            'message' => 'Course updated successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $image_path = public_path($course->image);
        @unlink($image_path);
        $course->delete();

        $notification = array(
            'message' => 'Course deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
