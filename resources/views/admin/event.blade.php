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
                    <h3>Event Create</h3>
                </div>

                <div class="card-body">


                    <form action="{{ route('admin.event_insert') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Event Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Event Date</label>
                            <input type="date" name="date" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Event Time</label>
                            <input type="time" name="time" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Event Location</label>
                            <input type="text" name="location" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Event Description</label>
                            <textarea id="summernote" name="description">
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Event Image</label>
                            <input type="file" name="image" class="form-control">

                        </div>

                        <div class="mb-3">
                            <button type="submit" class="form-control btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-8">
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
        </div> --}}
    </div>

    <div class="row">
        <div class="col-lg-6 mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Event List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Serial</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @forelse($event as $key=>$events)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $events->title }}</td>
                                <td>
                                    <img src="{{ asset($events->image) }}" class="img-fluid"
                                        style="height:120px;width:150px;" alt="">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.event_delete', $events->id) }}">Delete</a>
                                        <a class="dropdown-item"
                                            href="{{ route('admin.event_details', $events->id) }}">Edit</a>

                                    </div>
                </div>
                </td>
                </tr>
            @empty
                @endforelse
                </table>
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
