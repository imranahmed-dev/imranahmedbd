@extends('frontend.layouts.master')
@section('title','Blogs')
@section('content')

<section class="bg-half d-table w-100" style="background: url({{asset('frontend/images/home/bg-pages.jpg')}})center center; background-repeat: no-repeat; ">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Blogs </h4>
                    <ul class="page-next bg-light d-inline-block py-2 px-4 mt-3 rounded mb-0">
                        <li><a href="{{url('/')}}" class="text-dark">Home</a></li>
                        <li>
                            <span class="text-primary"> Blogs</span>
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

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">

                <div class="sticky-sidebar">
                    <div class="row">
                        @foreach($blogs as $blog)

                        <div class="col-lg-6 col-12 mb-4 pb-2">
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
            </div>
            <!--end col-->

            <!-- START SIDEBAR -->
            <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="sidebar sticky-sidebar">
                    <!-- Author -->
                    <div class="widget">
                        <div class="p-4 rounded shadow">
                            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Author</h6>
                            <div class="text-center author mt-4">
                                <img src="{{asset('frontend')}}/images/home/imran.jpg" class="avatar avatar-md shadow border mx-auto rounded-circle" alt="">
                                <div class="mt-4">
                                    <h6 class="mb-1">Imran Ahmed</h6>
                                    <small>Full Stack Web Developer</small>
                                    <ul class="list-unstyled mb-0 mt-4 social-icon light-social-icon">
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
                            </div>
                        </div>
                    </div>
                    <!-- Author -->

                    <!-- SEARCH -->
                    <!--<div class="widget mt-4 pt-2">
                        <div class="p-4 rounded shadow">
                            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Search</h6>
                            <div id="search2" class="widget-search mt-4 mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="border rounded" name="s" id="s" placeholder="Search Keywords...">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>-->
                    <!-- SEARCH -->

                    <!-- CATAGORIES -->
                    <div class="widget mt-4 pt-2">
                        <div class="p-4 rounded shadow">
                            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Catagories</h6>
                            <ul class="list-unstyled mt-4 mb-0 catagories">
                               @foreach($categories as $category)
                               @php
                               $blogCount = App\Models\Blog::where('category_id',$category->id)->count();
                               @endphp
                                <li class="d-flex justify-content-between"><a href="jvascript:void(0)">{{$category->category_name}}</a> <span>{{$blogCount}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- CATAGORIES -->

                    <!-- RECENT POST -->
                    <div class="widget mt-4 pt-2">
                        <div class="p-4 rounded shadow">
                            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Recent Post</h6>
                            <div class="mt-4">
                               @foreach($recentblogs as $blog)
                                <div class="clearfix d-flex align-items-center post-recent">
                                    <div class="post-recent-thumb"> <a href="{{route('blog.details',$blog->slug)}}"> <img alt="img" src="{{asset($blog->image)}}" class="img-fluid rounded"></a></div>
                                    <div class="post-recent-content"><a href="{{route('blog.details',$blog->slug)}}">Consultant Business</a><span class="text-muted">{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</span></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- RECENT POST -->
                </div>
            </div>
            <!--end col-->
            <!-- END SIDEBAR -->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

@endsection
