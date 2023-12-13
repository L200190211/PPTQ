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
                <h2 class="section-title">Hi, {{ substr($data->username, 0, strpos($data->username, ' ')) }}</h2>
                <p class="section-lead">
                    Change information about yourself on this page.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">
                                @if ($data->admin == 'super_admin')
                                    <div class="sampul-x">
                                        <div id="prev" style="background-image: url(/img/dummy/sp.jpg);">
                                        </div>
                                    </div>
                                @else
                                    @if (is_null($data->ppshb->pasphoto))
                                        <div class="sampul-x">
                                            <div id="prev" style="background-image: url(/img/dummy/ppshb.png);">
                                            </div>
                                        </div>
                                    @elseif (File::exists(public_path('img/berkas/' . $data->ppshb->pasphoto)))
                                        <div class="sampul-x">
                                            <div id="prev"
                                                style="background-image: url(/img/berkas/{{ $data->ppshb->pasphoto }})">
                                            </div>
                                        </div>
                                    @else
                                        <div class="sampul-x">
                                            <div id="prev" style="background-image: url(/img/dummy/ppshb.png);">
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                            <form action="user/edituser" id="editprofile" method="POST" enctype="multipart/form-data"
                                class="needs-validation">
                                @csrf
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Username</label>
                                            <input type="text" class="form-control" value="{{ $data->username }}"
                                                required="" name="username">
                                            <div class="invalid-feedback">
                                                Please fill in the first name
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" value="{{ $data->name }}"
                                                required="" name="name">
                                            <div class="invalid-feedback">
                                                Please fill in the last name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>NISN</label>
                                            <input type="text" class="form-control" value="{{ $data->nisn }}"
                                                name="nisn"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="asal_sekolah">Asal Sekolah</label>
                                            <input id="asal_sekolah" type="text" class="form-control" name="asal_sekolah"
                                                value="{{ $data->asal_sekolah }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="{{ $data->email }}"
                                                required="" name="email">
                                            <div class="invalid-feedback">
                                                Please fill in the email
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Phone</label>
                                            <input type="tel" class="form-control" value="{{ $data->no_tlp }}"
                                                name="no_tlp"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="tempat">Tempat</label>
                                            <input id="tempat" type="text" class="form-control" name="tempat"
                                                value="{{ $data->tempat_lahir }}">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="tgl_lahir">Tgl Lahir</label>
                                            <input type="date" class="form-control datepicker" id="tgl_lahir"
                                                name="tgl_lahir" value="{{ $data->tgl_lahir }}">
                                            <span style="color:red">*Bulan/Hari/Tahun</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Address</label>
                                            <textarea class="form-control" type="text" name="deskripsi" id="deskripsi" required style="height: 90px" required
                                                placeholder="Masukkan Alamat Lengkap" aria-describedby="basic-addon2">{{ $data->address }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill in the first name
                                            </div>
                                        </div>
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
