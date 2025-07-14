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
                    <h3>Featured You Tube</h3>
                </div>

                <div class="card-body">


                    <form action="{{ route('admin.featured_youtube') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Link</label>
                            <input type="text" name="link" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="form-control btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Slider List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Serial</th>
                            <th>You_Tube</th>

                            <th>Action</th>
                        </tr>
                        @if ($you_tube)
                            <tr>
                                <td>1</td>
                                <td><iframe width="560" height="315" src="{{ $you_tube->link }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></td>
                                <td>
                                    <a href="{{ route('admin.you_tube_dlt', $you_tube->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endif
                    </table>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Featured Content</h3>
                </div>
                <div class="container my-5">
                    <div class="card mx-auto" style="max-width: 800px;">
                        <div class="card-header bg-primary text-white">
                            <h3 class="mb-0">Featured Content</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.featured_content_add') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="summernote" class="form-label">Content</label>
                                    <textarea id="summernote" name="content">
                                        @if (isset($content))
{!! $content->content !!}
@endif
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
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
