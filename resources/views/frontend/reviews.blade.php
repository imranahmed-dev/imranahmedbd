@extends('frontend.layouts.master')
@section('title','Reviews')
@section('content')

<section class="bg-half d-table w-100" style="background: url({{asset('frontend/images/home/bg-pages.jpg')}})center center; background-repeat: no-repeat; ">
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
<section class="hire-me">
    <div class="container-fluid ">
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





@endsection
