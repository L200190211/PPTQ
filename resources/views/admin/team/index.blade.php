@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Our Team</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Our Team</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Our Team</h2>
                <p class="section-lead">Grouping multiple images on one component.</p>

                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header space">
                                        <h4>Our Team</h4>
                                        <a href="{{ route('addteam') }}" class="btn btn-icon icon-left btn-primary">
                                            <i class="far fa-edit"></i>Add</a>
                                    </div>
                                    <div class="card-body">
                                        <table id="example" class="table table-striped galery-t" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Galery</th>
                                                    <th>Name</th>
                                                    <th>Title</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="galery">
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets2/img/avatar/avatar-1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>Moh Yamin</td>
                                                    <td>Kepala Sekolah</td>
                                                    <td class="center-action">
                                                        <a href="#" class="btn btn-icon icon-left btn-primary">
                                                            <i class="far fa-edit"></i>Edit</a>
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="fas fa-times"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets2/img/avatar/avatar-1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>Moh Hatta</td>
                                                    <td>Wakil Kepala Sekolah</td>
                                                    <td class="center-action">
                                                        <a href="#" class="btn btn-icon icon-left btn-primary">
                                                            <i class="far fa-edit"></i>Edit</a>
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="fas fa-times"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets2/img/avatar/avatar-1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>Moh Hatta</td>
                                                    <td>Wakil Kepala Sekolah</td>
                                                    <td class="center-action">
                                                        <a href="#" class="btn btn-icon icon-left btn-primary">
                                                            <i class="far fa-edit"></i>Edit</a>
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="fas fa-times"></i> Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
@endsection
@section('scriptJS')
    <script>
        new DataTable('#example');
    </script>
@endsection
