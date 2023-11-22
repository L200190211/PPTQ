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
                                                    <div class="badge badge-danger"><i class="fas fa-times"></i></div>
                                                    @else
                                                    <div class="badge badge-success"><i class="fas fa-check"></i></div>
                                                    @endif
                                                </td>
                                                <form action="/editphoto/{{ Auth::id() }}" id="editprofile" method="POST" enctype="multipart/form-data" class="needs-validation">
                                                @csrf
                                                <td class="act">
                                                    @if ($datas->pasphoto == null)
                                                    @else
                                                    <a href="{{ asset('img/berkas/'. $datas->pasphoto ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                    @endif
                                                    <input type="file" name="pasphoto" id="pasphoto" class="form-control upload">
                                                    <button class="btn btn-lg btn-primary">Save</button>
                                                </td>
                                                </form>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Rapot</td>
                                                <td>
                                                    @if ($datas->rapot == null)
                                                    <div class="badge badge-danger"><i class="fas fa-times"></i></div>
                                                    @else
                                                    <div class="badge badge-success"><i class="fas fa-check"></i></div>
                                                    @endif
                                                </td>
                                                <form action="/editrapot/{{ Auth::id() }}" id="editprofile" method="POST" enctype="multipart/form-data" class="needs-validation">
                                                @csrf
                                                <td class="act">@if ($datas->rapot == null)
                                                    @else
                                                    <a href="{{ asset('img/berkas/'. $datas->rapot ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                    @endif
                                                    <input type="file" name="rapot" id="rapot" class="form-control upload">
                                                    <button class="btn btn-lg btn-primary">Save</button>
                                                </td>
                                                </form>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Ijazah</td>
                                                <td>
                                                    @if ($datas->ijazah == null)
                                                    <div class="badge badge-danger"><i class="fas fa-times"></i></div>
                                                    @else
                                                    <div class="badge badge-success"><i class="fas fa-check"></i></div>
                                                    @endif
                                                </td>
                                                <form action="/editijazah/{{ Auth::id() }}" id="editprofile" method="POST" enctype="multipart/form-data" class="needs-validation">
                                                @csrf
                                                <td class="act">
                                                    @if ($datas->ijazah == null)
                                                    @else
                                                    <a href="{{ asset('img/berkas/'. $datas->ijazah ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                    @endif
                                                    <input type="file" name="ijazah" id="ijazah" class="form-control upload">
                                                    <button class="btn btn-lg btn-primary">Save</button>
                                                </td>
                                                </form>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>SKL</td>
                                                <td>
                                                    @if ($datas->skl == null)
                                                    <div class="badge badge-danger"><i class="fas fa-times"></i></div>
                                                    @else
                                                    <div class="badge badge-success"><i class="fas fa-check"></i></div>
                                                    @endif
                                                </td>
                                                <form action="/editskl/{{ Auth::id() }}" id="editprofile" method="POST" enctype="multipart/form-data" class="needs-validation">
                                                @csrf
                                                <td class="act">
                                                    @if ($datas->skl == null)
                                                    @else
                                                    <a href="{{ asset('img/berkas/'. $datas->skl ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                    @endif
                                                    <input type="file" name="skl" id="skl" class="form-control upload">
                                                    <button class="btn btn-lg btn-primary">Save</button>
                                                </td>
                                                </form>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>Kartu Keluarga</td>
                                                <td>
                                                    @if ($datas->kk == null)
                                                    <div class="badge badge-danger"><i class="fas fa-times"></i></div>
                                                    @else
                                                    <div class="badge badge-success"><i class="fas fa-check"></i></div>
                                                    @endif
                                                </td>
                                                <form action="/editkk/{{ Auth::id() }}" id="editprofile" method="POST" enctype="multipart/form-data" class="needs-validation">
                                                @csrf
                                                <td class="act">
                                                    @if ($datas->kk == null)
                                                    @else
                                                    <a href="{{ asset('img/berkas/'. $datas->kk ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                    @endif
                                                    <input type="file" name="kk" id="kk" class="form-control upload">
                                                    <button class="btn btn-lg btn-primary">Save</button>
                                                </td>
                                                </form>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>Akta Kelahiran</td>
                                                <td>
                                                    @if ($datas->akta == null)
                                                    <div class="badge badge-danger"><i class="fas fa-times"></i></div>
                                                    @else
                                                    <div class="badge badge-success"><i class="fas fa-check"></i></div>
                                                    @endif
                                                </td>
                                                <form action="/editakta/{{ Auth::id() }}" id="editprofile" method="POST" enctype="multipart/form-data" class="needs-validation">
                                                @csrf
                                                <td class="act">
                                                    @if ($datas->akta == null)
                                                    @else
                                                    <a href="{{ asset('img/berkas/'. $datas->akta ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                    @endif
                                                    <input type="file" name="akta" id="akta" class="form-control upload">
                                                    <button class="btn btn-lg btn-primary">Save</button>
                                                </td>
                                                </form>
                                            </tr>

                                            <tr>
                                                <td>7</td>
                                                <td>KIP (Opsional)</td>
                                                <td>
                                                    @if ($datas->kip == null)
                                                    <div class="badge badge-danger"><i class="fas fa-times"></i></div>
                                                    @else
                                                    <div class="badge badge-success"><i class="fas fa-check"></i></div>
                                                    @endif
                                                </td>
                                                <form action="/editkip/{{ Auth::id() }}" id="editprofile" method="POST" enctype="multipart/form-data" class="needs-validation">
                                                @csrf
                                                <td class="act">
                                                    @if ($datas->kip == null)
                                                    @else
                                                    <a href="{{ asset('img/berkas/'. $datas->kip ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                    @endif
                                                    <input type="file" name="kip" id="kip" class="form-control upload">
                                                    <button class="btn btn-lg btn-primary">Save</button>
                                                </td>
                                                </form>
                                            </tr>

                                            <tr>
                                                <td>8</td>
                                                <td>Surat Ketersediaan
                                                    <a href="#" class="btn btn-sm btn-primary">Download</a>
                                                </td>
                                                <td>
                                                    @if ($datas->surat_sedia == null)
                                                    <div class="badge badge-danger"><i class="fas fa-times"></i></div>
                                                    @else
                                                    <div class="badge badge-success"><i class="fas fa-check"></i></div>
                                                    @endif
                                                </td>
                                                <form action="/editsurat_sedia/{{ Auth::id() }}" id="editprofile" method="POST" enctype="multipart/form-data" class="needs-validation">
                                                @csrf
                                                <td class="act">
                                                    @if ($datas->surat_sedia == null)
                                                    @else
                                                    <a href="{{ asset('img/berkas/'. $datas->surat_sedia ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                    @endif
                                                    <input type="file" name="surat_sedia" id="surat_sedia" class="form-control upload">
                                                    <button class="btn btn-lg btn-primary">Save</button>
                                                </td>
                                                </form>
                                            </tr>

                                            <tr>
                                                <td>9</td>
                                                <td>Surat Keabsahan Berkas
                                                    <a href="#" class="btn btn-sm btn-primary">Download</a>
                                                </td>
                                                <td>
                                                    @if ($datas->surat_absah == null)
                                                    <div class="badge badge-danger"><i class="fas fa-times"></i></div>
                                                    @else
                                                    <div class="badge badge-success"><i class="fas fa-check"></i></div>
                                                    @endif
                                                </td>
                                                <form action="/editsurat_absah/{{ Auth::id() }}" id="editprofile" method="POST" enctype="multipart/form-data" class="needs-validation">
                                                @csrf
                                                <td class="act">
                                                    @if ($datas->surat_absah == null)
                                                    @else
                                                    <a href="{{ asset('img/berkas/'. $datas->surat_absah ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                    @endif
                                                    <input type="file" name="surat_absah" id="surat_absah" class="form-control upload">
                                                    <button class="btn btn-lg btn-primary">Save</button>
                                                </td>
                                                </form>
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
