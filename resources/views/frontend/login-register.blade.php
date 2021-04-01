@extends('frontend.layouts.master')
@section('title','Login/Register')
@section('content')


<section class="bg-half d-table w-100" style="background: url({{asset('frontend/images/home/bg-pages.jpg')}})center center; background-repeat: no-repeat; ">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Login/Register </h4>
                    <ul class="page-next bg-light d-inline-block py-2 px-4 mt-3 rounded mb-0">
                        <li><a href="{{url('/')}}" class="text-dark">Home</a></li>
                        <li>
                            <span class="text-primary"> Login/Register</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>


<section class="login-register py-5" style="background: #fafafa;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card  mx-0 mx-md-3" style="border-radius: 0; min-height: 100%;">
                    <div class="p-4">
                        <h5 class="card-title mt-1 mb-5">Log In to Your Account!</h5>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="signin-email">Email address</label>
                                <input id="signin-email" name="email" type="email" class="form-control" placeholder="customer@example.com">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                            </div>
                            <div class="form-group">
                                <label for="signin-password">Password</label>
                                <input id="signin-password" name="password" type="password" class="form-control" placeholder="Secret word">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('password'))?($errors->first('password')):''}}</div>
                                <small class="form-text text-muted mt-3"><a href="#">Forgot password?</a></small>
                            </div>
                            <div class="form-group">
                                <input class="input-check__input" type="checkbox" id="signin-remember">
                                <label class="form-check-label" for="signin-remember">Remember Me</label>
                            </div>
                            <div class="form-group mb-4"><button type="submit" class="btn btn-primary">Log In</button></div>

                            <div class="btn-login">
                                <a style="overflow: hidden; background: transparent; border: 2px solid rgb(215, 216, 219); color: rgb(109, 115, 120);" href="{{ url('login/google') }}" class="btn btn-google mt-2">

                                    <svg class="float-left" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 12.2724C24 11.4216 23.9216 10.6044 23.7771 9.81836H12.2449V14.46H18.8351C18.6987 15.1942 18.4118 15.8937 17.9917 16.5162C17.5716 17.1386 17.0271 17.6712 16.391 18.0816V21.0936H20.3486C22.6641 19.0032 24 15.9276 24 12.2736V12.2724Z" fill="#4285F4"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2449 23.9999C15.551 23.9999 18.3233 22.9259 20.3486 21.0923L16.391 18.0815C15.2951 18.8015 13.8931 19.2275 12.2449 19.2275C9.0551 19.2275 6.3551 17.1155 5.39388 14.2799H1.30286V17.3879C2.32164 19.376 3.88454 21.0473 5.81685 22.2149C7.74917 23.3826 9.97477 24.0006 12.2449 23.9999Z" fill="#34A853"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.39388 14.2801C5.14898 13.5601 5.00939 12.7921 5.00939 12.0001C5.00939 11.2081 5.14898 10.4401 5.39388 9.72006V6.61206H1.30286C0.445732 8.28391 -0.000440122 10.1291 3.25781e-07 12.0001C3.25781e-07 13.9369 0.472653 15.7681 1.30286 17.3881L5.39265 14.2801H5.39388Z" fill="#FBBC05"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2449 4.7724C14.0424 4.7724 15.6563 5.3784 16.9261 6.5676L20.438 3.126C18.3171 1.188 15.5449 0 12.2449 0C7.45714 0 3.31837 2.688 1.30286 6.612L5.39265 9.72C6.35755 6.8832 9.05632 4.7724 12.2449 4.7724Z" fill="#EA4335"></path>
                                    </svg>
                                    <span style="display: block; margin-top: 2px;">Log in with Google</span>
                                </a>
                                
                                <a style="overflow: hidden;" href="javascript:;" class="btn btn-github mt-2">

                                    <i style="font-size:20px" class="fa fa-github float-left"></i>
                                    <span style="display: block; margin-top: 2px;">Log in with Github</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="card mx-0 mx-md-3" style="border-radius: 0">
                    <div class="p-4">
                        <h5 class="card-title mt-1 mb-5">Register and Start Learning!</h5>
                        <form action="{{route('user.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" name="reg_name" id="" placeholder="Full name" value="{{ old('reg_name') }}">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('reg_name'))?($errors->first('reg_name')):''}}</div>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="reg_email" placeholder="Email" value="{{ old('reg_email') }}">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('reg_email'))?($errors->first('reg_email')):''}}</div>
                            </div>
                            <div class="form-group">
                                <label for="">Mobile Number</label>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile number" value="{{ old('mobile') }}">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile'))?($errors->first('mobile')):''}}</div>
                            </div>
                            <div class="form-group">
                                <label for="#">Password</label>
                                <input class="form-control" type="password" name="reg_password" placeholder="Password" value="{{ old('reg_password') }}">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('reg_password'))?($errors->first('reg_password')):''}}</div>
                            </div>
                            <div class="form-group">
                                <label for="#">Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password" value="{{ old('password_confirmation') }}">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--hireme-->
<section class="hire-me">
    <div class="container-fluid mt-100 mt-60">
        <div class="rounded-pill py-5" style="background: url({{asset('frontend/images/hireme.jpg')}}) center center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h4 class="text-light title-dark">I Am Available For Web Application Development Projects.</h4>
                        <p class="text-white-50 mx-auto mt-4 para-desc">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        <div class="mt-4">
                            <a href="{{route('contact')}}" class="btn btn-primary mouse-down">Hire me</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!--end div-->
    </div>
    <!--end container fluid-->

    <div class="container">
        <div class="row py-5">
            <div class="col-md-4 mt-4 pt-2">
                <div class="contact-detail text-center">
                    <div class="icon">
                        <i data-feather="phone" class="fea icon-md"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title text-uppercase">Phone</h5>
                        <p class="text-muted">If you want to contact me by phone, you can call this numbers</p>
                        <a href="tel:+152534-468-854" class="text-primary"><i class="mdi mdi-phone"></i> {{$setting->mobile_one}}</a>
                        @if($setting->mobile_two)
                        <br>
                        <a href="tel:+152534-468-854" class="text-primary"> <i class="mdi mdi-phone"></i> {{$setting->mobile_two}}</a>
                        @endif
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 pt-2">
                <div class="contact-detail text-center">
                    <div class="icon">
                        <i data-feather="mail" class="fea icon-md"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title text-uppercase">Email</h5>
                        <p class="text-muted">If you would like to contact me via email, you can send a message to this email address</p>
                        <a href="mailto:{{$setting->email_one}}" class="text-primary"><i class="mdi mdi-email"></i> {{$setting->email_one}}</a>
                        @if($setting->email_two)
                        <br>
                        <a href="mailto:{{$setting->email_two}}" class="text-primary"> <i class="mdi mdi-email"></i> {{$setting->email_two}}</a>
                        @endif
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 pt-2">
                <div class="contact-detail text-center">
                    <div class="icon">
                        <i data-feather="map-pin" class="fea icon-md"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title text-uppercase">Location</h5>
                        <p class="text-muted"> {{$setting->address}}</p>
                        <a href="{{$setting->map_link}}" class="video-play-icon text-primary" target="_blank"> <i class="mdi mdi-map-marker"></i> View on Google map</a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
    </div>
</section>


@endsection
