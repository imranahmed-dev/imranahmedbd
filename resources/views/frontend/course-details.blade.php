@extends('frontend.layouts.master')
@section('title',''.$course->title.'')
@section('content')

<section class="bg-half d-table w-100" style="background: url({{asset('frontend/images/home/bg-pages.jpg')}})center center; background-repeat: no-repeat; ">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Courses Details </h4>
                    <ul class="page-next bg-light d-inline-block py-2 px-4 mt-3 rounded mb-0">
                        <li><a href="{{url('/')}}" class="text-dark">Home</a></li>
                        <li>
                            <span class="text-primary"> Courses Details</span>
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

<!--start course details-->
<section class="course-details py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="course-title">
                    <h3 class="mb-3" style="font-size: 27px !important;">{{$course->title}}</h3>
                    <div class="courses-meta">
                        <ul>
                            <li>
                                <i class="fa fa-tags"></i>
                                <span class="text-primary">Category</span>
                                <a href="#" class="docs-creator">{{$course->category}}</a>
                            </li>
                            <li>
                                <i class="fa fa-group"></i>
                                <span class="text-primary">Students Enrolled</span>
                                <a href="#" class="docs-creator">{{$course->student_enroll}}</a>
                            </li>

                        </ul>
                    </div>
                    <div class="course-image">
                        <img class="img-fluid mb-5" src="{{asset($course->image)}}" alt="image">

                        <div class="course-short-desc mb-5">
                            {!! $course->short_description !!}
                        </div>

                        <div class="course-long-desc">
                            {!! $course->long_description !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="course-info sticky-sidebar">
                    <div class="courses-sidebar-information">
                        <ul>

                            <li style="font-size: 20px; font-weight: bold; color: #f05925; padding: 15px;">
                                <span> Course Fee:</span>
                                {{$course->fee}}
                            </li>
                            <li>
                                <span><i class="fa fa-clock-o"></i> Duration:</span>
                                {{$course->duration}}
                            </li>
                            <li>
                                <span><i class="fa fa-tag"></i> Category:</span>
                                {{$course->category}}
                            </li>
                            <li>
                                <span><i class="fa fa-level-up"></i> Level:</span>
                                {{$course->skill_level}}
                            </li>
                            <li>
                                <span><i class="fa fa-language"></i> Language:</span>
                                Bangla
                            </li>
                            <li>
                                <span><i class="fa fa-gear"></i> Support:</span>
                                Yes
                            </li>
                            <li style="text-align: center; padding: 16px"><a href="{{route('course.registration',$course->slug)}}" class="cdregi-btn">Registraion Now</a></li>
                        </ul>
                    </div>
                    <div class="institle">
                        <h5 class="text-primary">Course Instructor:</h5>
                    </div>
                    <div class="instructor-details text-center">
                        <img class="img-fluid" src="{{asset('frontend')}}/images/home/imran.jpg" alt="image">
                        <h5 class="text-primary">Imran Ahmed</h5>
                        <span class="text-muted">Full Stack Web Developer</span>
                        <p>Hi! I'm a Web Application Developer. Web Application Developer with over 3 years of experience. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        <ul class="list-unstyled mb-0 mt-2 mt-sm-0 social-icon light-social-icon">
                            @if($setting->facebook_link)
                            <li class="list-inline-item"><a href="{{$setting->facebook_link}}" target="_blank"><i class="mdi mdi-facebook"></i></a></li>
                            @endif
                            @if($setting->twitter_link)
                            <li class="list-inline-item"><a href="{{$setting->twitter_link}}" target="_blank"><i class="mdi mdi-twitter"></i></a></li>
                            @endif
                            @if($setting->instagram_link)
                            <li class="list-inline-item"><a href="{{$setting->instagram_link}}" target="_blank"><i class="mdi mdi-instagram"></i></a></li>
                            @endif
                            @if($setting->linkedin_link)
                            <li class="list-inline-item"><a href="{{$setting->linkedin_link}}" target="_blank"><i class="mdi mdi-linkedin"></i></a></li>
                            @endif
                            @if($setting->github_link)
                            <li class="list-inline-item"><a href="{{$setting->github_link}}" target="_blank"><i class="mdi mdi-github-circle"></i></a></li>
                            @endif
                            @if($setting->youtube_link)
                            <li class="list-inline-item"><a href="{{$setting->youtube_link}}" target="_blank"><i class="mdi mdi-youtube"></i></a></li>
                            @endif
                        </ul>
                    </div>

                    <div class="course-share border p-3 pb-4 mt-4">
                        <h5 class="my-3">Share Now :</h5>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox_jot0"></div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="course-comment">
                    <h5 class="my-5 mb-3 text-primary" style="border-top:1px solid #ddd; border-bottom:1px solid #ddd;padding:10px 0;">Comments:</h5>
                    <div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="5"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end course details-->

<!--hireme-->
<section class="hire-me">
    <div class="container-fluid mt-100 mt-60">
        <div class="rounded-pill py-5" style="background: url({{asset('frontend/images/hireme.jpg')}}) center center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h4 class="text-light title-dark">I Am Available For Web Application Development Projects.</h4>
                        <p class="text-white-50 mx-auto mt-4 para-desc">Obviously I'm a Full Stack Web Developer. Experienced with all stages of the development cycle for dynamic web projects.</p>
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

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="U78trAkS"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f5cf1b44ba04a55"></script>



@endsection
