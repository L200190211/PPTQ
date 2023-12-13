@extends('layouts.guest')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(img/guest/slide-1.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Shuffle</span></h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(img/guest/slide-2.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(img/guest/slide-3.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Our Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Cta Section ======= -->
        <section class="cta">
            <div class="container">

                <div class="text-center">
                    <h3>Call To Action</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum.</p>
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= More Services Section ======= -->
        <section class="more-services section-bg">
            <div class="container">
                <div class="section-title">

                    <h2>More Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img src="assets/img/more-service-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Autem sunt earum</a></h5>
                                <p class="card-text">Et architecto provident deleniti facere repellat nobis iste. Id facere
                                    quia quae dolores dolorem tempore</p>
                                <a href="#" class="btn">Explore more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img src="assets/img/more-service-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Nobis et tempore</a></h5>
                                <p class="card-text">Ut quas omnis est. Non et aut tempora dignissimos similique in
                                    dignissimos. Sit incidunt et odit iusto</p>
                                <a href="#" class="btn">Explore more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img src="assets/img/more-service-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Facere quia quae dolores</a></h5>
                                <p class="card-text">Modi ut et delectus. Modi nobis saepe voluptates nostrum. Sed quod
                                    consequatur quia provident dera</p>
                                <a href="#" class="btn">Explore more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End More Services Section -->

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>Our Team</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <?php $i = 1; ?>
                    @foreach ($team as $teams)
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.{{ $i++ }}s">
                            <div class="member">
                                <div class="cover-team">
                                    {{-- data null --}}
                                    @if (is_null($teams->sampul))
                                        <img src="{{ asset('img/sampul/team.jpg') }}" alt="" width="50px">
                                        {{-- data available --}}
                                    @elseif (File::exists(public_path('img/sampul/' . $teams->sampul)))
                                        <img src="/img/sampul/{{ $teams->sampul }}" alt="" width="50px">
                                        {{-- file not found --}}
                                    @else
                                        <img src="{{ asset('img/sampul/team.jpg') }}" alt="" width="50px">
                                    @endif
                                </div>
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>{{ $teams->name }}</h4>
                                        <span>{{ $teams->title }}</span>
                                    </div>
                                    <div class="social">
                                        <a href="mailto:{{ $teams->email }}"><i class="bi bi-envelope"></i></a>
                                        <a href="tel:{{ $teams->phone }}"><i class="bi bi-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="btn-center">
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>
            </div>
        </section><!-- End Our Team Section -->


    </main><!-- End #main -->
@endsection
