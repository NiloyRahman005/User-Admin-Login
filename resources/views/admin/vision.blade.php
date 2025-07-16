@extends('admin.app')
@section('content')
    <div class="row">

        <div class="col-lg-6 mx-auto">
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
                    <h3>Vission</h3>
                </div>

                <div class="card-body">


                    <form action="{{ route('admin.vision.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Show current image if exists --}}
                        @if (!empty($vision->image) && file_exists(public_path($vision->image)))
                            <div class="mb-3 text-center">
                                <img src="{{ asset($vision->image) }}" alt="Vision Image" style="max-height: 150px;"
                                    class="img-thumbnail">
                            </div>
                        @endif

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content" id="summernote" cols="30" rows="10" class="form-control">
            {!! $vision->content ?? '' !!}
        </textarea>
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
