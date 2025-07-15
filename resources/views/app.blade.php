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



    <!-- Hero Carousel -->
    @yield('content')


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
