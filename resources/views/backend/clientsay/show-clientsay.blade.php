@extends('backend.layouts.master')
@section('title','Client Say Details')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Client Say Details</li>
    </ol>
    <h1 class="page-header">Client Say</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Client Say Details</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('clientsay.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-list"></i> All Client Say</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-td-valign-middle">
                        <tr>
                            <th>Client Image</th>
                            <td><img width="50" src="@if(!empty($clientsay->image)) {{asset( $clientsay->image ) }} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt=""></td>
                        </tr>
                        <tr>
                            <th width="20%">Type</th>
                            <td>{{$clientsay->type}}</td>
                        </tr>
                        <tr>
                            <th width="20%">Name</th>
                            <td>{{$clientsay->name}}</td>
                        </tr>
                        <tr>
                            <th width="20%">Designation</th>
                            <td>{{$clientsay->designation}}</td>
                        </tr>
                           <tr>
                            <th width="20%">Description</th>
                            <td>{{$clientsay->description}}</td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
