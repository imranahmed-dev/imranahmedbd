<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
use App\Models\Portfolio;
use App\Models\Course;


class FrontendController extends Controller
{
    public function index()
    {
        $data['portfolios'] = Portfolio::where('home', 1)->latest()->get()->take(6);
        $data['courses'] = Course::latest()->get();
        return view('frontend.home',$data);
    }
    public function portfolio()
    {
        $data['portfolios'] = Portfolio::latest()->get();
        return view('frontend.portfolio',$data);

    }
    public function blogs()
    {
        return view('frontend.blog');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function courses()
    {
        $data['courses'] = Course::latest()->get();
        return view('frontend.course',$data);
    }
    
    public function courseDetails($slug){
        
        $data['course'] = Course::where('slug',$slug)->first();
        return view('frontend.course-details',$data);
    }
    
    public function courseRegistration($slug){
        
        if (Auth::check() && Auth::user()->role == 2) {
            
            $data['course'] = Course::where('slug',$slug)->first();
            return view('frontend.course-registration',$data);
            
        } else {
            
            $notification = array(
                'message' => 'Please At First Login Your Account!',
                'alert-type' => 'info'
            );
            return redirect()->route('login.register')->with($notification);
        }
        
    }
    
    public function loginRegister(){
        return view('frontend.login-register');
    }



}
