@extends('frontend.dashboard.dashboard-master')
@section('title','Dashboard')
@section('dashboard')

<div class="col-md-9">
    <div class="row">
        <div class="col-md-6 d-flex">
            <div class="ud-content-2 flex-grow-1 mb-3">
                <div class="prof-info text-center">
                    <img src="@if(Auth::user()->image) {{asset(Auth::user()->image)}}  @else {{asset('defaults/avatar/avatar.png')}} @endif" alt="image">
                    <h5 class="mt-3 mb-0">{{Auth::user()->name}}</h5>
                    <p>{{Auth::user()->email}}</p>
                    
                    <a href="#" data-toggle="modal" data-target="#profile-picture">Change Profile Picture</a>
                    
                    <!--Profile picture modal-->
                    <div class="modal fade" id="profile-picture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Change Profile Picture</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('user.change.pp')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input id="noImage" type="file" name="image" class="form-control">
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('image'))?($errors->first('image')):''}}</div>
                                        <img style="padding:4px;border:1px solid #ddd; border-radius: 3px; margin: 10px 0; width:100px; height: 100px;" id="showNoImage" src="@if(Auth::user()->image) {{asset(Auth::user()->image)}} @else {{asset('defaults/avatar/avatar.png')}} @endif" alt="image">
                                        <input type="submit" value="Save Changes" class="btn btn-primary btn-sm">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex">
            <div class="ud-content-2 flex-grow-1 mb-3">
                <div class="prof-txt">
                    <span class="prof-info-badge">General</span>
                    <h5>{{Auth::user()->name}}</h5>
                    <span>Address</span>
                    <p>@if(Auth::user()->address) {{Auth::user()->address}} @else N/A @endif</p>
                    <span>Phone Number</span>
                    <p>@if(Auth::user()->mobile) {{Auth::user()->mobile}} @else N/A @endif</p>
                    <span>Email Address</span>
                    <p>{{Auth::user()->email}}</p>
                </div>
            </div>
        </div>
    </div>
    @php
        $courses = App\Models\CourseRegister::where('user_id', Auth::user()->id)->latest()->get()->take(3);
    @endphp
    <div class="row">
        <div class="col">
            <div class="ud-content-2">
                <h5 class="mb-3">Recent Course</h5>
                <div class="table-responsive">
                    <table class="table borderless text-nowrap">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Course Name</th>
                                <th>Duration</th>
                                <th>Course Fee</th>
                                <th>Registration Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if($courses->count() == null)
                            <tr>
                                <td class="my-4 text-center" colspan="6">No Course Available!</td>
                            </tr>
                            @endif
                           @foreach($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->course->title}}</td>
                                <td>{{$course->course->duration}}</td>
                                <td>{{$course->course->fee}}</td>
                                <td>{{ \Carbon\Carbon::parse($course->created_at)->format('d M Y')}}</td>
                                <td><span class="custom-badge">
                                @if($course->status == 0)
                                Pending
                                @elseif($course->status == 1)
                                Accept
                                @elseif($course->status == 2)
                                Running
                                @elseif($course->status == 3)
                                Complete
                                @elseif($course->status == 4)
                                Cancel
                                @endif
                                </span></td>
                                <td>
                        <a href="{{route('course.details',$course->course->slug)}}" class="btn btn-primary btn-sm">View</a>
                        @if($course->status == 0)
                        <a id="course_status" href="{{route('user.course.cancel',$course->id)}}" class="btn btn-danger btn-sm">Cancel</a>
                        @endif
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
