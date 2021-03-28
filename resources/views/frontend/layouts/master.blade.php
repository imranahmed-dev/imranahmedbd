<!DOCTYPE html>
<html lang="en">
@php
$url = Request::path();
@endphp

<head>
    <meta charset="utf-8" />
    <title>@yield('title') - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Imran Ahmed">
    <meta name="description" content="  Imran Ahmed Software Engineer In Bangladesh, I am fullstack web developer i have 3year+ experience in web design and development, any body can hire me for web design and development
    Graphics designer bangaldesh, seo service provider bangladesh ">
    <meta name="keywords" content="imran ahmed,01755430927, imran, software engineer imran ahmed, web developer imran ahmed, software engineer in bangladesh,web developer in bangladesh, top ten software engineer in bangaldesh,top ten web developer in bangladesh,
    who is imran ahmed, imran ahmed address, imran ahmed contact, how to contact with imran ahmed, web designer imran ahmed, web designer in bangladesh ">
    <!-- <link rel="canonical" href="https://www.imranahmedbd.com" />-->

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('frontend')}}/images/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link href="{{asset('frontend')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- MK Lightbox -->
    <link href="{{asset('frontend')}}/css/mklb.css" rel="stylesheet" type="text/css" />
    <!-- Icon -->
    <link href="{{asset('frontend')}}/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />

    <!-- SLIDER -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/tiny-slider.css" />
    <!-- Animation -->
    <link href="{{asset('frontend')}}/css/aos.css" rel="stylesheet" type="text/css" />
    <!-- Custom Css -->
    <link href="{{asset('frontend')}}/css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{asset('frontend')}}/css/colors/default.css" rel="stylesheet" id="color-opt">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/custom.css">


    <!-- Frontend dashboard css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/dashboard')}}/css/ud-style.css">
    <!-- Toastr -->
    <link href="{{asset('defaults/toastr/toastr.min.css')}}" rel="stylesheet" />

    @if($url != '/')
    <style>
        .navbar-custom {
            background: #101130;
        }

    </style>
    @endif




</head>



<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="logo">
                <img src="{{asset($setting->logo)}}" width="100" class="d-block mx-auto" alt="">
            </div>
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navbar Start -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset($setting->logo)}}" class="l-dark" alt="logo">
                <img src="{{asset($setting->logo)}}" class="l-light" alt="logo light">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span data-feather="menu" class="fea icon-md"></span>
            </button>
            <!--end button-->

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul id="navbar-navlist" class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link @if($url == '/') active @endif" href="{{url('/')}}">Home</a>
                    </li>
                    <!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link @if($url == 'about') active @endif" href="{{url('about')}}">About</a>
                    </li>
                    <!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link @if($url == 'portfolio') active @endif" href="{{route('portfolio')}}">Portfolio</a>
                    </li>
                    <!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link @if($url == 'courses') active @endif" href="{{route('courses')}}">Courses</a>
                    </li>
                    <!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link @if($url == 'blogs') active @endif" href="{{route('blogs')}}">Blog</a>
                    </li>
                    <!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link @if($url == 'contact') active @endif" href="{{route('contact')}}">Contact</a>
                    </li>
                    <!--end nav item-->
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages
                        </a>
                        <div class="dropdown-menu rounded m-0" aria-labelledby="navbarDropdown">
                            <div class="container mx-0 mx-md-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="dropdown-item" href="page-blog.html">Blog</a>
                                        <a class="dropdown-item" href="page-blog-detail.html">Blog Detail</a>
                                        <a class="dropdown-item" href="page-portfolio.html">Portfolio</a>
                                        <a class="dropdown-item" href="page-portfolio-detail.html">Portfolio Detail</a>
                                    </div>
                                   
                                </div>
                                
                            </div>
                            
                        </div>
                    </li>-->
                    <!--end nav item-->
                </ul>

                <ul class="list-unstyled mb-0 mt-2 mt-sm-0 light-social-icon log-reg-btn">
                    @if(Auth::check() && Auth::user()->role == 2)
                    <li class="list-inline-item"><a href="{{route('user.dashboard')}}"><i class="mdi mdi-user"></i> {{Auth::user()->name}}</a></li>
                    @else
                    <li class="list-inline-item"><a href="{{route('login.register')}}"><i class="mdi mdi-user"></i> Login/Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <!--end container-->
    </nav>
    <!--end navbar-->
    <!-- Navbar End -->

    @yield('content')
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <a href="#"><img src="{{asset('frontend')}}/images/logo-light.png" width="160px" alt=""></a>
                    <p class="para-desc mx-auto mt-5">Obviously I'm a Full Stack Web Developer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                    <ul class="list-unstyled mb-0 mt-4 social-icon">

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
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="text-foot text-center text-light">
                    <p class="mb-0">© Copyright <script>
                            document.write(new Date().getFullYear())

                        </script> All Rights Reserved <i class="mdi mdi-heart text-danger"></i> by <a href="{{$setting->facebook_link}}" target="_blank" class="text-reset">Imran Ahmed</a>.</p>
                </div>
                <!--end container-->
            </div>
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" class="back-to-top rounded text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"> </i>
    </a>
    <!-- Back to top -->
    
    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- SLIDER -->
    <script src="{{asset('frontend')}}/js/tiny-slider.js"></script>
    <script src="{{asset('frontend')}}/js/tiny-slider-init.js"></script>
    <!-- MK Lightbox -->
    <script src="{{asset('frontend')}}/js/mklb.js"></script>
    <script src="{{asset('frontend')}}/js/filter.init.js"></script>
    <!-- Contact -->
    <script src="{{asset('frontend')}}/js/contact.js"></script>
    <!-- Counter -->
    <script src="{{asset('frontend')}}/js/counter.init.js"></script>
    <!-- Feather icon -->
    <script src="{{asset('frontend')}}/js/feather.min.js"></script>
    <!-- Ripples -->
    <script src="{{asset('frontend')}}/js/jquery.ripples-min.js"></script>
    <script src="{{asset('frontend')}}/js/ripple.init.js"></script>
    <!-- Animation -->
    <script src="{{asset('frontend')}}/js/aos.js"></script>
    <!-- Typed -->
    <script src="{{asset('frontend')}}/js/typed.js"></script>
    <!-- Switcher -->
    <script src="{{asset('frontend')}}/js/switcher.js"></script>
    <!-- Main Js -->
    <script src="{{asset('frontend')}}/js/app.js"></script>

    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: 1000
        });

        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            typeSpeed: 200,
            loop: true,
            strings: [
                'Full Stack Web Application Developer', 'Laravel Developer', 'Vue Js Developer',
            ],
        });

    </script>

    @yield('customjs')

    <!-- Sweetalert -->
    <script src="{{asset('defaults/sweetalert/sweetalert2@9.js')}}"></script>
    <!-- Toastr -->
    <script src="{{asset('defaults/toastr/toastr.min.js')}}"></script>


    <script>
        @if(Session::has('message'))
        var type = "{{Session::get('alert-type','info')}}"

        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif

    </script>
</body>

</html>
