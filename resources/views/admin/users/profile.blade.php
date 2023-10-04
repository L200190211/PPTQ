@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Profile</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Hi, {{ substr($data->username, 0, strpos($data->username, ' ')) }}</h2>
                <p class="section-lead">
                    Change information about yourself on this page.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">
                                <img alt="image" src="{{ asset('assets2/img/avatar/avatar-1.png') }}"
                                    class="rounded-circle profile-widget-picture">
                            </div>
                            <form action="user/edituser" id="editprofile" method="POST" enctype="multipart/form-data"
                                class="needs-validation">
                                @csrf
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Username</label>
                                            <input type="text" class="form-control" value="{{ $data->username }}"
                                                required="" name="username">
                                            <div class="invalid-feedback">
                                                Please fill in the first name
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" value="{{ $data->name }}"
                                                required="" name="name">
                                            <div class="invalid-feedback">
                                                Please fill in the last name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="{{ $data->email }}"
                                                required="" name="email">
                                            <div class="invalid-feedback">
                                                Please fill in the email
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Phone</label>
                                            <input type="tel" class="form-control" value="{{ $data->no_tlp }}"
                                                name="no_tlp">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
