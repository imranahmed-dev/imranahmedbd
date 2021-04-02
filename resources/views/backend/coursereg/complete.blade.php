@extends('backend.layouts.master')
@section('title','Complete Course')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Complete Course</li>
    </ol>
    <h1 class="page-header">Complete Course</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Complete Course</h4>
                    <div class="panel-heading-btn">
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
                                <th class="text-nowrap">Student Name</th>
                                <th class="text-nowrap">Course Name</th>
                                <th class="text-nowrap">Duration</th>
                                <th class="text-nowrap">Course Fee</th>
                                <th class="text-nowrap">Registration Date</th>
                                <th class="text-nowrap">Status</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->course->title}}</td>
                                <td>{{$row->course->duration}}</td>
                                <td>{{$row->course->fee}}</td>
                                 <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d M Y')}}</td>
                                <td>
                                    
                                    @if($row->status == 0)
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#course_status_{{$row->id}}"> Pending</a>
                                    @elseif($row->status == 1)
                                    <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#course_status_{{$row->id}}"> Accept</a>
                                    @elseif($row->status == 2)
                                    <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#course_status_{{$row->id}}">Running</a>
                                    @elseif($row->status == 3)
                                    <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#course_status_{{$row->id}}"> Complete</a>
                                    @elseif($row->status == 4)
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#course_status_{{$row->id}}"> Cancel</a>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{route('coursereg.show',$row->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View</a>
                                    <a id="trash" href="{{route('coursereg.destroy',$row->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>

                            <!--Doctor Status -->
                            <div class="modal fade" id="course_status_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Course Status</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('coursereg.status', $row->id)}}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select name="status" class="form-control">
                                                       
                                                        <option value="0" @if( $row->status == 0 ) selected @endif >Pending</option>
                                                        
                                                        <option value="1" @if( $row->status == 1 ) selected @endif >Accept</option>
                                                        
                                                        <option value="2" @if( $row->status == 2 ) selected @endif >Running</option>
                                                        
                                                        <option value="3" @if( $row->status == 3 ) selected @endif >Complete</option>
                                                        
                                                        <option value="4" @if( $row->status == 4 ) selected @endif >Cancel</option>
                                                        
                                                    </select>

                                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('status'))?($errors->first('status')):''}}</div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
