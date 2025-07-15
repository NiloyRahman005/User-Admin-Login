@extends('app')
@section('content')
    @php
        $background = isset($Cant_Miss_Event->image)
            ? asset($Cant_Miss_Event->image)
            : 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=1600&q=80';
    @endphp
    <section class="hero-carousel">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <!-- Slide -->
                @forelse($top_slider as $key => $top_slides)
                    @php
                        $imagePath = public_path($top_slides->top_slider); // Example: 'uploads/slider/image.jpg'
                    @endphp

                    @if (file_exists($imagePath))
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <img src="{{ asset($top_slides->top_slider) }}" alt="NJ Real Estate">
                            <div class="carousel-overlay"></div>
                            <div class="carousel-caption">
                                <div class="glass-card">
                                    <h1 class="hero-title">
                                        NJ - Real- Estate Expo 2025
                                    </h1>
                                    <div>
                                        <a href="#contact" class="btn-hero btn-hero-primary" style="background: #DC3545">
                                            Reserve Your Seat Now!
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>




    <section class="py-6 bg-light">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left: Highlight Video -->
                <div class="col-md-6 mb-4 mb-md-0 text-center" data-aos="fade-right">
                    <h4 class="mb-4 text-primary fw-bold">Featured Highlight Video</h4>
                    @if (isset($you_tube))
                        <div class="ratio ratio-16x9 rounded-3 shadow-sm border border-light">
                            <iframe src="{{ $you_tube->link }}" title="Highlight Video" allowfullscreen
                                class="rounded-3"></iframe>
                        </div>
                    @else
                        <div class="ratio ratio-16x9 rounded-3 shadow-sm border border-light">
                            <iframe src="https://www.youtube.com/embed/3PJuu-o1uOU?si=M4zqzSU5PSzzBxyD"
                                title="Highlight Video" allowfullscreen class="rounded-3"></iframe>
                        </div>
                    @endif

                </div>

                <!-- Right: Who Should Exhibit -->
                <div class="col-md-6" data-aos="fade-left">
                    <div class="p-5 rounded-3 bg-danger text-white">
                        @if (isset($featured_content))
                            {!! $featured_content->content !!}
                        @endif
                        <a href="#exhibit-now" class="btn btn-outline-light btn-lg">Exhibit Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="about" class="position-relative text-white parallax-about py-5"
        style="background-image: url('{{ $background }}')">
        <div class="overlay"></div>
        <div class="container py-5 position-relative z-2">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <h2 class="section-title mb-4">Why You Can't Miss This Event</h2>
                    <div class="about-content lead fs-5">
                        @if (isset($Cant_Miss_Event->content))
                            {!! $Cant_Miss_Event->content !!}
                        @endif
                        <!-- Dynamic Summernote Content Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="event-list" class="event-section" style="background-color: rgba(220, 53, 69, 0.1);;">
        <div class="container">
            <h2 class="section-title text-center mb-5 text-dark fw-bold" data-aos="fade-up">Event Highlights</h2>
            <div class="row g-4">
                <!-- Event Card 1 -->
                @forelse($events as $event)
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                        <div class="card card-custom h-100">
                            <img src="{{ $event->image }}" class="card-img-top" alt="Smart Homes">
                            <div class="card-body p-3">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="text-muted-custom mb-1"><i
                                        class="bi bi-calendar-event me-2"></i>{{ $event->date }}
                                </p>
                                <p class="text-muted-custom">
                                    <i
                                        class="bi bi-clock me-2"></i>{{ \Carbon\Carbon::createFromFormat('H:i:s', $event->time)->format('h:i A') }}
                                </p>
                                @php
                                    $plainText = strip_tags($event->description); // remove HTML tags
                                    $shortText = \Illuminate\Support\Str::words($plainText, 30, '...');
                                @endphp

                                <p class="card-text">
                                    {!! $shortText !!}
                                </p>
                                <a href="{{ route('event_details', $event->id) }}" class="btn btn-custom mt-2">Details</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse



            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-light px-4 py-2 rounded-pill"
                    style="background-color: #C82333;">View
                    More Events</a>
            </div>
        </div>
    </section>


    <section id="sponsorship" class="sponsorship-section position-relative text-dark">
        <!-- Content Layer -->
        <div class="container position-relative">
            <div class="text-center mb-5">
                <h2 class="section-title mb-4 text-light" data-aos="fade-up">Elevate Your Brand with Sponsorship</h2>
            </div>

            <div class="row mt-5 g-4">
                <!--  Sponsor -->
                @forelse($sponsers as $sponser)
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-card silver bg-white shadow-sm p-4 rounded-4">
                            <div class="card-header text-center mb-3">
                                {{-- <div class="card-icon fs-2 text-secondary mb-2">
                                    <i class="bi bi-award"></i>
                                </div> --}}
                                <h3 class="fw-bold">{{ $sponser->name }}</h3>
                                <div class="card-price fw-bold fs-4">
                                    <span class="currency">$</span><span class="amount">{{ $sponser->amount }}</span>
                                </div>
                            </div>
                            <div class="card-body">
                                {!! $sponser->content !!}
                                <a href="#contact" class="btn btn-outline-primary w-100">Choose Silver</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse



            </div>

            <!-- Call to Action -->
            <div class="text-center mt-5">
                <a href="#more-sponsorships" class="btn btn-outline-light px-4 py-2 rounded-pill"
                    style="background-color: #c82333; border: 1px solid #c82333;">Show More Sponsorship
                    Options</a>
            </div>
        </div>
    </section>






    <section id="sponsors" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Our Sponsors</h2>
            <div class="sponsor-slider">
                <div class="sponsor-track">
                    <!-- Your logos — repeat only ONCE -->
                    <div class="sponsor-logos">
                        <img src="https://images.seeklogo.com/logo-png/39/1/pran-logo-png_seeklogo-392860.png"
                            alt="Sponsor 1" />
                        <img src="https://images.seeklogo.com/logo-png/25/2/rfl-logo-png_seeklogo-250040.png"
                            alt="Sponsor 2" />
                        <img src="https://images.seeklogo.com/logo-png/39/1/pran-logo-png_seeklogo-392860.png"
                            alt="Sponsor 3" />
                        <img src="https://images.seeklogo.com/logo-png/25/2/rfl-logo-png_seeklogo-250040.png"
                            alt="Sponsor 4" />
                        <img src="https://images.seeklogo.com/logo-png/39/1/pran-logo-png_seeklogo-392860.png"
                            alt="Sponsor 5" />
                        <!-- Add more logos as needed -->
                    </div>

                    <!-- Duplicate for infinite seamless scroll -->
                    <div class="sponsor-logos">
                        <img src="https://images.seeklogo.com/logo-png/39/1/pran-logo-png_seeklogo-392860.png"
                            alt="Sponsor 1" />
                        <img src="https://images.seeklogo.com/logo-png/25/2/rfl-logo-png_seeklogo-250040.png"
                            alt="Sponsor 2" />
                        <img src="https://images.seeklogo.com/logo-png/39/1/pran-logo-png_seeklogo-392860.png"
                            alt="Sponsor 3" />
                        <img src="https://images.seeklogo.com/logo-png/25/2/rfl-logo-png_seeklogo-250040.png"
                            alt="Sponsor 4" />
                        <img src="https://images.seeklogo.com/logo-png/39/1/pran-logo-png_seeklogo-392860.png"
                            alt="Sponsor 5" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
