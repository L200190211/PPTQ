@extends('layouts.admin')
@section('scriptCSS')
<style>
    td.act {
        display: flex;
        gap: 1rem;
    }

    .card .card-header {
        justify-content: space-between;
    }
</style>
@endsection
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Complementary Data's</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Complementary Data's</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{ substr(Auth::user()->username, 0, strpos(Auth::user()->username, ' ')) }}</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card profile-widget">
                        <div class="card-header">
                            <h4>Fill Document</h4>
                            <a href="{{ route('addcomp') }}" class="btn btn-icon btn-primary">Add</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md" id="example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Desc</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($data as $datas)
                                        <tr>
                                            <th scope="row" style="width: 2%;">{{ $i++ }}</th>
                                            <td>{{ $datas->title }}</td>
                                            <?php
                                            $truncated = Str::of($datas->desc)->limit(30);
                                            ?>
                                            <td>{{ $truncated }}</td>
                                            <td class="center-action">
                                                <a href="{{ asset('img/berkas/'. $datas->document ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                <a href="{{-- /team/editteam/{{ $datas->id }} --}}" class="btn btn-icon btn-lg icon-left btn-primary">
                                                    <i class="far fa-edit"></i>Edit</a>
                                                <a href="{{-- /delteam/{{ $datas->id }} --}}" class="btn btn-lg btn-danger">
                                                    <i class="fas fa-times"></i> Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('scriptJS')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        new DataTable('#example');
    });
</script>
@endsection