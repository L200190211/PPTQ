@extends('layouts.guest')
@section('content')
    <main id="main">

        <!-- ======= Our Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Our Portfolio</h2>
                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius
                        consequatur ex aliquid fuga eum quidem. Sit sint consectetur
                        velit. Quisquam quos quisquam cupiditate. Et nemo qui
                        impedit suscipit alias ea. Quia fugiat sit in iste officiis
                        commodi quidem hic quas.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".wisuda">Wisuda</li>
                            <li data-filter=".syawalan">Syawalan</li>
                            <li data-filter=".kajian">Kajian</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item wisuda">
                        <div class="portfolio-wrap">
                            <img src="img/galeri/wisuda1.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Wisuda</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item kajian">
                        <div class="portfolio-wrap">
                            <img src="img/galeri/kajian2.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Kajian</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item wisuda">
                        <div class="portfolio-wrap">
                            <img src="img/galeri/wisuda2.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Wisuda</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item syawalan">
                        <div class="portfolio-wrap">
                            <img src="img/galeri/syawalan1.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Syawalan</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item kajian">
                        <div class="portfolio-wrap">
                            <img src="img/galeri/kajian1.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Kajian</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item wisuda">
                        <div class="portfolio-wrap">
                            <img src="img/galeri/wisuda3.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Wisuda</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item syawalan">
                        <div class="portfolio-wrap">
                            <img src="img/galeri/syawalan2.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Syawalan</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item syawalan">
                        <div class="portfolio-wrap">
                            <img src="img/galeri/syawalan3.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Syawalan</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item kajian">
                        <div class="portfolio-wrap">
                            <img src="img/galeri/kajian3.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Kajian</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item wisuda">
                        <div class="portfolio-wrap">
                            <img src="img/galeri/wisuda4.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Wisuda</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Portfolio Section -->

    </main>
    <!-- End #main -->
@endsection
