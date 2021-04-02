@extends('frontend.layouts.master')
@section('title','Courses')
@section('content')

<section class="bg-half d-table w-100" style="background: url({{asset('frontend/images/home/bg-pages.jpg')}})center center; background-repeat: no-repeat; ">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Courses </h4>
                    <ul class="page-next bg-light d-inline-block py-2 px-4 mt-3 rounded mb-0">
                        <li><a href="{{url('/')}}" class="text-dark">Home</a></li>
                        <li>
                            <span class="text-primary"> Courses</span>
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

<!-- Course Start -->
<section class="section pb-0" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="titles">
                        <h4 class="title title-line text-uppercase mb-4 pb-4">Online and Offline Courses</h4>
                        <span></span>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            @foreach($courses as $course)
            <!--start course-->
            <div class="col-md-4">
                <div class="entry2 m-2">
                    <a href="{{route('course.details',$course->slug)}}"><img src="{{asset($course->image)}}" alt="Image" class="img-fluid rounded crs-img"></a>
                    <div class="excerpt p-3 pt-1">
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
        <!--end row-->

    </div>
    <!--end container-->
</section>
<!-- Course End -->

<!--hireme-->
<section class="hire-me mb-5 pb-5 mt-5 pt-5">
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
