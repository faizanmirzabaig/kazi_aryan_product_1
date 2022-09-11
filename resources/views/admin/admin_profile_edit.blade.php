@extends('admin.admin_master')
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Profile Page</h4>
                            <form method="POST" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text"
                                            value="{{ $editdata->name }}" id="example-text-input">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" class="form-control" type="text"
                                            value="{{ $editdata->email }}" id="example-text-input">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input name="username" class="form-control" type="text"
                                            value="{{ $editdata->username }}" id="example-text-input">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                    <div class="col-sm-10">
                                        <input id="image" name="profile_image" class="form-control" type="file"
                                            id="example-text-input">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">

                                        <img id="show_image" class="avatar-xl avatar-lg" src="{{ asset( !empty($editdata->profile_image) ? 'admin_images/'. $editdata->profile_image : 'admin_images/img-5.jpg' )}}" alt="Card image cap">

                                        {{-- @else --}}

                                        {{-- <img id="show_image" class="avatar-xl avatar-lg" src="{{ asset('backend/assets/images/small/img-5.jpg') }}" alt="Card image cap"> --}}

                                    </div>
                                </div>

                                <input class="btn btn-info waves-effect waves-light" type="submit" value="update profile"
                                    id="example-text-input">

                        </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
                    $('#image').change(function(e) {
                        console.log(e.target);
                            var reader = new FileReader();
                                reader.onload = function(e) {
                                    console.log(e);
                                    $('#show_image').attr('src', e.target.result);

                                }
                                reader.readAsDataURL(e.target.files['0']);
                                console.log(e.target.files['0']);
                        })

                    })
    </script>
@endsection
