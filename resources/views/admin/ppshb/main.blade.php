@extends('layouts.admin')
@section('scriptCSS')
<style>
    td.act {
        display: flex;
        gap: 1rem;
    }
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
                        <form action="/editmain/{{ Auth::id() }}" id="editprofile" method="POST" enctype="multipart/form-data" class="needs-validation">
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
                                                <td class="act">
                                                    @if ($datas->pasphoto == null)
                                                    <input type="file" name="pasphoto" id="pasphoto" class="form-control upload">
                                                    @else
                                                    <a href="#" class="btn btn-info">Preview</a>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Rapot</td>
                                                <td>
                                                    @if ($datas->rapot == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td>@if ($datas->rapot == null)
                                                    <input type="file" name="rapot" id="rapot" class="form-control upload">
                                                    @else
                                                    <a href="#" class="btn btn-info">Preview</a>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Ijazah</td>
                                                <td>
                                                    @if ($datas->ijazah == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($datas->ijazah == null)
                                                    <input type="file" name="ijazah" id="ijazah" class="form-control upload">
                                                    @else
                                                    <a href="#" class="btn btn-info">Preview</a>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>SKL</td>
                                                <td>
                                                    @if ($datas->skl == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($datas->skl == null)
                                                    <input type="file" name="skl" id="skl" class="form-control upload">
                                                    @else
                                                    <a href="#" class="btn btn-info">Preview</a>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>Kartu Keluarga</td>
                                                <td>
                                                    @if ($datas->kk == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td>@if ($datas->kk == null)
                                                    <input type="file" name="kk" id="kk" class="form-control upload">
                                                    @else
                                                    <a href="#" class="btn btn-info">Preview</a>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>Akta Kelahiran</td>
                                                <td>
                                                    @if ($datas->akta == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td>@if ($datas->akta == null)
                                                    <input type="file" name="akta" id="akta" class="form-control upload">
                                                    @else
                                                    <a href="#" class="btn btn-info">Preview</a>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>7</td>
                                                <td>KIP (Opsional)</td>
                                                <td>
                                                    @if ($datas->kip == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td>@if ($datas->kip == null)
                                                    <input type="file" name="kip" id="kip" class="form-control upload">
                                                    @else
                                                    <a href="#" class="btn btn-info">Preview</a>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>8</td>
                                                <td>Surat Ketersediaan
                                                    <a href="#" class="btn btn-sm btn-primary">Download</a>
                                                </td>
                                                <td>
                                                    @if ($datas->surat_sedia == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td>@if ($datas->surat_sedia == null)
                                                    <input type="file" name="surat_sedia" id="surat_sedia" class="form-control upload">
                                                    @else
                                                    <a href="#" class="btn btn-info">Preview</a>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>9</td>
                                                <td>Surat Keabsahan Berkas
                                                    <a href="#" class="btn btn-sm btn-primary">Download</a>
                                                </td>
                                                <td>
                                                    @if ($datas->surat_absah == null)
                                                    <div class="badge badge-danger">x</div>
                                                    @else
                                                    <div class="badge badge-success">v</div>
                                                    @endif
                                                </td>
                                                <td>@if ($datas->surat_absah == null)
                                                    <input type="file" name="surat_absah" id="surat_absah" class="form-control upload">
                                                    @else
                                                    <a href="#" class="btn btn-info">Preview</a>
                                                    @endif
                                                </td>
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