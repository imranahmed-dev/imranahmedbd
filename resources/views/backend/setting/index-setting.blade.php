@extends('backend.layouts.master')
@section('title','Setting')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Setting</li>
    </ol>
    <h1 class="page-header">Setting</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Update Setting</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('setting.update',$setting->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Facebook Link</label>
                                            <input type="text" class="form-control" placeholder="Facebook link" name="facebook_link" value="{{$setting->facebook_link}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('facebook_link'))?($errors->first('facebook_link')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Twitter Link</label>
                                            <input type="text" class="form-control" placeholder="Twitter link" name="twitter_link" value="{{$setting->twitter_link}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('twitter_link'))?($errors->first('twitter_link')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Instagram Link</label>
                                            <input type="text" class="form-control" placeholder="Instagram link" name="instagram_link" value="{{$setting->instagram_link}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('instagram_link'))?($errors->first('instagram_link')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Linkedin Link</label>
                                            <input type="text" class="form-control" placeholder="Linkedin link" name="linkedin_link" value="{{$setting->linkedin_link}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('linkedin_link'))?($errors->first('linkedin_link')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Github Link</label>
                                            <input type="text" class="form-control" placeholder="Github link" name="github_link" value="{{$setting->github_link}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('github_link'))?($errors->first('github_link')):''}}</div>
                                        </div>
                                    </div>
                                       <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Youtube Link</label>
                                            <input type="text" class="form-control" placeholder="Youtube link" name="youtube_link" value="{{$setting->youtube_link}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('youtube_link'))?($errors->first('youtube_link')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Mobile No One</label>
                                            <input type="text" class="form-control" placeholder="Mobile no one" name="mobile_one" value="{{$setting->mobile_one}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile_one'))?($errors->first('mobile_one')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Mobile No Two</label>
                                            <input type="text" class="form-control" placeholder="Mobile no two (Optional)" name="mobile_two" value="{{$setting->mobile_two}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile_two'))?($errors->first('mobile_two')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Email One</label>
                                            <input type="text" class="form-control" placeholder="Email One" name="email_one" value="{{$setting->email_one}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('email_one'))?($errors->first('email_one')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Email Two</label>
                                            <input type="text" class="form-control" placeholder="Email Two (Optional)" name="email_two" value="{{$setting->email_two}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('email_two'))?($errors->first('email_two')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group">
                                            <label for="">Location/Address</label>
                                            <input type="text" class="form-control" placeholder="Location/Address" name="address" value="{{$setting->address}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('address'))?($errors->first('address')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group">
                                            <label for="">Map Link</label>
                                            <input type="text" class="form-control" placeholder="Map Link" name="map_link" value="{{$setting->map_link}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('map_link'))?($errors->first('map_link')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group">
                                            <label for="">Short About</label>
                                            <input type="text" class="form-control" placeholder="Short about" name="short_about" value="{{$setting->short_about}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('short_about'))?($errors->first('short_about')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">About Me</label>
                                            <textarea class="summernote" name="about_me">{{($setting->about_me)}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('about_me'))?($errors->first('about_me')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Terms & Condition</label>
                                            <textarea class="summernote" name="terms_condition">{{($setting->terms_condition)}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('terms_condition'))?($errors->first('terms_condition')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Privacy Policy</label>
                                            <textarea class="summernote" name="privacy_policy">{{($setting->privacy_policy)}}</textarea>
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('privacy_policy'))?($errors->first('privacy_policy')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Logo</label>
                                            <input id="noImage" type="file" name="logo" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showNoImage" src="@if(!empty($setting->logo)) {{asset($setting->logo)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="logo">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('logo'))?($errors->first('logo')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Banner</label>
                                            <input id="noImage" type="file" name="banner" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showNoImage" src="@if(!empty($setting->banner)) {{asset($setting->banner)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="logo">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('banner'))?($errors->first('banner')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Section Banner</label>
                                            <input id="noImage" type="file" name="section_banner" class="form-control">
                                            <img style="padding:4px;border:1px solid gray; margin: 10px 0; width:100px;" id="showNoImage" src="@if(!empty($setting->section_banner)) {{asset($setting->section_banner)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="logo">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('section_banner'))?($errors->first('section_banner')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="submit" value="Update" class="btn btn-success">
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