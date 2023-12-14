@extends('layouts.admin')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Progress Aktif</h4>
                        </div>
                        <div class="card-body">
                            {{$aktif}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Progress Pause</h4>
                        </div>
                        <div class="card-body">
                            {{$pause}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Reports</h4>
                        </div>
                        <div class="card-body">
                            1,201
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Form Masuk</h4>
                        </div>
                        <div class="card-body">
                            47
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Unordered List</h4>
                    </div>
                    <div class="card-body">
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum:</p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
                            <li>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
                            <li>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</li>
                            <li>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
                            <li>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</li>
                            <li>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection