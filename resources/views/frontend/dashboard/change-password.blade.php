@extends('frontend.dashboard.dashboard-master')
@section('title','Change Password')
@section('dashboard')

<div class="col-12 col-lg-9 mt-4 mt-lg-0">
    <div class="card">
        <div class="card-header">
            <h5>Change Password</h5>
        </div>
        <div class="card-divider"></div>
        <div class="card-body card-body--padding--2">
            <div class="row no-gutters">
                <div class="col-12 col-lg-7 col-xl-6">
                    <form action="{{route('user.update.password')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Current Password</label>
                            <input name="current_password" type="password" class="form-control" placeholder="Current password">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('current_password'))?($errors->first('current_password')):''}}</div>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input name="new_password" type="password" class="form-control" placeholder="New password">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('new_password'))?($errors->first('new_password')):''}}</div>
                        </div>
                        <div class="form-group">
                            <label>Reenter New Password</label>
                            <input name="password_confirmation" type="password" class="form-control" placeholder="Reenter new password">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</div>
                        </div>
                        <div class="form-group mb-0"><button type="submit" class="btn btn-primary mt-3">Change</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
