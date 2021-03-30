@extends('frontend.layouts.master')
@section('content')
@php
$route = Route::current()->getName();
@endphp

<section class="bg-half d-table w-100" style="background: url({{asset('frontend/images/home/bg-pages.jpg')}})center center; background-repeat: no-repeat; ">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title">Welcome</h4>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

<section class="user-dashboard clearfix py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="ud-sidebar">
                    <div class="ud-account">
                        <h5 class="p-4">My Account</h5>
                    </div>
                    <div class="ud-nav">
                        <a class="@if($route == 'user.dashboard') ud-active @endif" href="{{route('user.dashboard')}}"><i class="fa fa-dashboard mr-1"></i> Dashboard</a>
                        <a class="@if($route == 'user.edit.profile') ud-active @endif" href="{{route('user.edit.profile')}}"><i class="fa fa-pencil mr-1"></i> Edit Profile</a>
                        

                        <a class="@if($route == 'user.mycourse') ud-active @endif" href="{{route('user.mycourse')}}"><i class="fa fa-graduation-cap mr-1"></i> My Course</a>
                        <a class="@if($route == 'user.complete.course') ud-active @endif" href="{{route('user.complete.course')}}"><i class="fa fa-check-circle mr-1"></i> Complete Course</a>
                        <a class="@if($route == 'user.change.password') ud-active @endif" href="{{route('user.change.password')}}"><i class="fa fa-key mr-1"></i>@if(Auth::user()->password != null) Change Password @else Set Password @endif</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            @yield('dashboard')
            
        </div>
    </div>
</section>

@endsection
