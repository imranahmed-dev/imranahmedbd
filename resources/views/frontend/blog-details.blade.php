@extends('frontend.layouts.master')
@section('title',''.$blog->title.'')
@section('content')

<section class="bg-half d-table w-100" style="background: url({{asset('frontend/images/home/bg-pages.jpg')}})center center; background-repeat: no-repeat; ">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title" style="font-size: 20px !important"> {{$blog->title}} </h4>
                    <ul class="page-next bg-light d-inline-block py-2 px-4 mt-3 rounded mb-0">
                        <li><a href="{{url('/')}}" class="text-dark">Home</a></li>
                        <li>
                            <span class="text-primary"> Contact</span>
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

<!-- Blog STart -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4">
                <div class="sticky-sidebar">
                    <img src="{{asset($blog->image)}}" class="img-fluid rounded d-block" alt="image">
                </div>
            </div>
            <!-- BLog Start -->
            <div class="col-lg-7 col-md-8 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="blog position-relative overflow-hidden shadow rounded">
                    <div class="content p-4">
                        <h6 class="font-weight-normal"><a href="javscript:void(0)" class="text-primary">{{$blog->title}}</a></h6>
                        @php
                        $changedate = Date('d M Y',strtotime($blog->created_at));
                        @endphp
                        <ul class="list-unstyled mt-3">
                            <li class="list-inline-item me-3"><i class="mdi mdi-tag-outline me-1"></i><a href="javascript:void(0)" class="text-muted">{{$blog->category->category_name}}</a></li>
                            <li class="list-inline-item me-3"><i class="mdi mdi-account-heart me-1"></i><a href="javascript:void(0)" class="text-muted">Imran Ahmed</a></li>
                            <li class="list-inline-item"><i class="mdi mdi-calendar-edit me-1"></i><span class="text-muted">{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</span> </li>
                        </ul>
                        
                        <blockquote class="blockquote mt-3 p-3">
                            <div style="font-size: 15px">
                                {!! $blog->description !!}
                            </div>
                        </blockquote>
                    </div>
                </div>

                <div class="mt-4 pt-2 comment-area ">
                    <div class="p-4 shadow rounded">
                        <h5 class="page-title pb-3">Comments :</h5>
                        <div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="5"></div>
                        
                    </div>
                </div>
            </div>
            <!-- BLog End -->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <div class="bg-light py-5 mt-5">
        <div class="container">

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
    </div>
</section>
<!-- Blog -->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="U78trAkS"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f5cf1b44ba04a55"></script>



@endsection
