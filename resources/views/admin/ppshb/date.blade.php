@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Reset Date</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Reset Date</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Reset Date Start - End Ppshb</h2>

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            @foreach ($data as $datas)
                                <form action="/dateupdate/1" id="editpassword" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header">
                                        <h4>Default Validation</h4>
                                    </div>
                                    <div class="card-body grid-2">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input type="text" name="start" class="form-control datepicker"
                                                value="{{ $datas->start ?? now() }}">
                                        </div>
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input type="text" name="end" class="form-control datepicker"
                                                value="{{ $datas->end ?? now() }}">
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
