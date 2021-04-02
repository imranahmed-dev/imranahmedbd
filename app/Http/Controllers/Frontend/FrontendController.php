<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
use App\Models\Portfolio;
use App\Models\Course;
use App\Models\CourseRegister;
use App\Models\ClientSay;
use App\Models\Blog;
use App\Models\BlogCategory;


class FrontendController extends Controller
{
    public function index()
    {
        $data['portfolios'] = Portfolio::where('home', 1)->latest()->get()->take(6);
        $data['courses'] = Course::latest()->get();
        $data['clientsays'] = ClientSay::latest()->get();
        $data['blogs'] = Blog::where('status',1)->latest()->get()->take(3);
        return view('frontend.home',$data);
    }
    public function portfolio()
    {
        $data['portfolios'] = Portfolio::latest()->get();
        return view('frontend.portfolio',$data);

    }
    public function blogs()
    {
        $data['blogs'] = Blog::where('status',1)->latest()->get();
        $data['recentblogs'] = Blog::where('status',1)->latest()->get()->take(3);
        $data['categories'] = BlogCategory::all();
        return view('frontend.blog',$data);
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
    
    public function clientSays(){
        
        $data['clientsays'] = ClientSay::latest()->get();
        return view('frontend.reviews',$data);
    }
    
    public function blogDetails($slug){
        
        $data['blog'] = Blog::where('slug',$slug)->first();
        $data['blogs'] = Blog::where('status',1)->orderByRaw('RAND()')->get()->take(3);
        
        return view('frontend.blog-details',$data);
    }
    
    public function courseRegistration($slug){
        
        if (Auth::check() && Auth::user()->role == 2) {
            
            $course_id = Course::where('slug',$slug)->first()->id;
            
            $check = CourseRegister::where('user_id', Auth::user()->id)->whereIn('status', [0, 1, 2, 3])->where('course_id',$course_id)->first();
            
            if($check){
                $notification = array(
                'message' => 'You have already registered for this course. Please check your course list!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
            }else{
            
                $data['course'] = Course::where('slug',$slug)->first();
                return view('frontend.course-registration',$data);
            }
            
        } else {
            
            $notification = array(
                'message' => 'Please At First Login Your Account!',
                'alert-type' => 'info'
            );
            return redirect()->route('login.register')->with($notification);
        }
        
    }
    
    public function loginRegister(){
        if(Auth::check() && Auth::user()->role == 2){
            return redirect()->route('user.dashboard');
        }else{
            
        return view('frontend.login-register');
        }
    }



}
