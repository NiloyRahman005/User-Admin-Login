@extends('app')
@section('content')
    <style>
        .event-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 12px;
        }

        .book-btn {
            background-color: #6c5ce7;
            color: white;
            border-radius: 30px;
            padding: 10px 30px;
            transition: 0.3s;
        }

        .book-btn:hover {
            background-color: #5e4bd9;
            color: white;
        }

        .event-info {
            font-size: 16px;
        }

        .event-section-title {
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
    <!-- Event Banner -->
    <section class="py-5 mt-5">
        @if (session('success'))
            <div class="alert alert-primary text-center my-4">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger my-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            @php
                use Illuminate\Support\Facades\File;
            @endphp

            @if (isset($event->image) && File::exists(public_path($event->image)))
                <img src="{{ asset($event->image) }}" alt="Event Banner" class="event-image mb-4">
            @endif
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <h2 class="fw-bold">{{ $event->title }}</h2>
                    <p class="event-info mb-1"><strong>Date:</strong> {{ $event->date }}</p>
                    <p class="event-info mb-1"><strong>Time:</strong> {{ $event->time }}</p>
                    <p class="event-info mb-3"><strong>Location:</strong> {{ $event->location }}</p>
                </div>
                <div>
                    @if (Auth::check())
                        <a href="#booking-form" class="btn book-btn" id="#booking-form">Book Now</a>
                    @else
                        <a href="{{ route('login') }}" class="btn book-btn" id="">Please Login</a>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <!-- Event Description -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="event-section-title">Event Description</div>
            {!! $event->description !!}
        </div>
    </section>

    <!-- Event Details -->


    <!-- Booking Form -->
    @if (Auth::check())
        <section id="booking-form" class="py-5 bg-light">
            <div class="container">
                <div class="event-section-title">Book Your Seat</div>
                <form class="row g-3" action="{{ route('event_booking') }}" method="POST">
                    @csrf
                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                    <input type="hidden" name="user" value="{{ Auth::user()->id }}">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Full Name *</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number *</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tickets" class="form-label">Number of Tickets *</label>
                        <input type="number" class="form-control" id="tickets" name="tickets" min="1"
                            max="10" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn book-btn mt-3">Submit Booking</button>
                    </div>
                </form>
            </div>
        </section>
    @else
        <div class="alert alert-primary text-center my-4">
            Please <a href="{{ route('login') }}">login</a> to book your seat.
        </div>
    @endif
@endsection
