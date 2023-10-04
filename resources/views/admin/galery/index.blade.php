@extends('layouts.admin')
@section('scriptCSS')
    {{-- Datatables --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"> --}}
@endsection
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Galery</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Galery</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Galery</h2>
                <p class="section-lead">Grouping multiple images on one component.</p>

                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header space">
                                        <h4>Galery</h4>
                                        <a href="#" class="btn btn-icon icon-left btn-primary">
                                            <i class="far fa-edit"></i>Add</a>
                                    </div>
                                    <div class="card-body">
                                        <table id="example" class="table table-striped galery-i" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Galery</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="galery">
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets2/img/news/img01.jpg') }}" alt="">
                                                    </td>
                                                    <td class="center-action">
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="fas fa-times"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets2/img/news/img02.jpg') }}" alt="">
                                                    </td>
                                                    <td class="center-action">
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="fas fa-times"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets2/img/news/img03.jpg') }}" alt="">
                                                    </td>
                                                    <td class="center-action">
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
