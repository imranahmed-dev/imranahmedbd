@extends('backend.layouts.master')
@section('title','Portfolio Details')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Portfolio Details</li>
    </ol>
    <h1 class="page-header">Course</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Portfolio Details</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('portfolio.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-list"></i> All Portfolio</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-td-valign-middle">
                        <tr>
                            <th>Portfolio Image</th>
                            <td><img width="50" src="@if(!empty($portfolio->image)) {{asset( $portfolio->image ) }} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt=""></td>
                        </tr>
                        <tr>
                            <th width="20%">Title</th>
                            <td>{{$portfolio->title}}</td>
                        </tr>
                        <tr>
                            <th width="20%">Category</th>
                            <td>{{$portfolio->category}}</td>
                        </tr>
                        <tr>
                            <th width="20%">Website Link</th>
                            <td>{{$portfolio->website_link}}</td>
                        </tr>
                        <tr>
                            <th width="20%">Show In Home</th>
                            <td>@if($portfolio->home == 1) Active @else Inactive @endif</td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
