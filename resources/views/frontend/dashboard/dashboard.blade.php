@extends('frontend.dashboard.dashboard-master')
@section('title','Dashboard')
@section('dashboard')

<div class="col-md-9">
    <div class="ud-content">
        <h5 class="ud-title">My Orders</h5>
        <div class="table-responsive">
            <table class="table borderless">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Transaction NO</th>
                        <th>Subtotal</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#202010</td>
                        <td>2020FD20</td>
                        <td>$205</td>
                        <td>$2050</td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td><a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td>#202010</td>
                        <td>2020FD20</td>
                        <td>$205</td>
                        <td>$2050</td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td><a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td>#202010</td>
                        <td>2020FD20</td>
                        <td>$205</td>
                        <td>$2050</td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td><a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
