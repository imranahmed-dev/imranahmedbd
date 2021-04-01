@extends('frontend.layouts.master')
@section('title','Imran Ahmed')
@section('content')

<!-- HOME START-->
<section class="bg-home d-flex align-items-center" style="background-image:url({{asset('frontend/images/home/02.jpg')}})" id="home">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="title-heading mt-5 mt-sm-0" data-aos="fade-up">
                    <img src="{{asset('frontend')}}/images/home/imran.png" class="img-fluid rounded-circle" alt="">
                    <h1 class="heading text-primary mt-3">Imran Ahmed</h1>
                    <h6 class="sub-title text-light title-dark">Professional <span class="element text-primary" data-elements="Full Stact Web Application Developer, Laravel Developer, Vue Js Developer,"></span><span id="typed" class="text-primary"></span></h6>
                    <div class="mt-4">
                        <a href="javascript:void(0)" class="btn btn-pill btn-primary">Download CV <i data-feather="download" class="fea icon-sm"></i></a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    
    <a href="#about" data-scroll-nav="1" class="mouse-icon mouse-icon-white rounded-pill bg-transparent mouse-down">
        <span class="wheel position-relative d-block mover"></span>
    </a>
</section>
<!--end section-->
<!-- HOME END-->
<div class="pt-1" style="background: url({{asset('frontend/images/home/marquee.jpg')}})center center; background-repeat: no-repeat; color:#fff; padding: 0 40px;">
    <marquee style="text-shadow: 1px 1px 1px #000; font-size: 17px;" behavior="scroll" direction="left" onMouseOver="this.stop()" onMouseOut="this.start()">Site Development Work in Progress, We Apologize For The Inconvenience</marquee>
</div>
<!-- About Start -->
<section class="section pb-3" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="about-hero">
                    <img src="{{asset('frontend')}}/images/hero.png" class="img-fluid mx-auto d-block about-tween position-relative" alt="">
                </div>
            </div>
            <!--end col-->

            <style>
                .about-desc p {
                    font-size: 14px;
                }

            </style>

            <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="section-title mb-0 ms-lg-5 ms-md-3">
                    <h4 class="title text-primary mb-3">Imran Ahmed</h4>
                    <div class="about-desc">

                        <p class="mb-1"><i class="fa fa-tasks"></i> Professional Full Stack Web Application/Software Developer</p>
                        <p class="mb-1"><i class="fa fa-graduation-cap"></i> Studied Diploma in Computer Science &amp; Engineering at Barguna Government Polytechnic Institute-BGPI</p>
                        <p><i class="fa fa-map-marker"></i> From Thakurgaon, Bangladesh</p>


                        <p class="text-muted">Hi! I'm a Web Application Developer. Web Application Developer with over 3 years of experience. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        <p class="text-muted">I have strong skills in HTML5, CSS3, Javascript, Jquery, Jquery Plugins Integration, Bootstrap, Nuxt Js, Vue Js, SCSS, Flexbox, Json, Webpack, Laravel, Php, MySQL, Rest API, API integration, Database design, Payment gateway integration.</p>
                    </div>

                    <div class="mt-4">
                        <a href="javascript:void(0)" class="btn btn-pill btn-primary docs-creator">Download CV <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download fea icon-sm">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg></a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <!--    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="titles">
                        <h4 class="title title-line text-uppercase mb-4 pb-4">Hobbies & Interests</h4>
                        <span></span>
                    </div>
                    <p class="text-muted mx-auto para-desc mb-0">My hobbies and interests are given below</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="heart" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Love To Learn</h6>
                        </div>
                    </div>
                </div>
            </div>
            end col
            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="monitor" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Developing</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="box" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Designing</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="stop-circle" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Mac OS</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="video" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Movies</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="coffee" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Coffee</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="music" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Music</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="watch" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Games</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="target" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Sports</h6>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="book" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Reading</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="smartphone" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Android</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                    <div class="hobbies d-flex align-items-center">
                        <div class="text-center rounded-pill me-4">
                            <i data-feather="activity" class="icon fea icon-md-sm"></i>
                        </div>
                        <div class="content">
                            <h6 class="title mb-0">Other Activity</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <div class="container-fluid mt-100 mt-60">
        <div class="rounded py-md-5 py-4" style="background: url({{asset('frontend/images/bg-counter.jpg')}}) center center;">
            <div class="container">
                <div class="row" id="counter">
                    <div class="col-lg-3 col-6">
                        <div class="counter-box rounded py-3 text-center">
                            <div class="counter-icon">
                                <i data-feather="thumbs-up" class="fea icon-md text-primary"></i>
                            </div>
                            <h3 class="counter-value mt-3 text-white title-dark" data-target="20">3</h3>
                            <h6 class="counter-head font-weight-normal mb-0 text-white title-dark">Project Complete</h6>
                        </div>
                        <!--end counter box-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3 col-6">
                        <div class="counter-box rounded py-3 text-center">
                            <div class="counter-icon">
                                <i data-feather="smile" class="fea icon-md text-primary"></i>
                            </div>
                            <h3 class="counter-value mt-3 text-white title-dark" data-target="20">3</h3>
                            <h6 class="counter-head font-weight-normal mb-0 text-white title-dark">Happy Client</h6>
                        </div>
                        <!--end counter box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-6">
                        <div class="counter-box rounded py-3 text-center">
                            <div class="counter-icon">
                                <i data-feather="coffee" class="fea icon-md text-primary"></i>
                            </div>
                            <h3 class="counter-value mt-3 text-white title-dark" data-target="65">3</h3>
                            <h6 class="counter-head font-weight-normal mb-0 text-white title-dark">Students</h6>
                        </div>
                        <!--end counter box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-6">
                        <div class="counter-box rounded py-3 text-center">
                            <div class="counter-icon">
                                <i data-feather="smile" class="fea icon-md text-primary"></i>
                            </div>
                            <h3 class="counter-value mt-3 text-white title-dark" data-target="65">3</h3>
                            <h6 class="counter-head font-weight-normal mb-0 text-white title-dark">Happy Students</h6>
                        </div>
                        <!--end counter box-->
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
<!-- About end -->

