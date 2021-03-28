@extends('backend.layouts.master')
@section('title','Create Course')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('course.index')}}">Course</a></li>
        <li class="breadcrumb-item active">Create Blog</li>
    </ol>
    <h1 class="page-header">Course</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Create Course</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('course.index') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-list"></i> Course list</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
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
                                            <input type="text" name="category" placeholder="Enter category" class="form-control" value="{{old('category')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('category'))?($errors->first('category')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Course Fee</label>
                                            <input type="text" name="fee" placeholder="Enter fee" class="form-control" value="{{old('fee')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('fee'))?($errors->first('fee')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Student Enroll</label>
                                            <input type="text" name="student_enroll" placeholder="Enter student enroll" class="form-control" value="{{old('student_enroll')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('student_enroll'))?($errors->first('student_enroll')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Duration</label>
                                            <input type="text" name="duration" placeholder="Enter duration" class="form-control" value="{{old('duration')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('duration'))?($errors->first('duration')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Skill Level</label>
                                            <input type="text" name="skill_level" placeholder="Enter skill level" class="form-control" value="{{old('skill_level')}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('skill_level'))?($errors->first('skill_level')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Short Description</label>
                                            <textarea class="summernote" name="short_description">{{old('short_description')}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('short_description'))?($errors->first('short_description')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Long Description</label>
                                            <textarea class="summernote" name="long_description">{{old('long_description')}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('long_description'))?($errors->first('long_description')):''}}</div>
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