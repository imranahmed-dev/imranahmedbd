@extends('backend.layouts.master')
@section('title','Client Say')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Client Say</li>
    </ol>
    <h1 class="page-header">Client Say</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Client Say List</h4>
                    <div class="panel-heading-btn">
                        <a href="{{ route('clientsay.create') }}" class="btn btn-info btn-xs mr-2"><i class="fa fa-plus-circle"></i> Add New</a>
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
                                <th class="text-nowrap">Type</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">Description</th>
                                <th class="text-nowrap">Designation</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientsays as $clientsay)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td><img width="50" src="{{asset($clientsay->image)}}" alt=""></td>
                                <td>{{$clientsay->type}}</td>
                                <td>{{$clientsay->name}}</td>
                                <td>{{ Str::limit($clientsay->description, 30)}}</td>
                                <td>{{$clientsay->designation}}</td>

                                <td>
                                    <a href="{{route('clientsay.show',$clientsay->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View</a>
                                    <a href="{{route('clientsay.edit',$clientsay->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    <a id="delete" href="{{route('clientsay.destroy',$clientsay->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
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