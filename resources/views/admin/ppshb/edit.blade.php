@extends('layouts.admin')
@section('scriptCSS')
<style>

</style>
@endsection
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('complementary') }}">Complementary Data's</a></div>
                <div class="breadcrumb-item">Edit</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{ substr(Auth::user()->username, 0, strpos(Auth::user()->username, ' ')) }}
            </h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card profile-widget">
                        <div class="card-header">
                            <h4>Add Data</h4>
                        </div>
                        <form action="/complementary/edit/{{Auth()->user()->id}}/{{ $data->id_comp_ppshb}}" id="addcompid" method="POST" enctype="multipart/form-data" class="needs-validation">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Title</label>
                                        <input type="text" class="form-control" required="" name="title" value="{{ $data->title}}">
                                        <div class="invalid-feedback">
                                            Please fill in the Title
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Description</label>
                                        <textarea class="form-control" type="text" name="desc" id="desc" required autofocusaria-describedby="basic-addon2">{{ $data->desc}}</textarea>
                                        <div class="invalid-feedback">
                                            Please fill in the title / position
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Document</label>
                                        <input type="file" name="document" id="document" class="form-control upload">
                                        <div class="invalid-feedback">
                                            Please fill in the email
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('scriptJS')
<script>

</script>
@endsection