@extends('backend.layouts.master')
@section('title','Edit Client Say')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('clientsay.index')}}">Client Say</a></li>
        <li class="breadcrumb-item active">Edit Client Say</li>
    </ol>
    <h1 class="page-header">Client Say</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Edit Client Say</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('clientsay.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-list"></i> Client Say list</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('clientsay.update',$clientsay->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Type</label>
                                            <input type="text" class="form-control" placeholder="Enter type" name="type" value="{{$clientsay->type}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('type'))?($errors->first('type')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$clientsay->name}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="description" class="form-control" rows="3" placeholder="Enter description">{{$clientsay->description}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('description'))?($errors->first('description')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Designation</label>
                                            <input type="text" class="form-control" placeholder="Enter designation" name="designation" value="{{$clientsay->designation}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('designation'))?($errors->first('designation')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <input id="noImage" type="file" name="image" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showNoImage" src="@if(!empty($clientsay->image)) {{asset( $clientsay->image ) }} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('image'))?($errors->first('image')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="submit" value="Submit" class="btn btn-success">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
