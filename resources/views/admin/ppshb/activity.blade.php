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
            <h2 class="section-title">Hi, {{ substr(Auth::user()->username, 0, strpos(Auth::user()->username, ' ')) }}</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card profile-widget">
                        <form action="user/edituser" id="editprofile" method="POST" enctype="multipart/form-data" class="needs-validation">
                            @csrf
                            <div class="card-header">
                                <h4>Fill Document</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Document</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($data as $datas)
                                            <tr>
                                                <td>1</td>
                                                <td>Pas Photo</td>
                                                <td>
                                                    @if ($datas->pasphoto == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td><a href="#" class="btn btn-secondary">Preview</a></td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Rapot</td>
                                                <td>
                                                    @if ($datas->pasphoto == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td><a href="#" class="btn btn-secondary">Preview</a></td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Ijazah</td>
                                                <td>
                                                    @if ($datas->pasphoto == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td><a href="#" class="btn btn-secondary">Preview</a></td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>SKL</td>
                                                <td>
                                                    @if ($datas->pasphoto == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td><a href="#" class="btn btn-secondary">Preview</a></td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Kartu Keluarga</td>
                                                <td>
                                                    @if ($datas->pasphoto == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td><a href="#" class="btn btn-secondary">Preview</a></td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Akta Kelahiran</td>
                                                <td>
                                                    @if ($datas->pasphoto == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td><a href="#" class="btn btn-secondary">Preview</a></td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>KIP (Opsional)</td>
                                                <td>
                                                    @if ($datas->pasphoto == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td><a href="#" class="btn btn-secondary">Preview</a></td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Surat Ketersediaan <button>Download</button></td>
                                                <td>
                                                    @if ($datas->pasphoto == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td><a href="#" class="btn btn-secondary">Preview</a></td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Surat Keabsahan Berkas <button>Download</button></td>
                                                <td>
                                                    @if ($datas->pasphoto == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td><a href="#" class="btn btn-secondary">Preview</a></td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
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