@extends('admin.admin_master')


@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">


<div class="col-lg-6">
    <div class="card">
        <center>
        <img class="avatar-xl rounded-circle" src="{{ asset('backend/assets/images/small/img-5.jpg') }}" alt="Card image cap">
    </center>
        <div class="card-body">
            <h4 class="card-title">Name:- {{ $adminData->name }}</h4>
            <hr>
            <h4 class="card-title">Name:- {{ $adminData->email }}</h4>
            <hr>

            <h4 class="card-title">Name:- {{ $adminData->username }}</h4>

            <hr>


            <a href="{{ route('edit.profile') }}" class="btn btn-info btn-rounded waves-effect waves-light">Edit   </a>
            <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
            </p>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection
