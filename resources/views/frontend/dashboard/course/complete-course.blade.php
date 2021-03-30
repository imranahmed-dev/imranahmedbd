@extends('frontend.dashboard.dashboard-master')
@section('title','Complete Course')
@section('dashboard')

<div class="col-md-9">
    <div class="ud-content">
        <h5 class="ud-content-title">Complete Course</h5>
        <table class="table borderless text-nowrap">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Course Name</th>
                    <th>Duration</th>
                    <th>Course Fee</th>
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
                    <td><span class="custom-badge">
                            @if($course->status == 0)
                            Pending
                            @elseif($course->status == 1)
                            Accept
                            @elseif($course->status == 2)
                            Running
                            @elseif($course->status == 3)
                            Complete
                            @endif
                        </span></td>
                    <td>
                        <a href="{{route('course.details',$course->course->slug)}}" class="btn btn-primary btn-sm">View</a>
                        @if($course->status == 0)
                        <a id="delete" href="{{route('user.course.delete',$course->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center my-3">
                    {!! $courses->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
