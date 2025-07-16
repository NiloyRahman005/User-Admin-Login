@extends('app')
@section('content')
    @php
        $background = isset($Cant_Miss_Event->image)
            ? asset($Cant_Miss_Event->image)
            : 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=1600&q=80';
    @endphp

    <style>
        .mission-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }

        .mission-title {
            font-weight: bold;
            font-size: 36px;
        }

        .mission-highlight {
            color: #e62c0c;
            font-weight: 600;
        }

        .mission-image {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .mission-paragraph {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 20px;
        }
    </style>
    <section class="mission-section">
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    @if (!empty($mission->image) && file_exists(public_path($mission->image)))
                        <img src="{{ asset($mission->image) }}" alt="Our Mission" class="mission-image">
                    @else
                        <img src="https://usbccirealestateexpo.org/wp-content/uploads/2024/03/11.jpg"
                            alt="Default Mission Image" class="mission-image">
                    @endif
                </div>
                <div class="col-md-6">
                    <h2 class="mission-title mb-4">Our <span class="mission-highlight">Mission</span></h2>


                    <p class="mission-paragraph">
                        At the <strong>NJ Real Estate Expo</strong>, our mission is to bridge the gap between innovation
                        and opportunity in the real estate sector. We aim to foster strong networks, share industry
                        knowledge, and showcase the future of property development.
                    </p>
                    <p class="mission-paragraph">
                        We believe that by bringing together developers, investors, technology providers, and thought
                        leaders under one roof, we can shape a more sustainable, smart, and accessible real estate
                        future.
                    </p>
                    <p class="mission-paragraph">
                        From large-scale expos to focused panel discussions, every event we host is built to
                        <strong>educate, inspire, and connect</strong>.
                    </p>

                </div>
            </div>
        </div>
    </section>
@endsection
