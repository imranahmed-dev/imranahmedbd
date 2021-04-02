@extends('backend.layouts.master')
@section('title','Registration Details')
@section('content')
<style>
    .borderless td,
    .borderless thead tr th {
        border: none;
        padding: 8px;
        vertical-align: top;
        border-bottom: 1px solid #f1f1f1;
        font-size: 14px;
    }

    .borderless thead {
        background: #f2f9f2;
    }

    .card {
        box-shadow: 0 1px 3px rgb(0 0 0 / 9%);
        border: 1px solid #f5f5f5;
        border-radius: 0;
    }

    .order-shipping span {
        font-size: 13px;
        font-weight: 600;
        color: #555;
    }

    .order-shipping p {
        font-size: 14px;
        font-weight: 700;
        color: #444;
        margin-bottom: 12px;
    }

    .order-shipping h5 {
        font-size: 17px;
        margin-bottom: 20px;
        border-bottom: 1px solid #f1f1f1;
        padding-bottom: 12px;
    }

    .order-titles {
        border-bottom: 1px solid #f1f1f1;
        padding-bottom: 15px;
        font-size: 17px;
        margin-bottom: 30px;
    }

</style>

<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item">Course Registration</li>
        <li class="breadcrumb-item active">Registration Details</li>
    </ol>
    <h1 class="page-header">Course Registration</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Registration Details</h4>
                    <div class="panel-heading-btn">
                       <a href="{{ URL::previous() }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-arrow-left"> </i> Go Back</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body table-responsive">

                    <h4 class="mt-2 order-titles">Registration Date : {{ \Carbon\Carbon::parse($course->created_at)->format('d M Y')}}

                        <span class="float-right">
                            Course Status :
                            @if($course->status == 0)
                            <span class="badge badge-warning">Pending</span>
                            @elseif($course->status == 1)
                            <span class="badge badge-info">Accept</span>
                            @elseif($course->status == 2)
                            <span class="badge badge-info">Running</span>
                            @elseif($course->status == 3)
                            <span class="badge badge-success">Complete</span>
                            @elseif($course->status == 4)
                            <span class="badge badge-danger">Cancel</span>
                            @endif
                        </span>
                    </h4>

                    <div class="row mt-4">
                        <div class="col-md-6 d-flex">
                            <div class="card card-body order-shipping flex-grow-1">
                                <h5>User Information :</h5>
                                <span>Name</span>
                                <p>{{$user->name}}</p>
                                <span>Email</span>
                                <p>{{$user->email}}</p>
                                <span>Phone</span>
                                <p>{{$user->mobile}}</p>
                                <span>Sign Up Date</span>
                                <p>{{ \Carbon\Carbon::parse($user->created_at)->format('d M Y')}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-body order-shipping" style="min-height: 100%;">
                                <h5>Student Information :</h5>
                                <span>Name</span>
                                <p>{{$course->name}}</p>
                                <span>Email</span>
                                <p>{{$course->email}}</p>
                                <span>Mobile Number</span>
                                <p>{{$course->mobile_number}}</p>
                                <span>Sclool/College/University</span>
                                <p>{{$course->school_college}}</p>
                                <span>Semester/Year</span>
                                <p>{{$course->semester_year}}</p>

                                <span>Full Address</span>
                                <p>{{$course->address}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive mt-4">
                        <h4 class="mb-3">Course :</h4>
                        <table class="table borderless">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Duration</th>
                                    <th>Course Fee</th>
                                    <th>Registration Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$course->course->title}}</td>
                                    <td>{{$course->course->duration}}</td>
                                    <td>{{$course->course->fee}}</td>
                                    <td>{{ \Carbon\Carbon::parse($course->created_at)->format('d M Y')}}</td>
                                    <td>
                                        @if($course->status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                        @elseif($course->status == 1)
                                        <span class="badge badge-info">Accept</span>
                                        @elseif($course->status == 2)
                                        <span class="badge badge-info">Running</span>
                                        @elseif($course->status == 3)
                                        <span class="badge badge-success">Complete</span>
                                        @elseif($course->status == 4)
                                        <span class="badge badge-danger">Cancel</span>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
