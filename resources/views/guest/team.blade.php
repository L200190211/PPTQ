@extends('layouts.guest')
@section('scriptCSS')
    <style>
        .relative.z-0 {
            display: none;
        }

        nav.flex.items-center.justify-between {
            justify-content: right;
            display: flex;
            gap: 2rem;
        }
    </style>
@endsection
@section('content')
    <main id="main">

        <!-- ======= Our Portfolio Section ======= -->
        <section id="team" class="team">
            <div class="container">
                <div class="section-title">
                    <h2>Our Team</h2>
                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius
                        consequatur ex aliquid fuga eum quidem. Sit sint consectetur
                        velit. Quisquam quos quisquam cupiditate. Et nemo qui
                        impedit suscipit alias ea. Quia fugiat sit in iste officiis
                        commodi quidem hic quas.
                    </p>
                </div>

                <div class="row">
                    <?php $i = 1; ?>
                    @foreach ($team as $teams)
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.{{ $i++ }}s">
                            <div class="member">
                                <div class="cover-team">
                                    {{-- data null --}}
                                    @if (is_null($teams->sampul))
                                        <img src="{{ asset('img/dummy/team.jpg') }}" alt="" width="50px">
                                        {{-- data available --}}
                                    @elseif (File::exists(public_path('img/sampul/' . $teams->sampul)))
                                        <img src="/img/sampul/{{ $teams->sampul }}" alt="" width="50px">
                                        {{-- file not found --}}
                                    @else
                                        <img src="{{ asset('img/dummy/team.jpg') }}" alt="" width="50px">
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
                {{ $team->links() }}
        </section>

        <!-- End Our Portfolio Section -->

    </main>
    <!-- End #main -->
@endsection
