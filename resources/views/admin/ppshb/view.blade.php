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

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{{ asset('assets2/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
                        </div>
                        <!-- Profile Students -->
                        <div class="card-header">
                            <h4>Profile Student</h4>
                        </div>
                        @foreach ($data as $datas)
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="{{ $datas->user->username }}" required="" name="username" disabled>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{ $datas->user->name }}" required="" name="name" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>NISN</label>
                                    <input type="text" class="form-control" value="{{ $datas->user->nisn }}" name="nisn" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" disabled>
                                </div>
                                <div class="form-group col-6">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                    <input id="asal_sekolah" type="text" class="form-control" name="asal_sekolah" value="{{ $datas->user->asal_sekolah }}" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="{{ $datas->user->email }}" required="" name="email" disabled>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" value="{{ $datas->user->no_tlp }}" name="no_tlp" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="tempat">Tempat</label>
                                    <input id="tempat" type="text" class="form-control" name="tempat" value="{{ $datas->user->tempat_lahir }}" disabled>
                                </div>
                                <div class="form-group col-6">
                                    <label for="tgl_lahir">Tgl Lahir</label>
                                    <input type="date" class="form-control datepicker" id="tgl_lahir" name="tgl_lahir" value="{{ $datas->user->tgl_lahir }}" disabled>
                                    <span style="color:red">*Bulan/Hari/Tahun</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-12">
                                    <label>Address</label>
                                    <textarea class="form-control" type="text" name="deskripsi" id="deskripsi" required style="height: 90px" required placeholder="Masukkan Alamat Lengkap" aria-describedby="basic-addon2" disabled>{{ $datas->user->address }}</textarea>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Main Documents -->
                        <div class="card-header">
                            <h4>Main Document's</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md" id="example">
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
                                            <td class="act">
                                                @if ($datas->pasphoto == null)
                                                <a href="{{ asset('img/berkas/'. $datas->pasphoto ) }}" target="_BLANK" class="btn btn-lg btn-info disabled">Preview</a>
                                                @else
                                                <a href="{{ asset('img/berkas/'. $datas->pasphoto ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                @endif
                                            </td>
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
                                            <td class="act">
                                                @if ($datas->rapot == null)
                                                <a href="{{ asset('img/berkas/'. $datas->rapot ) }}" target="_BLANK" class="btn btn-lg btn-info disabled">Preview</a>
                                                @else
                                                <a href="{{ asset('img/berkas/'. $datas->rapot ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                @endif
                                            </td>
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
                                            <td class="act">
                                                @if ($datas->ijazah == null)
                                                <a href="{{ asset('img/berkas/'. $datas->ijazah ) }}" target="_BLANK" class="btn btn-lg btn-info disabled">Preview</a>
                                                @else
                                                <a href="{{ asset('img/berkas/'. $datas->ijazah ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                @endif
                                            </td>
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
                                            <td class="act">
                                                @if ($datas->skl == null)
                                                <a href="{{ asset('img/berkas/'. $datas->skl ) }}" target="_BLANK" class="btn btn-lg btn-info disabled">Preview</a>
                                                @else
                                                <a href="{{ asset('img/berkas/'. $datas->skl ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                @endif
                                            </td>
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
                                            <td class="act">
                                                @if ($datas->kk == null)
                                                <a href="{{ asset('img/berkas/'. $datas->kk ) }}" target="_BLANK" class="btn btn-lg btn-info disabled">Preview</a>
                                                @else
                                                <a href="{{ asset('img/berkas/'. $datas->kk ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                @endif
                                            </td>
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
                                            <td class="act">
                                                @if ($datas->akta == null)
                                                <a href="{{ asset('img/berkas/'. $datas->akta ) }}" target="_BLANK" class="btn btn-lg btn-info disabled">Preview</a>
                                                @else
                                                <a href="{{ asset('img/berkas/'. $datas->akta ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                @endif
                                            </td>
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
                                            <td class="act">
                                                @if ($datas->kip == null)
                                                <a href="{{ asset('img/berkas/'. $datas->kip ) }}" target="_BLANK" class="btn btn-lg btn-info disabled">Preview</a>
                                                @else
                                                <a href="{{ asset('img/berkas/'. $datas->kip ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
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
                                                <div class="badge badge-danger"><i class="fas fa-times"></i></div>
                                                @else
                                                <div class="badge badge-success"><i class="fas fa-check"></i></div>
                                                @endif
                                            </td>
                                            <td class="act">
                                                @if ($datas->surat_sedia == null)
                                                <a href="{{ asset('img/berkas/'. $datas->surat_sedia ) }}" target="_BLANK" class="btn btn-lg btn-info disabled">Preview</a>
                                                @else
                                                <a href="{{ asset('img/berkas/'. $datas->surat_sedia ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
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
                                                <div class="badge badge-danger"><i class="fas fa-times"></i></div>
                                                @else
                                                <div class="badge badge-success"><i class="fas fa-check"></i></div>
                                                @endif
                                            </td>
                                            <td class="act">
                                                @if ($datas->surat_absah == null)
                                                <a href="{{ asset('img/berkas/'. $datas->surat_absah ) }}" target="_BLANK" class="btn btn-lg btn-info disabled">Preview</a>
                                                @else
                                                <a href="{{ asset('img/berkas/'. $datas->surat_absah ) }}" target="_BLANK" class="btn btn-lg btn-info">Preview</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Complementary Documents -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('scriptJS')
<script type="text/javascript">
    $(document).ready(function() {
        new DataTable('#example');
    });
</script>
@endsection