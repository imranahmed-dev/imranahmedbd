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
                <div class="row">
                    <div class="col-lg-6 col-12 mb-4 pb-2">
                        <div class="blog-post rounded shadow">
                            <img src="{{asset('frontend')}}/images/blog/01.jpg" class="img-fluid rounded-top" alt="">
                            <div class="content pt-4 pb-4 p-3">
                                <ul class="list-unstyled d-flex justify-content-between post-meta">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm me-1">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <a href="javascript:void(0)" class="text-dark">Cristino</a>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag fea icon-sm me-1">
                                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                        </svg>
                                        <a href="javascript:void(0)" class="text-dark">Branding</a>
                                    </li>
                                </ul>
                                <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Our Home Entertainment has Evolved Significantly</a> </h5>
                                <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                    <li><a href="javascript:void(0)" class="text-dark">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right fea icon-sm">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg></a></li>
                                    <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                </ul>
                            </div>
                            <!--end content-->
                        </div>
                        <!--end blog post-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-12 mb-4 pb-2">
                        <div class="blog-post rounded shadow">
                            <img src="{{asset('frontend')}}/images/blog/02.jpg" class="img-fluid rounded-top" alt="">
                            <div class="content pt-4 pb-4 p-3">
                                <ul class="list-unstyled d-flex justify-content-between post-meta">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm me-1">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg><a href="javascript:void(0)" class="text-dark">Cristino</a></li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag fea icon-sm me-1">
                                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                        </svg><a href="javascript:void(0)" class="text-dark">Branding</a></li>
                                </ul>
                                <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">These Are The Voyages of The Starship Enterprise</a></h5>
                                <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                    <li><a href="javascript:void(0)" class="text-dark">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right fea icon-sm">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg></a></li>
                                    <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                </ul>
                            </div>
                            <!--end content-->
                        </div>
                        <!--end blog post-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-12 mb-4 pb-2">
                        <div class="blog-post rounded shadow">
                            <img src="{{asset('frontend')}}/images/blog/03.jpg" class="img-fluid rounded-top" alt="">
                            <div class="content pt-4 pb-4 p-3">
                                <ul class="list-unstyled d-flex justify-content-between post-meta">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm me-1">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg><a href="javascript:void(0)" class="text-dark">Cristino</a></li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag fea icon-sm me-1">
                                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                        </svg><a href="javascript:void(0)" class="text-dark">Branding</a></li>
                                </ul>
                                <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Three Reasons Visibility Matters in Supply Chain</a></h5>
                                <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                    <li><a href="javascript:void(0)" class="text-dark">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right fea icon-sm">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg></a></li>
                                    <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                </ul>
                            </div>
                            <!--end content-->
                        </div>
                        <!--end blog post-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-12 mb-4 pb-2">
                        <div class="blog-post rounded shadow">
                            <img src="{{asset('frontend')}}/images/blog/04.jpg" class="img-fluid rounded-top" alt="">
                            <div class="content pt-4 pb-4 p-3">
                                <ul class="list-unstyled d-flex justify-content-between post-meta">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm me-1">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg><a href="javascript:void(0)" class="text-dark">Cristino</a></li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag fea icon-sm me-1">
                                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                        </svg><a href="javascript:void(0)" class="text-dark">Branding</a></li>
                                </ul>
                                <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Our Home Entertainment has Evolved Significantly</a> </h5>
                                <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                    <li><a href="javascript:void(0)" class="text-dark">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right fea icon-sm">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg></a></li>
                                    <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                </ul>
                            </div>
                            <!--end content-->
                        </div>
                        <!--end blog post-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-12 mb-4 pb-2">
                        <div class="blog-post rounded shadow">
                            <img src="{{asset('frontend')}}/images/blog/05.jpg" class="img-fluid rounded-top" alt="">
                            <div class="content pt-4 pb-4 p-3">
                                <ul class="list-unstyled d-flex justify-content-between post-meta">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm me-1">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg><a href="javascript:void(0)" class="text-dark">Cristino</a></li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag fea icon-sm me-1">
                                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                        </svg><a href="javascript:void(0)" class="text-dark">Branding</a></li>
                                </ul>
                                <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">These Are The Voyages of The Starship Enterprise</a></h5>
                                <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                    <li><a href="javascript:void(0)" class="text-dark">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right fea icon-sm">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg></a></li>
                                    <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                </ul>
                            </div>
                            <!--end content-->
                        </div>
                        <!--end blog post-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-12 mb-4 pb-2">
                        <div class="blog-post rounded shadow">
                            <img src="{{asset('frontend')}}/images/blog/06.jpg" class="img-fluid rounded-top" alt="">
                            <div class="content pt-4 pb-4 p-3">
                                <ul class="list-unstyled d-flex justify-content-between post-meta">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm me-1">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg><a href="javascript:void(0)" class="text-dark">Cristino</a></li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag fea icon-sm me-1">
                                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                        </svg><a href="javascript:void(0)" class="text-dark">Branding</a></li>
                                </ul>
                                <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Three Reasons Visibility Matters in Supply Chain</a></h5>
                                <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                    <li><a href="javascript:void(0)" class="text-dark">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right fea icon-sm">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg></a></li>
                                    <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                </ul>
                            </div>
                            <!--end content-->
                        </div>
                        <!--end blog post-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-12 mb-4 pb-2">
                        <div class="blog-post rounded shadow">
                            <img src="{{asset('frontend')}}/images/blog/07.jpg" class="img-fluid rounded-top" alt="">
                            <div class="content pt-4 pb-4 p-3">
                                <ul class="list-unstyled d-flex justify-content-between post-meta">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm me-1">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg><a href="javascript:void(0)" class="text-dark">Cristino</a></li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag fea icon-sm me-1">
                                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                        </svg><a href="javascript:void(0)" class="text-dark">Branding</a></li>
                                </ul>
                                <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Our Home Entertainment has Evolved Significantly</a> </h5>
                                <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                    <li><a href="javascript:void(0)" class="text-dark">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right fea icon-sm">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg></a></li>
                                    <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                </ul>
                            </div>
                            <!--end content-->
                        </div>
                        <!--end blog post-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-12 mb-4 pb-2">
                        <div class="blog-post rounded shadow">
                            <img src="{{asset('frontend')}}/images/blog/08.jpg" class="img-fluid rounded-top" alt="">
                            <div class="content pt-4 pb-4 p-3">
                                <ul class="list-unstyled d-flex justify-content-between post-meta">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm me-1">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg><a href="javascript:void(0)" class="text-dark">Cristino</a></li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag fea icon-sm me-1">
                                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                        </svg><a href="javascript:void(0)" class="text-dark">Branding</a></li>
                                </ul>
                                <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">These Are The Voyages of The Starship Enterprise</a></h5>
                                <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                    <li><a href="javascript:void(0)" class="text-dark">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right fea icon-sm">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg></a></li>
                                    <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                </ul>
                            </div>
                            <!--end content-->
                        </div>
                        <!--end blog post-->
                    </div>
                    <!--end col-->

                    <!-- PAGINATION START -->
                    <div class="col-12">
                        <ul class="pagination justify-content-center mb-0 list-unstyled">
                            <li><a href="#" class="pe-3 ps-3 pt-2 pb-2"> Previous</a></li>
                            <li class="active"><a href="#" class="pe-3 ps-3 pt-2 pb-2">1</a></li>
                            <li><a href="#" class="pe-3 ps-3 pt-2 pb-2">2</a></li>
                            <li><a href="#" class="pe-3 ps-3 pt-2 pb-2">3</a></li>
                            <li><a href="#" class="pe-3 ps-3 pt-2 pb-2">Next </a></li>
                        </ul>
                        <!--end pagination-->
                    </div>
                    <!--end col-->
                    <!-- PAGINATION END -->
                </div>
                <!--end row-->
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
                                <img src="{{asset('frontend')}}/images/home/hero.jpg" class="avatar avatar-md shadow border mx-auto rounded-circle" alt="">
                                <div class="mt-4">
                                    <h6>Cristino Murphy</h6>
                                    <small>Web Designer</small>
                                    <ul class="list-unstyled social-icon social mt-4 mb-0">
                                        <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-vimeo"></i></a></li>
                                        <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Author -->

                    <!-- SEARCH -->
                    <div class="widget mt-4 pt-2">
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
                    </div>
                    <!-- SEARCH -->

                    <!-- CATAGORIES -->
                    <div class="widget mt-4 pt-2">
                        <div class="p-4 rounded shadow">
                            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Catagories</h6>
                            <ul class="list-unstyled mt-4 mb-0 catagories">
                                <li class="d-flex justify-content-between"><a href="jvascript:void(0)">Finance</a> <span>13</span></li>
                                <li class="d-flex justify-content-between"><a href="jvascript:void(0)">Business</a> <span>09</span></li>
                                <li class="d-flex justify-content-between"><a href="jvascript:void(0)">Blog</a> <span>18</span></li>
                                <li class="d-flex justify-content-between"><a href="jvascript:void(0)">Corporate</a> <span>20</span></li>
                                <li class="d-flex justify-content-between"><a href="jvascript:void(0)">Investment</a> <span>22</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- CATAGORIES -->

                    <!-- RECENT POST -->
                    <div class="widget mt-4 pt-2">
                        <div class="p-4 rounded shadow">
                            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Recent Post</h6>
                            <div class="mt-4">
                                <div class="clearfix d-flex align-items-center post-recent">
                                    <div class="post-recent-thumb"> <a href="jvascript:void(0)"> <img alt="img" src="{{asset('frontend')}}/images/blog/07.jpg" class="img-fluid rounded"></a></div>
                                    <div class="post-recent-content"><a href="jvascript:void(0)">Consultant Business</a><span class="text-muted">15th April, 2020</span></div>
                                </div>
                                <div class="clearfix d-flex align-items-center post-recent">
                                    <div class="post-recent-thumb"> <a href="jvascript:void(0)"> <img alt="img" src="{{asset('frontend')}}/images/blog/08.jpg" class="img-fluid rounded"></a></div>
                                    <div class="post-recent-content"><a href="jvascript:void(0)">Look On The Glorious Balance</a> <span class="text-muted">15th April, 2020</span></div>
                                </div>
                                <div class="clearfix d-flex align-items-center post-recent">
                                    <div class="post-recent-thumb"> <a href="jvascript:void(0)"> <img alt="img" src="{{asset('frontend')}}/images/blog/01.jpg" class="img-fluid rounded"></a></div>
                                    <div class="post-recent-content"><a href="jvascript:void(0)">Research Financial.</a> <span class="text-muted">15th April, 2020</span></div>
                                </div>
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