<!-- Course Start -->
<section class="section" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="titles">
                        <h4 class="title title-line text-uppercase mb-4 pb-4">My Courses</h4>
                        <span></span>
                    </div>
                    <p class="text-muted mx-auto para-desc mb-0">My Online and offline courses are given below</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-12">
                <div class="courses-slider">
                    @foreach($courses as $course)
                    <!--start course-->
                    <div class="tiny-slide">
                        <div class="entry2 m-2">
                            <a href="{{route('course.details',$course->slug)}}"><img src="{{asset($course->image)}}" alt="Image" class="img-fluid rounded crs-img"></a>
                            <div class="excerpt p-3">
                                <div class="post-meta align-items-center text-left clearfix">
                                    <figure class="author-figure mb-0 mr-3 float-left"><img src="{{asset('frontend')}}/images/home/imran.jpg" alt="Image" class="img-fluid"></figure>
                                    <span class="d-inline-block mt-1">By <a href="#">Imran Ahmed</a></span>
                                    <span>&nbsp;-&nbsp; {{$course->category}}</span>
                                </div>
                                <h2><a href="{{route('course.details',$course->slug)}}">{{$course->title}}</a></h2>
                                <p class="text-muted">{!!$course->short_description!!}</p>

                            </div>
                            <div class="course-money clearfix">
                                <span class="course-fee"> Course fee</span>
                                <span class="course-main-mone">BDT - {{$course->fee}}</span>
                            </div>
                        </div>
                    </div>
                    <!--end course-->
                    @endforeach
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-12 mt-4 pt-2">
                <div class="text-center">
                    <a href="{{route('courses')}}" class="btn btn-outline-primary">More Course <i data-feather="refresh-cw" class="fea icon-sm"></i></a>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div>
    <!--end container-->
</section>
<!-- Course End -->

<style>
    .myservice-icon img {
        width: 65px;
    }

</style>


