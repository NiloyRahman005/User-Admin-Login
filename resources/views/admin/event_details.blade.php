@extends('admin.app')
@section('content')
    <div class="row">

        <div class="col-lg-8 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success"> {{ session('success') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Event Details</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.event_update', $event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') <!-- For updating --> --}}

                        <div class="mb-3">
                            <label class="form-label">Event Title</label>
                            <input type="text" name="title" class="form-control"
                                value="{{ old('title', $event->title) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Event Date</label>
                            <input type="date" name="date" class="form-control"
                                value="{{ old('date', $event->date) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Event Time</label>
                            <input type="time" name="time" class="form-control"
                                value="{{ old('time', $event->time) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Event Location</label>
                            <input type="text" name="location" class="form-control"
                                value="{{ old('location', $event->location) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Event Description</label>
                            <textarea id="summernote" name="description" class="form-control">
            {!! old('description', $event->description) !!}
        </textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Event Image</label>
                            <input type="file" name="image" class="form-control">
                            @if ($event->image)
                                <img src="{{ asset($event->image) }}" alt="Event Image" class="img-fluid mt-2"
                                    style="max-height: 150px;">
                            @endif
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="form-control btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>

    </div>


    </div>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
                placeholder: 'Write your content here...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['fontname', 'fontsize', 'bold', 'italic', 'underline', 'strikethrough',
                        'superscript', 'subscript', 'clear'
                    ]],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph', 'height']],
                    ['insert', ['link', 'picture', 'video', 'table', 'hr']],
                    ['view', ['fullscreen', 'codeview', 'undo', 'redo']],
                    ['misc', ['help']]
                ]
            });
        });
    </script>

@endsection
