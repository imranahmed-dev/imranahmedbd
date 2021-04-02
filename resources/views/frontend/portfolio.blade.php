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
