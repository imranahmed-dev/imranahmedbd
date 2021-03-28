<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;

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
}
