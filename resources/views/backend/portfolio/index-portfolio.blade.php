@extends('backend.layouts.master')
@section('title','Portfolio')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Portfolio</li>
    </ol>
    <h1 class="page-header">Portfolio</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Portfolio List</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('portfolio.create') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-plus-circle"></i> Add New</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th class="text-nowrap">Image</th>
                                <th class="text-nowrap">Title</th>
                                <th class="text-nowrap">Category</th>
                                <th class="text-nowrap">Website Link</th>
                                <th class="text-nowrap">Home</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portfolios as $portfolio)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td><img width="50" src="{{asset($portfolio->image)}}" alt=""></td>
                                <td>{{ Str::limit($portfolio->title, 40)}}</td>
                                <td>{{$portfolio->category}}</td>
                                <td>{{$portfolio->website_link}}</td>
                                <td>@if($portfolio->home == 1) <span class="badge badge-success">Active</span> @else <span class="badge badge-danger">Inactive</span>@endif</td>

                                <td>
                                    <a href="{{route('portfolio.show',$portfolio->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View</a>
                                    <a href="{{route('portfolio.edit',$portfolio->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    <a id="delete" href="{{route('portfolio.destroy',$portfolio->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection