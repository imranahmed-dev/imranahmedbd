<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Models\CourseRegister;

class DashboardController extends Controller
{
    public function user_dashboard(){
        return view('frontend.dashboard.dashboard');
    }

    public function editProfile()
    {
        return view('frontend.dashboard.edit-profile');
    }

    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;

        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required|unique:users,mobile,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $data = User::find($id);
        $data->name = $request->name;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->save();

        $notification = array(
            'message' => 'Successfully Profile Updated!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    
    public function changePp(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'mimes:jpeg,png,jpg',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Something went wront!, Please try again...',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        }
        
        $user = User::where('id',Auth::user()->id)->first();
        
        //Image image
        $image = $request->file('image');
        if ($image) {
            $image_path = public_path($user->image);
            @unlink($image_path);
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploaded/user'), $imageName);
            $user->image = '/uploaded/user/' . $imageName;
             $user->save();
        }
        $notification = array(
                'message' => 'Successfully profile picture changed.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

       
        
    }
    
    public function changePassword()
    {
        return view('frontend.dashboard.change-password');
    }

    public function updatePassword(Request $request)
    {
        
        $this->validate($request, [
            /*'current_password' => 'required',*/
            'new_password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        
        $check = User::where('id',Auth::user()->id)->first()->password;
        
        if($check == null){
            
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->new_password);
            $user->save();
            $notification = array(
                'message' => 'Successfully password changed.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
            
        }else{
        
        if (Auth::attempt(['id' => Auth::user()->id, 'password' => $request->current_password])) {
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->new_password);
            $user->save();
            $notification = array(
                'message' => 'Successfully password changed.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Sorry! Your current password dost not match.',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
          }
        }
    }

    public function myCourse(){
        $data['courses'] = CourseRegister::where('user_id', Auth::user()->id)->latest()->paginate(5);
        return view('frontend.dashboard.course.my-course',$data);
    }
    public function completeCourse(){
        $data['courses'] = CourseRegister::where('user_id', Auth::user()->id)->where('status',3)->latest()->paginate(5);
        return view('frontend.dashboard.course.complete-course',$data);
    }
    public function courseView($id){
     $data['course'] = CourseRegister::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('frontend.dashboard.course.course-view',$data);
    }
    
    public function courseDelete($id){
        CourseRegister::find($id)->delete();
            $notification = array(
                'message' => 'Successfully Course Deleted!.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
    }
}
