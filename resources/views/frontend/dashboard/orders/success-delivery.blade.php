@extends('frontend.dashboard.dashboard-master')
@section('title','Success Delivery')
@section('dashboard')

<div class="col-12 col-lg-9 mt-4 mt-lg-0">
    <div class="card">
        <div class="card-header">
            <h5>Success Delivery</h5>
        </div>
        <div class="card-divider"></div>
        <div class="card-table">
            <div class="table-responsive-sm">
                <table>
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th class="text-nowrap">Order Number</th>
                            <th class="text-nowrap">Total</th>
                            <th class="text-nowrap">Date</th>
                            <th class="text-nowrap">Status</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($orders->count() == null)
                        <tr>
                            <td class="my-4 text-center" colspan="6">Data not found!</td>
                        </tr>
                        @endif
                        @foreach($orders as $row)
                        <tr class="odd gradeX">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->order_number}}</td>
                            <td>{{$row->total}}</td>
                            <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d M Y')}}</td>
                            <td>
                                @if($row->status == 0)
                                <span class="badge badge-warning">Pending</span>
                                @elseif($row->status == 1)
                                <span class="badge badge-info">Payment Accept</span>
                                @elseif($row->status == 2)
                                <span class="badge badge-info">Progress Delivery</span>
                                @elseif($row->status == 3)
                                <span class="badge badge-success">Delivered</span>
                                @elseif($row->status == 4)
                                <span class="badge badge-danger">Cancel</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('order.details',$row->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View</a>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-divider"></div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center my-3">
                        {!! $orders->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
