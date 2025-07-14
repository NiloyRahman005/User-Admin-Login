<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NJ Real Estate Expo 2025</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="NJ Real Estate Expo 2025">
    <meta name="description"
        content="Join us at the NJ Real Estate Expo 2025 — the premier event for real estate professionals, investors, and enthusiasts.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.njrealestateexpo.com/">
    <meta property="og:title" content="NJ Real Estate Expo 2025">
    <meta property="og:description"
        content="Join us at the NJ Real Estate Expo 2025 — the premier event for real estate professionals, investors, and enthusiasts.">
    <meta property="og:image" content="https://www.njrealestateexpo.com/images/og-image.jpg">

    <!-- Twitter (optional but recommended for X/Twitter preview too) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.njrealestateexpo.com/">
    <meta name="twitter:title" content="NJ Real Estate Expo 2025">
    <meta name="twitter:description"
        content="Join us at the NJ Real Estate Expo 2025 — the premier event for real estate professionals, investors, and enthusiasts.">
    <meta name="twitter:image" content="https://www.njrealestateexpo.com/images/og-image.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontend/style.css') }}">

    <style>
        :root {
            --primary: #0d6efd;
            --secondary: #6610f2;
            --gradient: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #ffffff;
            transition: background-color 0.3s ease;
        }

        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary);
        }

        .nav-link {
            font-weight: 500;
            margin-left: 15px;
            color: #444;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #e50914;
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: #e50914;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            height: 80vh;
            background: var(--gradient);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            text-align: center;
            overflow: hidden;
            /* Subtle background animation */
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        <blade keyframes|%20gradientShift%20%7B%0D>0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
        }

        .hero h1 {
            font-size: 4rem;
            /* Slightly larger */
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
            /* More pronounced shadow */
        }

        .hero p {
            font-size: 1.35rem;
            /* Slightly larger */
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
        }

        .hero .btn-light {
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
            background-color: #e50914;
            color: white;
            /* Pulsing animation for the button */
        }

        .hero .btn-light:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            animation: none;
            /* Stop pulse on hover */
        }

        <blade keyframes|%20pulse%20%7B%0D>0% {
            transform: scale(1);
        }

        70% {
            transform: scale(1.05);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
        }

        100% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
        }
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
        }

        .parallax-about {

            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }

        .parallax-about .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 15, 30, 0.7);
            /* dark overlay */
            z-index: 1;
        }

        .parallax-about .container {
            position: relative;
            z-index: 2;
        }

        .section-title {
            font-size: 2.75rem;
            font-weight: 700;
        }

        <blade media|(max-width%3A%20768px)%20%7B%0D>.section-title {
            font-size: 2rem;
        }

        .about-content {
            font-size: 1rem;
        }
        }


        .section-title {
            font-weight: 700;
            margin-bottom: 3rem;
            /* More space */
            font-size: 2.5rem;
            color: #333;
        }

        .pricing-card {
            border-radius: 18px;
            /* Slightly more rounded */
            padding: 2.5rem;
            /* More padding */
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            /* Softer shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            /* Ensure cards are same height */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .pricing-card:hover {
            transform: translateY(-8px);
            /* Lift more */
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.15);
            /* More pronounced hover shadow */
        }

        .pricing-card h4 {
            font-weight: 700;
            color: var(--primary);
            /* Primary color for tier names */
        }

        .pricing-card ul {
            margin-top: 1.5rem;
            margin-bottom: 2rem;
            padding-left: 0;
        }

        .pricing-card li {
            list-style: none;
            padding: 5px 0;
            font-size: 1.1rem;
            color: #555;
        }

        .pricing-card .btn {
            width: 100%;
            padding: 12px 0;
            border-radius: 50px;
            font-weight: 600;
        }

        /* Footer */
        footer {
            background: var(--primary);
            /* Use primary color */
            color: white;
            padding: 40px 0;
            /* More padding */
        }

        footer h5 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        footer p {
            font-size: 0.95rem;
            opacity: 0.9;
        }

        /* General Spacing */
        section {
            padding: 80px 0;
            /* More generous vertical spacing for all sections */
        }

        #about {
            padding-bottom: 100px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top bg-white shadow-sm">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('fontend/logo.jpeg') }}" alt="Logo" class="img-fluid" style="max-height: 45px;">
            </a>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="Mission.html">Mission</a></li>
                    <li class="nav-item"><a class="nav-link" href="our_vission.html">Vision</a></li>
                    <li class="nav-item"><a class="nav-link" href="exhibitors.html">Sponsorhip Listing</a></li>
                    <li class="nav-item"><a class="nav-link" href="image_gallery.html">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="event-details.html">Event-details</a></li>
                    <li class="nav-item"><a class="nav-link" href="login_register.html">Login/Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="event-listing.html">event-listing</a></li>




                </ul>
            </div>
        </div>
    </nav>
    <style>
        .event-profile-section::before,
        .event-profile-section::after {
            content: "";
            position: absolute;
            width: 120px;
            height: 120px;
            background-image: radial-gradient(#000 1px, transparent 1px);
            background-size: 10px 10px;
            opacity: 0.1;
            z-index: 0;
        }

        .event-profile-section::before {
            top: 10%;
            left: 0;
        }

        .event-profile-section::after {
            bottom: 10%;
            right: 0;
        }
    </style>

    <!-- <section class="hero">
  <div class="container" data-aos="fade-up" data-aos-duration="1500">
    <h1>NJ Real Estate Expo 2025</h1>
    <p class="mt-4 mb-5">Where Opportunities Meet Innovation in the Garden State</p>
    <a href="#contact" class="btn btn-light btn-lg">Reserve Your Seat Now!</a>
  </div>
</section> -->

    <!-- Hero Carousel -->
    <section class="hero-carousel">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
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
                                        {{-- {{ $top_slides->title }}  --}}
                                        NJ - Real- Estate Expo 2025

                                    </h1>
                                    <div>
                                        <a href="#contact" class="btn-hero btn-hero-primary"
                                            style="background: #DC3545">
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

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <style>
        /* Hero Slider Styles */
        .hero-carousel {
            height: 100vh;
            min-height: 600px;
            position: relative;
            overflow: hidden;
        }

        .carousel-item {
            height: 100vh;
            min-height: 600px;
            background: linear-gradient(45deg, #0f0f0f, #1a1a1a);
            /* Dark grey tones */
            position: relative;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7), rgba(30, 30, 30, 0.6));
            z-index: 1;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            text-align: center;
            width: 90%;
            max-width: 800px;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 3rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            color: white;
            text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.5);
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            font-weight: 400;
            text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .hero-stat {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: white;
            font-weight: 500;
        }

        .hero-stat i {
            color: var(--accent);
            font-size: 1.2rem;
        }

        .btn-hero {
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            margin: 0 0.5rem;
        }

        .btn-hero-primary {
            background: linear-gradient(135deg, var(--nj-blue), var(--nj-green));
            color: white;
            border: none;
        }

        .btn-hero-outline {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            color: white;
        }

        /* Carousel Controls */
        .carousel-control-prev,
        .carousel-control-next {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-50%) scale(1.1);
        }

        .carousel-indicators {
            bottom: 2rem;
        }

        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 0.5);
            background: transparent;
            transition: all 0.3s ease;
        }

        .carousel-indicators button.active {
            background: white;
            transform: scale(1.2);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .glass-card {
                padding: 1.5rem;
            }

            .btn-hero {
                padding: 0.75rem 1.5rem;
                font-size: 1rem;
            }

            .hero-stats {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>

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



    <style>
        .reasons-section ul li::marker {
            display: none;
        }

        .reasons-section ul li::before {
            content: "✔️ ";
            margin-right: 6px;
            color: #28a745;
        }
    </style>
    @php
        $background = isset($Cant_Miss_Event->image)
            ? asset($Cant_Miss_Event->image)
            : 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=1600&q=80';
    @endphp
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












    <style>
        .card-custom {
            border: 2px solid #dc3545;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 350px;
            /* Reduced height for smaller cards */
        }

        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            height: 180px;
            /* Reduced image height */
            object-fit: cover;
        }

        .text-muted-custom {
            color: #6c757d !important;
            font-size: 0.9rem;
        }

        .btn-custom {
            background-color: #dc3545;
            color: white;
            border-radius: 20px;
            padding: 6px 16px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #c82333;
            color: white;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
        }

        .card-text {
            font-size: 0.9rem;
            color: #555;
        }
    </style>


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
                                <a href="#" class="btn btn-custom mt-2">Details</a>
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


    <style>
        .sponsorship-section {
            position: relative;
            padding: 80px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=1600&q=80');
            background-attachment: fixed;
            /* Parallax effect */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
        }

        .container.position-relative {
            z-index: 1;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .pricing-card {
            border: 2px solid #dc3545;
            /* Reddish border */
            background: rgba(255, 255, 255, 0.9);
            /* Semi-transparent white for readability */
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            color: #333;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background: #f8f9fa;
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .card-icon {
            color: #dc3545;
        }

        .card-price {
            color: #dc3545;
        }

        .card-badge {
            z-index: 2;
            background: #dc3545;
            transform: translateX(-50%);
        }

        .features-list li {
            padding: 8px 0;
            font-size: 0.95rem;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        .btn-outline-primary {
            border-color: #dc3545;
            color: #dc3545;
        }

        .btn-outline-primary:hover {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
    <section id="sponsorship" class="sponsorship-section position-relative text-dark">
        <!-- Content Layer -->
        <div class="container position-relative">
            <div class="text-center mb-5">
                <h2 class="section-title mb-4 text-light" data-aos="fade-up">Elevate Your Brand with Sponsorship</h2>
            </div>

            <div class="row mt-5 g-4">
                <!-- Silver Sponsor -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card silver bg-white shadow-sm p-4 rounded-4">
                        <div class="card-header text-center mb-3">
                            <div class="card-icon fs-2 text-secondary mb-2">
                                <i class="bi bi-award"></i>
                            </div>
                            <h3 class="fw-bold">Silver Sponsor</h3>
                            <div class="card-price fw-bold fs-4">
                                <span class="currency">$</span><span class="amount">1,000</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="features-list list-unstyled mb-4">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Logo on Event Website</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Social Media Mentions</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Digital Program Listing
                                </li>
                                <li><i class="bi bi-x-circle text-danger me-2"></i>Dedicated Booth Space</li>
                            </ul>
                            <a href="#contact" class="btn btn-outline-primary w-100">Choose Silver</a>
                        </div>
                    </div>
                </div>

                <!-- Gold Sponsor -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card gold featured bg-white shadow p-4 rounded-4">
                        <div
                            class="card-badge bg-danger text-white text-uppercase small px-3 py-1 rounded-pill position-absolute top-0 start-50 translate-middle-x mt-n3">
                            Most Popular
                        </div>
                        <div class="card-header text-center mb-3">
                            <div class="card-icon fs-2 text-warning mb-2">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <h3 class="fw-bold">Gold Sponsor</h3>
                            <div class="card-price fw-bold fs-4">
                                <span class="currency">$</span><span class="amount">3,000</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="features-list list-unstyled mb-4">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Premium Booth Space</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Large Banner Placement
                                </li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Full Event Promotion</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>VIP Networking Access</li>
                            </ul>
                            <a href="#contact" class="btn btn-danger text-white w-100">Choose Gold</a>
                        </div>
                    </div>
                </div>

                <!-- Platinum Sponsor -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card platinum bg-white shadow-sm p-4 rounded-4">
                        <div class="card-header text-center mb-3">
                            <div class="card-icon fs-2 text-dark mb-2">
                                <i class="bi bi-gem"></i>
                            </div>
                            <h3 class="fw-bold">Platinum Sponsor</h3>
                            <div class="card-price fw-bold fs-4">
                                <span class="currency">$</span><span class="amount">7,000</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="features-list list-unstyled mb-4">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Exclusive Speaking Slot
                                </li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Prime VIP Booth Location
                                </li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Media & Press Package</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Custom Promotional
                                    Materials
                                </li>
                            </ul>
                            <a href="#contact" class="btn btn-outline-primary w-100">Choose Platinum</a>
                        </div>
                    </div>
                </div>
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




    <footer id="contact" class="bg-black text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left: Google Map -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="ratio ratio-4x3 rounded-3 overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799175698!2d-74.25987549037642!3d40.69767006363654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzI2LjYiTiA3NMKwMTUnNDIuMyJX!5e0!3m2!1sen!2sus!4v1620213729894!5m2!1sen!2sus"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Right: Contact Info -->
                <div class="col-md-6 text-center text-md-start">
                    <h5>Get In Touch With Us</h5>
                    <p>Email:
                        <a href="mailto:info@njrealestateexpo.com" class="text-white text-decoration-none">
                            info@njrealestateexpo.com
                        </a>
                    </p>
                    <p>Phone:
                        <a href="tel:+11234567890" class="text-white text-decoration-none">
                            (123) 456-7890
                        </a>
                    </p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white mx-2 fs-4"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white mx-2 fs-4"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white mx-2 fs-4"><i class="bi bi-facebook"></i></a>
                    </div>
                    <p class="mb-0 mt-3">&copy; 2025 NJ Real Estate Expo. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1200,
            delay: 50
        });

        // Navbar shrink on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

</body>

</html>