<!-- Services Start -->
<section class="section bg-light" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="titles">
                        <h4 class="title title-line text-uppercase mb-4 pb-4">My Services</h4>
                        <span></span>
                    </div>
                    <p class="text-muted mx-auto para-desc mb-0">I'm offering web design, web development, Application, Laravel, Vue Js, Wordpress.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="service-wrapper rounded position-relative text-center border border-footer p-4">
                    <div class="icon text-primary">
                        <div class="myservice-icon">
                            <img src="{{asset('frontend/images/icons/web-design.svg')}}" alt="icon">
                        </div>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Web Design</h5>
                        <p class="text-muted mt-3 mb-0">Professional and affordable web design service. I design website with your customer in mind using latest technology & modern design trends...</p>
                    </div>
                    <div class="big-icon">
                        <i data-feather="monitor" class="fea icons"></i>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="service-wrapper rounded position-relative text-center border border-footer p-4">
                    <div class="icon text-primary">
                        <div class="myservice-icon">
                            <img src="{{asset('frontend/images/icons/web-development.svg')}}" alt="icon">
                        </div>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Web Development</h5>
                        <p class="text-muted mt-3 mb-0">Expert and experienced in web development. Proving all kinds of website development service from standard to complicated websites...</p>
                    </div>
                    <div class="big-icon">
                        <i data-feather="monitor" class="fea icons"></i>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="service-wrapper rounded position-relative text-center border border-footer p-4">
                    <div class="icon text-primary">
                        <div class="myservice-icon">
                            <img src="{{asset('frontend/images/icons/web-application.svg')}}" alt="icon">
                        </div>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Application</h5>
                        <p class="text-muted mt-3 mb-0">Easy to use and trustworthy application development service. Fully functional and detailed report based custom solution for enterprise platform...</p>
                    </div>
                    <div class="big-icon">
                        <i data-feather="monitor" class="fea icons"></i>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="service-wrapper rounded position-relative text-center border border-footer p-4">
                    <div class="icon text-primary">
                        <div class="myservice-icon">
                            <img src="{{asset('frontend/images/icons/laravel.png')}}" alt="icon">
                        </div>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Laravel</h5>
                        <p class="text-muted mt-3 mb-0">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation freeing you to create without sweating the small things...</p>
                    </div>
                    <div class="big-icon">
                        <i data-feather="monitor" class="fea icons"></i>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="service-wrapper rounded position-relative text-center border border-footer p-4">
                    <div class="icon text-primary">
                        <div class="myservice-icon">
                            <img src="{{asset('frontend/images/icons/vuejs.png')}}" alt="icon">
                        </div>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Vue Js</h5>
                        <p class="text-muted mt-3 mb-0">Vue.js is a progressive framework for JavaScript used to build web interfaces and one-page applications. Not just for web interfaces, Vue.js is a...</p>
                    </div>
                    <div class="big-icon">
                        <i data-feather="monitor" class="fea icons"></i>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="service-wrapper rounded position-relative text-center border border-footer p-4">
                    <div class="icon text-primary">
                        <div class="myservice-icon">
                            <img src="{{asset('frontend/images/icons/wordpress.svg')}}" alt="icon">
                        </div>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title">Wordpress</h5>
                        <p class="text-muted mt-3 mb-0">Looking for a powerful, compact and a high-performing WordPress website? You're in the right place. I am providing responsive and full functional...</p>
                    </div>
                    <div class="big-icon">
                        <i data-feather="monitor" class="fea icons"></i>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- Services End -->

<!-- Projects start -->
<section class="section bg-light pt-3" id="projects">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="titles">
                        <h4 class="title title-line text-uppercase mb-4 pb-4">My Portfolio</h4>
                        <span></span>
                    </div>
                    <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
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

        <div class="row">
            <div class="col-lg-12 mt-4 pt-2">
                <div class="text-center">
                    <a href="{{route('portfolio')}}" class="btn btn-outline-primary">More Portfolio <i data-feather="refresh-cw" class="fea icon-sm"></i></a>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- Projects End -->

