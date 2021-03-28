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
                    <h4 class="title">Hello! {{Auth::user()->name}} </h4>
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
                    <div class="ud-pp text-center">
                        <img src="@if(Auth::user()->image) {{asset(Auth::user()->image)}}  @else {{asset('defaults/avatar/avatar.png')}} @endif" alt="image">
                        <p>Welcome</p>
                        <h5>Imran Ahmed</h5>
                    </div>
                    <div class="ud-nav">
                        <a class="ud-active" href="#"><i class="fa fa-user-circle mr-1"></i> Profile</a>
                        <a href="#"><i class="fa fa-edit mr-1"></i> Edit Profile</a>
                        <a href="#"><i class="fa fa-key mr-1"></i> Change Password</a>

                        <a href="#"><i class="fa fa-shopping-cart mr-1"></i> My Orders</a>
                        <a href="#"><i class="fa fa-check-circle mr-1"></i> Success Delivery</a>
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
