@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                  <center> <img class="rounded-circle avatar-xl text-center pt-4" src="{{ asset('backend/') }}/assets/images/small/img-5.jpg" alt="Card image cap"></center>
                    <div class="card-body">
                        <h4 class="card-title">Name: {{ $adminData->name }}</h4><hr>
                        <h4 class="card-title">Email: {{ $adminData->email }}</h4><hr>
                        <button class="btn btn-info btn-rounded waves-effect waves-light" type="button">Edit Profile</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