<!-- Resume Start -->
<!--<section class="section" id="resume">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="titles">
                        <h4 class="title title-line text-uppercase mb-4 pb-4">Work Participation</h4>
                        <span></span>
                    </div>
                    <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="main-icon rounded-pill text-center mt-4 pt-2">
                    <i data-feather="star" class="fea icon-md-sm"></i>
                </div>
                <div class="timeline-page pt-2 position-relative">
                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="duration date-label-left border rounded p-2 ps-4 pe-4 position-relative shadow text-start">2015 - 2018</div>
                            </div>
                            end col
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="event event-description-right rounded p-4 border float-left text-start">
                                    <h5 class="title mb-0 text-capitalize">UX Designer</h5>
                                    <small class="company">Vivo - Senior Designer</small>
                                    <p class="timeline-subtitle mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                <div class="event event-description-left rounded p-4 border float-left text-end">
                                    <h5 class="title mb-0 text-capitalize">Web Developer</h5>
                                    <small class="company">Oppo - HR Manager</small>
                                    <p class="timeline-subtitle mt-3 mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                <div class="duration duration-right rounded border p-2 ps-4 pe-4 position-relative shadow text-start">2012 - 2015</div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="duration date-label-left border rounded p-2 ps-4 pe-4 position-relative shadow text-start"> 2012 - 2010</div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="event event-description-right rounded p-4 border float-left text-start">
                                    <h5 class="title mb-0 text-capitalize">Graphic Designer</h5>
                                    <small class="company">Apple - Testor</small>
                                    <p class="timeline-subtitle mt-3 mb-0 text-muted">Therefore always free from repetition, injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- Skill End -->

<!-- Skill & CTA START -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="titles">
                        <h4 class="title title-line text-uppercase mb-4 pb-4">My skills</h4>
                        <span></span>
                    </div>
                    <p class="text-muted mx-auto para-desc mb-0">My Frontend, Backend, and Others skills are given below</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 self-align-center">
                <img src="{{asset('frontend/images/skills/skills.jpg')}}" alt="image" class="img-fluid">
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <ul class="nav nav-pills flex-column px-0" id="pills-tab" role="tablist">
                            <li class="nav-item mb-4">
                                <a class="nav-link rounded active" id="pills-cloud-tab" data-bs-toggle="pill" href="#pills-cloud" role="tab" aria-controls="pills-cloud" aria-selected="false">
                                    <div class="skill-container text-center pt-1 pb-1">
                                        <h6 class="title mb-0">Frontend</h6>
                                    </div>
                                </a>
                                <!--end nav link-->
                            </li>
                            <!--end nav item-->

                            <li class="nav-item mb-4">
                                <a class="nav-link rounded" id="pills-smart-tab" data-bs-toggle="pill" href="#pills-smart" role="tab" aria-controls="pills-smart" aria-selected="false">
                                    <div class="skill-container text-center pt-1 pb-1">
                                        <h6 class="title mb-0">Backend</h6>
                                    </div>
                                </a>
                                <!--end nav link-->
                            </li>
                            <!--end nav item-->

                            <li class="nav-item mb-4">
                                <a class="nav-link rounded" id="pills-apps-tab" data-bs-toggle="pill" href="#pills-apps" role="tab" aria-controls="pills-apps" aria-selected="false">
                                    <div class="skill-container text-center pt-1 pb-1">
                                        <h6 class="title mb-0">Others</h6>
                                    </div>
                                </a>
                                <!--end nav link-->
                            </li>
                            <!--end nav item-->
                        </ul>
                        <!--end nav pills-->
                    </div>
                    <!--end col-->

                    <style>
                        .my-skills span {
                            background: #0872b9;
                            padding: 5px 25px;
                            display: inline-block;
                            color: #fff;
                            border-radius: 5px;
                            margin-top: 15px;
                            font-size: 14px;
                            margin-right: 7px;
                        }

                    </style>

                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="tab-content ps-lg-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud-tab">
                                <div class="my-skills">
                                    <span>HTML5</span>
                                    <span>CSS3</span>
                                    <span>JavaScript</span>
                                    <span>jQuery</span>
                                    <span>jQuery Plugins Integration</span>
                                    <span>Bootstrap</span>
                                    <span>Nuxt JS</span>
                                    <span>Vue JS</span>
                                    <span>SCSS</span>
                                    <span>Flexbox</span>
                                    <span>JSON</span>
                                    <span>Webpack</span>
                                </div>
                            </div>
                            <!--end teb pane-->

                            <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                                <div class="my-skills">
                                    <span>Laravel</span>
                                    <span>PHP</span>
                                    <span>MySQL</span>
                                    <span>REST API</span>
                                    <span>API Integration</span>
                                    <span>Database Design</span>
                                    <span>Payment Integration</span>
                                </div>
                            </div>
                            <!--end teb pane-->

                            <div class="tab-pane fade" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab">
                                <div class="my-skills">
                                    <span>CLI</span>
                                    <span>Git</span>
                                    <span>Github</span>
                                    <span>Ubuntu</span>
                                    <span>DigitalOcean</span>
                                    <span>Forge</span>
                                    <span>Cloudflare</span>
                                </div>
                            </div>
                            <!--end teb pane-->
                        </div>
                        <!--end tab content-->
                    </div>
                    <!--end col-->
                </div> <!-- end row -->
            </div> <!-- end col -->
        </div>
        <!--end row-->
    </div>
    <!--end container fluid-->
