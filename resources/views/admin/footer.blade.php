@extends('admin.app')
@section('content')
    <div class="row">

        <div class="col-lg-4">
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
                    <h3>Footer</h3>
                </div>

                <div class="card-body">


                    <form action="{{ route('admin.footer_added') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Lattitude</label>
                            <input type="text" name="lattitude" class="form-control"
                                value="{{ isset($footer) ? $footer->lattitude : '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Longitude</label>
                            <input type="text" name="longitude" class="form-control"
                                value="{{ isset($footer) ? $footer->longitude : '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Facebook Link</label>
                            <input type="text" name="fb_link" class="form-control"
                                value="{{ isset($footer) ? $footer->fb_link : '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ isset($footer) ? $footer->email : '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="phone" name="phone" class="form-control"
                                value="{{ isset($footer) ? $footer->phone : '' }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="form-control btn btn-primary">Submit</button>
                        </div>
                    </form>
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
