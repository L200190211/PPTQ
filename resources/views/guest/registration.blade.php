@extends('layouts.regist')

@section('content')
<main id="main">

    <!-- ======= Info Box Section ======= -->
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="{{ asset('assets2/img/stisla-fill.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>

                        <div class="card-body">
                            <form action="regist/addregist" id="addregist" method="POST" enctype="multipart/form-data" class="needs-validation">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="name">Full Name</label>
                                        <input id="name" type="text" class="form-control" name="name" autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="username">Username</label>
                                        <input id="username" type="text" class="form-control" name="username" autofocus>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>NISN</label>
                                        <input type="text" class="form-control" name="nisn" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="name">Asal Sekolah</label>
                                        <input id="asal_sekolah" type="text" class="form-control" name="asal_sekolah" autofocus>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="tempat">Tempat Lahir</label>
                                        <input id="tempat" type="text" class="form-control" name="tempat" autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="tgl_lahir">Tgl Lahir</label>
                                        <input type="date" class="form-control datepicker" id="tgl_lahir" name="tgl_lahir">
                                        <span style="color:red">*Bulan/Hari/Tahun</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="telf">No Telpon / WA</label>
                                        <input id="telf" type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" class="form-control" name="telf">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="conf-password" class="d-block">Confirm Password</label>
                                        <input id="conf-password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="conf-password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="email">Address</label>
                                    <textarea class="form-control" type="text" name="address" id="address" required style="height: 90px" required autofocusaria-describedby="basic-addon2"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Stisla 2018
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection