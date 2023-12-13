@extends('layouts.regist')

@section('content')
    <main id="main">

        <!-- ======= Info Box Section ======= -->
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="{{ asset('assets2/img/stisla-fill.svg') }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="hero align-items-center bg-danger text-white">
                                        <div class="hero-inner text-center">
                                            <h2>PPSHB telah ditutup</h2>
                                            <p class="lead">You have successfully registered with our system. Next, you
                                                can log in to the dashboard with your account.</p>
                                            <div class="mt-4">
                                                <a href="{{ route('psshb') }}"
                                                    class="btn btn-outline-white btn-lg btn-icon icon-left"><i
                                                        class="fas fa-sign-out-alt"></i> Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simple-footer">
                                ###
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </main><!-- End #main -->
@endsection