</section>
<!--end section-->
<!-- Skill & CTA End -->



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
                                <p class="text-muted mx-auto para-desc mb-0">What my students and clients have said about me</p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="client-review-slider">
                                @foreach($clientsays as $clientsay)
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
                                @endforeach
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-lg-12 mt-4 pt-2">
                            <div class="text-center">
                                <a href="{{route('clientsays')}}" class="btn btn-outline-primary">View More <i data-feather="refresh-cw" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                        <!--end col-->
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

<!-- Blog Start -->
<section class="section bg-light pb-3" id="news">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="titles">
                        <h4 class="title title-line text-uppercase mb-4 pb-4">Latest News & Blog</h4>
                        <span></span>
                    </div>
                    <p class="text-muted mx-auto para-desc mb-0">Below are all my new blogs & news.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            @foreach($blogs as $blog)

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="blog-post rounded shadow">
                    <img src="{{asset($blog->image)}}" class="img-fluid rounded-top" alt="image">
                    <div class="content pt-4 pb-4 p-3">
                        <ul class="list-unstyled d-flex justify-content-between post-meta">
                            <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Imran Ahmed</a></li>
                            <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">{{$blog->category->category_name}}</a></li>
                        </ul>
                        <h5 class="mb-3"><a href="{{route('blog.details',$blog->slug)}}" class="title text-dark">{{$blog->title}}</a></h5>
                        @php
                        $changedate = Date('d M Y',strtotime($blog->created_at));
                        @endphp
                        <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                            <li><a href="{{route('blog.details',$blog->slug)}}" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                            <li><i class="mdi mdi-calendar-edit me-1"></i>{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</li>
                        </ul>
                    </div>
                    <!--end content-->
                </div>
                <!--end blog post-->
            </div>
            <!--end col-->
            @endforeach

        </div>
        <!--end row-->
    </div>
    <!--end container-->

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
</section>
<!--end section-->
<!-- Blog Start -->

<!-- Contact Start -->
<section class="section pb-0" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="titles">
                        <h4 class="title title-line text-uppercase mb-4 pb-4">Contact Me</h4>
                        <span></span>
                    </div>
                    <p class="text-muted mx-auto para-desc mb-0">If you would like to contact me, please contact me using the methods below</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
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
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->

<section class="section pt-5 mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="custom-form mb-sm-30">
                    <form method="post" action="{{route('contact.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control border rounded" placeholder="Full name">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input name="email" type="text" class="form-control border rounded" placeholder="Your email">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="subject" class="form-control border rounded" placeholder="Your subject">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('subject'))?($errors->first('subject')):''}}</div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end col-->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <textarea name="message" rows="4" class="form-control border rounded" placeholder="Your message"></textarea>
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('message'))?($errors->first('message')):''}}</div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-sm-12 text-end">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end custom-form-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Contact End -->


@endsection
