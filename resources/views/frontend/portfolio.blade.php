@extends('frontend.layouts.master')
@section('title','Portfolio')
@section('content')

<section class="bg-half d-table w-100" style="background: url({{asset('frontend/images/home/bg-pages.jpg')}})center center; background-repeat: no-repeat; ">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Portfolio </h4>
                    <ul class="page-next bg-light d-inline-block py-2 px-4 mt-3 rounded mb-0">
                        <li><a href="{{url('/')}}" class="text-dark">Home</a></li>
                        <li>
                            <span class="text-primary"> Portfolio</span>
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

<!-- Projects End -->
<section class="section bg-light" id="projects">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="titles">
                        <h4 class="title title-line text-uppercase mb-4 pb-4">Project & Works</h4>
                        <span></span>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>

    <div class="container">
        <!-- Gallary -->
        <div class="row">
            @foreach($portfolios as $portfolio)
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="item-box portfolio-box rounded shadow bg-white overflow-hidden">
                    <div class="portfolio-box-img position-relative overflow-hidden">
                        <img class="item-container img-fluid mx-auto" src="{{asset($portfolio->image)}}" alt="1" />
                        <div class="overlay-work">
                            <div class="work-content text-center">
                                <a href="javascript:void(0)" data-src="{{asset($portfolio->image)}}" data-gallery="myGal" class="text-light work-icon bg-dark d-inline-block rounded-pill mfp-image"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallary-title py-3 px-2 text-center">
                        <span>{{$portfolio->category}}</span>
                        <h5><a href="javascript:void(0)" class="title text-dark">{{$portfolio->title}}</a></h5>
                        <div class="text-center course-preview-box">
                            <a href="{{$portfolio->website_link}}" target="_blank">Preview</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Projects End -->

<!-- Testimonial Start -->
<section class="cta-full">
    <div class="container-fluid">
        <div class="row position-relative">
            <div class="col-lg-12">
                <div class="cta-full-img-box pb-2">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <div class="titles">
                                    <h4 class="title title-line text-uppercase mb-4 pb-4">Clients say</h4>
                                    <span></span>
                                </div>
                                <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="client-review-slider">
                                <div class="tiny-slide">
                                    <div class="client-review rounded shadow m-2">
                                        <div class="review-star">

                                            <div class="review-base">
                                                <h6 class="title">" Design Quality "</h6>
                                            </div>
                                        </div>
                                        <!--end review star-->

                                        <p class="text-muted review-para font-italic mt-3 mb-3">There are many variations of passages of Lorem Ipsum available, by injected humour, or randomised words which don't look even slightly believable. </p>
                                        <div class="reviewer d-flex align-items-center">
                                            <img src="{{asset('frontend')}}/images/client/01.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                            <div class="content">
                                                <h5 class="name mb-0">Erich Bissonette</h5>
                                                <small class="designation text-muted">Oppo</small>
                                            </div>
                                        </div>
                                        <!--end reviewer-->
                                    </div>
                                    <!--end client review-->
                                </div>
                                <!--End Client-->

                                <!--Start Client-->
                                <div class="tiny-slide">
                                    <div class="client-review rounded shadow m-2">
                                        <div class="review-star">

                                            <div class="review-base">
                                                <h6 class="title">" Code Quality "</h6>
                                            </div>
                                        </div>
                                        <!--end review star-->

                                        <p class="text-muted review-para font-italic mt-3 mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                        <div class="reviewer d-flex align-items-center">
                                            <img src="{{asset('frontend')}}/images/client/02.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                            <div class="content">
                                                <h5 class="name mb-0">Tina Meyer</h5>
                                                <small class="designation text-muted">Vivo</small>
                                            </div>
                                        </div>
                                        <!--end reviewer-->
                                    </div>
                                    <!--end client review-->
                                </div>
                                <!--End Client-->

                                <!--Start Client-->
                                <div class="tiny-slide">
                                    <div class="client-review rounded shadow m-2">
                                        <div class="review-star">

                                            <div class="review-base">
                                                <h6 class="title">" Feature Availability "</h6>
                                            </div>
                                        </div>
                                        <!--end review star-->

                                        <p class="text-muted review-para font-italic mt-3 mb-3">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                        <div class="reviewer d-flex align-items-center">
                                            <img src="{{asset('frontend')}}/images/client/03.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                            <div class="content">
                                                <h5 class="name mb-0">Sharon Murdock</h5>
                                                <small class="designation text-muted">Apple</small>
                                            </div>
                                        </div>
                                        <!--end reviewer-->
                                    </div>
                                    <!--end client review-->
                                </div>
                                <!--End Client-->

                                <!--Start Client-->
                                <div class="tiny-slide">
                                    <div class="client-review rounded shadow m-2">
                                        <div class="review-star">

                                            <div class="review-base">
                                                <h6 class="title">" Customizability "</h6>
                                            </div>
                                        </div>
                                        <!--end review star-->

                                        <p class="text-muted review-para font-italic mt-3 mb-3">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                        <div class="reviewer d-flex align-items-center">
                                            <img src="{{asset('frontend')}}/images/client/04.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                            <div class="content">
                                                <h5 class="name mb-0">Jesse Hunt</h5>
                                                <small class="designation text-muted">Samsung</small>
                                            </div>
                                        </div>
                                        <!--end reviewer-->
                                    </div>
                                    <!--end client review-->
                                </div>
                                <!--End Client-->

                                <!--Start Client-->
                                <div class="tiny-slide">
                                    <div class="client-review rounded shadow m-2">
                                        <div class="review-star">

                                            <div class="review-base">
                                                <h6 class="title">" Flexibility "</h6>
                                            </div>
                                        </div>
                                        <!--end review star-->

                                        <p class="text-muted review-para font-italic mt-3 mb-3">There are many variations of passages of Lorem Ipsum available, by injected humour, or randomised words which don't look even slightly believable. </p>
                                        <div class="reviewer d-flex align-items-center">
                                            <img src="{{asset('frontend')}}/images/client/05.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                            <div class="content">
                                                <h5 class="name mb-0">Andrea Toy</h5>
                                                <small class="designation text-muted">Nokia</small>
                                            </div>
                                        </div>
                                        <!--end reviewer-->
                                    </div>
                                    <!--end client review-->
                                </div>
                                <!--End Client-->

                                <!--Start Client-->
                                <div class="tiny-slide">
                                    <div class="client-review rounded shadow m-2">
                                        <div class="review-star">

                                            <div class="review-base">
                                                <h6 class="title">" Development "</h6>
                                            </div>
                                        </div>
                                        <!--end review star-->

                                        <p class="text-muted review-para font-italic mt-3 mb-3"> It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                                        <div class="reviewer d-flex align-items-center">
                                            <img src="{{asset('frontend')}}/images/client/06.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                            <div class="content">
                                                <h5 class="name mb-0">Jay Allums</h5>
                                                <small class="designation text-muted">RedMI</small>
                                            </div>
                                        </div>
                                        <!--end reviewer-->
                                    </div>
                                    <!--end client review-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
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
