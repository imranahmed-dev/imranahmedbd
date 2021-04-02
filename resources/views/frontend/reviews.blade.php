@extends('frontend.layouts.master')
@section('title','Reviews')
@section('content')

<section class="bg-half d-table w-100" style="background: url({{asset($setting->section_banner)}})center center; background-repeat: no-repeat; ">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Reviews </h4>
                    <ul class="page-next bg-light d-inline-block py-2 px-4 mt-3 rounded mb-0">
                        <li><a href="{{url('/')}}" class="text-dark">Home</a></li>
                        <li>
                            <span class="text-primary"> Reviews</span>
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

<!-- Testimonial Start -->
<section class="cta-full">
    <div class="container-fluid">
        <div class="row position-relative">
            <div class="col-lg-12">
                <div class="cta-full-img-box">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <div class="titles">
                                    <h4 class="title title-line text-uppercase mb-4 pb-4">Clients & Students Says</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        @foreach($clientsays as $clientsay)
                        <div class="col-md-6">
                            <div class="tiny-slide">
                                <div class="client-review rounded shadow m-2">
                                    <div class="review-star">
                                        <!-- <ul class="list-unstyled float-right mb-0">
                                                <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            </ul>-->

                                        <div class="review-base">
                                            <h6 class="title" style="font-size:15px !important;">" {{$clientsay->type}} "</h6>
                                        </div>
                                    </div>
                                    <!--end review star-->

                                    <p class="text-muted review-para font-italic mt-3 mb-3">{{$clientsay->description}}</p>
                                    <div class="reviewer d-flex align-items-center">
                                        <img src="@if($clientsay->image) {{asset($clientsay->image)}} @else {{asset('defaults/avatar/avatar.png')}} @endif" class="img-fluid rounded-circle avatar avatar-small me-3" alt="image">
                                        <div class="content">
                                            <h5 class="name mb-0">{{$clientsay->name}}</h5>
                                            <small class="designation text-muted">{{$clientsay->designation}}</small>
                                        </div>
                                    </div>
                                    <!--end reviewer-->
                                </div>
                                <!--end client review-->
                            </div>
                            <!--End Client-->
                        </div>
                        @endforeach
                    </div>
                </div> <!-- end about detail -->
            </div> <!-- end col -->
        </div>
        <!--end row-->
    </div>
    <!--end container fluid-->
</section>
<!--end section-->
<!-- Testimonial End -->



<!--hireme-->
<section class="hire-me mb-5 pb-5 mt-3">
    <div class="container-fluid">
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
</section>




@endsection
