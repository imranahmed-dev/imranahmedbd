<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
use App\Models\CourseRegister;
use App\Models\Course;
use Mail;

class RegisterController extends Controller
{
    public function userStore(Request $request)
    {
        $this->validate($request, [
            'reg_name' => 'required',
            'mobile' => 'required|unique:users,mobile',
            'reg_email' => 'required|email|unique:users,email',
            'reg_password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ]);

        $data = new User;
        $data->role = 2;
        $data->name = $request->reg_name;
        $data->email = $request->reg_email;
        $data->mobile = $request->mobile;
        $data->password = bcrypt($request->reg_password);
        $data->save();
        
        Auth::login($data, true);
        
        $info = array(
            'email' => $request->reg_email,
        );

        Mail::send('frontend.email.registration',$info, function($message) use($info) {
            $message->from('imranahmed.developer@gmail.com', 'Developer Imran');
            $message->to($info['email']);
            $message->subject('Thank you so much for registering on my website!');
        });
        
        

        $notification = array(
            'message' => 'Registration successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.dashboard')->with($notification);
    }
    
    public function crStore(Request $request){

         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required',
            'school_college' => 'required',
            'semester_year' => 'required',
            'address' => 'required',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }
        
        $course = Course::where('id', $request->course_id)->first();

        $data = new CourseRegister;
        $data->user_id = Auth::user()->id;
        $data->course_id = $request->course_id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile_number = $request->mobile_number;
        $data->school_college = $request->school_college;
        $data->semester_year = $request->semester_year;
        $data->address = $request->address;
        $data->save();
        
        
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile_number,
            'scl_clg' => $request->school_college,
            'sem_yr' => $request->semester_year,
            'addr' => $request->address,
            
            'crs_name' => $course->title,
            'duration' => $course->duration,
            'fee' => $course->fee,
        );
        
        Mail::send('frontend.email.course-register',$data, function($message) use($data) {
            $message->from('imranahmed.developer@gmail.com', 'Developer Imran');
            $message->to(Auth::user()->email);
            $message->subject('Thanks for registration my course!');
        });
        

        $notification = array(
            'message' => 'Registration successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.dashboard')->with($notification);
    }
}
