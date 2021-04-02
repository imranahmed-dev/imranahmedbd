<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseRegister;
use App\User;

class CourseRegController extends Controller
{
    public function pending(){
        $data['data'] = CourseRegister::where('status',0)->latest()->get();
        return view('backend.coursereg.pending',$data);
    }
    public function accept(){
        $data['data'] = CourseRegister::where('status',1)->latest()->get();
        return view('backend.coursereg.accept',$data);
    }
    public function running(){
        $data['data'] = CourseRegister::where('status',2)->latest()->get();
        return view('backend.coursereg.running',$data);
    }
    public function complete(){
        $data['data'] = CourseRegister::where('status',3)->latest()->get();
        return view('backend.coursereg.complete',$data);
    }
    public function cancel(){
        $data['data'] = CourseRegister::where('status',4)->latest()->get();
        return view('backend.coursereg.cancel',$data);
    }
    
    public function show($id){
        $data['course'] = CourseRegister::where('id',$id)->first();
        $data['user'] = User::where('id',$data['course']->user_id)->first();
        return view('backend.coursereg.details',$data);
    }
    
    public function status(Request $request, $id)
    {
        $course = CourseRegister::find($id);
        $course->status = $request->status;
        $course->save();

        $notification = array(
            'message' => 'Status changed successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    
    public function destroy($id){
        
        CourseRegister::find($id)->delete();
        
        $notification = array(
            'message' => 'Data Deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
