@extends('app')
@section('content')
    @php
        $background = isset($Cant_Miss_Event->image)
            ? asset($Cant_Miss_Event->image)
            : 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=1600&q=80';
    @endphp

    <style>
        .vision-section {
            padding: 60px 0;
            background-color: #ffffff;
        }

        .vision-title {
            font-size: 36px;
            font-weight: bold;
        }

        .vision-highlight {
            color: #e62c0c;
            font-weight: 600;
        }

        .vision-image {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .vision-text {
            font-size: 18px;
            line-height: 1.7;
            color: #555;
        }
    </style>
    <!-- Vision Section -->
    <section class="vision-section">
        <div class="container mt-5">
            <div class="row align-items-center ">
                <div class="col-md-6 order-md-2">
                    @if (!empty($vision->image) && file_exists(public_path($vision->image)))
                        <img src="{{ asset($vision->image) }}" alt="Vision Image" class="vision-image" />
                    @else
                    @endif

                </div>
                <div class="col-md-6">
                    <h2 class="vision-title mb-4">
                        Our <span class="vision-highlight">Vision</span>
                    </h2>
                    <div class="vision-text">
                        {!! $vision->content !!}
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
