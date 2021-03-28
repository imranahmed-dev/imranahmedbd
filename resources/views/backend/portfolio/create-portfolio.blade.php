@extends('backend.layouts.master')
@section('title','Create Portfolio')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('portfolio.index')}}">Portfolio</a></li>
        <li class="breadcrumb-item active">Create Portfolio</li>
    </ol>
    <h1 class="page-header">Portfolio</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Create Portfolio</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('portfolio.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-list"></i> Portfolio list</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('portfolio.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{old('title')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('title'))?($errors->first('title')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <input type="text" class="form-control" placeholder="Enter category" name="category" value="{{old('category')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('category'))?($errors->first('category')):''}}</div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <input id="noImage" type="file" name="image" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showNoImage" src="{{asset('defaults/noimage/no_img.jpg')}}" alt="image">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('image'))?($errors->first('image')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Website Link</label>
                                            <input type="text" class="form-control" placeholder="Website link" name="website_link" value="{{old('website_link')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('website_link'))?($errors->first('website_link')):''}}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input type="checkbox" name="home" class="form-check-input" id="exampleCheck1" value="1">
                                                <label class="form-check-label mt-1" for="exampleCheck1"> Show In Home</label>
                                            </div>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('home'))?($errors->first('home')):''}}</div>
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
