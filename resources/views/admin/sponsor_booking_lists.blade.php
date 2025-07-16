@extends('admin.app')
@section('content')
    <div class="row">

        <div class="col-lg-12 col-12 mx-auto">
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
                    <table class="table table-striped">
                        <tr>
                            <th>Serial </th>
                            <th>Request By </th>
                            <th>Sponser Name</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                        @forelse($sponser_book as $key=>$sponser_book)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <?php
                                $sponser = App\Models\Sponsers::find($sponser_book->sponser_id);
                                ?>
                                <td>{{ $sponser->name }}</td>
                                <?php
                                $user = App\Models\User::find($sponser_book->created_by);
                                ?>
                                <td>{{ $user->name }}</td>
                                <td>{{ $sponser_book->name }}</td>

                                <td>{{ $sponser_book->email }}</td>
                                <td>{{ $sponser_book->phone }}</td>

                                <td>
                                    <a href="{{ route('admin.sponser_book_dlt', $sponser_book->id) }}"
                                        class="btn btn-danger">Delete</a>
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
