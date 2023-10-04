@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Reset Password</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Reset Password</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Reset Password</h2>
                <p class="section-lead">
                    Form validation using default from Bootstrap 4
                </p>

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="resetpassword" id="editpassword" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h4>Default Validation</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Input Old Password</label>
                                        <input type="password" class="form-control" name="password" required=""
                                            id="password">
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" class="form-control" name="newpassword" required=""
                                            id="newpassword">
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit"  class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
