<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
use App\Models\CourseRegister;

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

        $notification = array(
            'message' => 'Registration Successfully!',
            'alert-type' => 'success'
        );
        Auth::login($data, true);
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

        $notification = array(
            'message' => 'Registration successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.dashboard')->with($notification);
    }
}
