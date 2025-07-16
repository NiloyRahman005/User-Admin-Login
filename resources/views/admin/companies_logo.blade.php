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
                    <h3>Logo Insert</h3>
                </div>

                <div class="card-body">


                    <form action="{{ route('admin.companies_logo_insert') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Logo</label>
                            <input type="file" name="logo" class="form-control">
                        </div>




                        <div class="mb-3">
                            <button type="submit" class="form-control btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Logo Lists</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>
                                Serial
                            </th>
                            <th>Logo</th>
                            <th>Action</th>
                        </tr>
                        @forelse($Logo as $key=>$logo)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                @if (file_exists(public_path($logo->image)) && !empty($logo->image))
                                    <td><img src="{{ asset($logo->image) }}" style="height:120px; width:150px;"
                                            alt="Logo"></td>
                                @else
                                    <td><span>No image available</span></td>
                                @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.logo_delete', $logo->id) }}" class="btn btn-danger">Delete</a>
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
