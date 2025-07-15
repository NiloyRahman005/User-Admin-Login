@extends('admin.app')
@section('content')
    <div class="row">

        <div class="col-lg-6 col-6 mx-auto">
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
                    <h3>Sponsors</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.sponser_add') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Content</label>
                            <textarea name="content" id="summernote" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    Sponsers List
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                        @forelse($sponser as $key => $sponser)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $sponser->name }}</td>
                                <td>${{ number_format($sponser->amount, 2) }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#editModal{{ $sponser->id }}">Edit</a>

                                            <form action="{{ route('admin.sponser_dlt') }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this sponsor?');">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="sponser_id" value="{{ $sponser->id }}"
                                                    id="">
                                                <button type="submit" class="dropdown-item text-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Edit Modal -->
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="modal fade" id="editModal{{ $sponser->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="editModalLabel{{ $sponser->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{ route('admin.sponser_edit') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="sponser_id" value="{{ $sponser->id }}"
                                                    id="">

                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel{{ $sponser->id }}">Edit
                                                            Sponsor
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" name="name"
                                                                value="{{ $sponser->name }}" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Amount</label>
                                                            <input type="number" name="amount"
                                                                value="{{ $sponser->amount }}" class="form-control"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Content</label>
                                                            <textarea name="content" class="form-control summernote" rows="4">{!! $sponser->content !!}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No sponsors found.</td>
                            </tr>
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

    <script>
        $(document).ready(function() {
            // When any modal is shown
            $('.modal').on('shown.bs.modal', function() {
                // Initialize Summernote only if not already initialized
                $(this).find('.summernote').not('.summernote-initialized').each(function() {
                    $(this).summernote({
                        height: 300,
                        placeholder: 'Write your content here...',
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['fontname', 'fontsize', 'bold', 'italic',
                                'underline', 'strikethrough',
                                'superscript', 'subscript', 'clear'
                            ]],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph', 'height']],
                            ['insert', ['link', 'picture', 'video', 'table', 'hr']],
                            ['view', ['fullscreen', 'codeview', 'undo', 'redo']],
                            ['misc', ['help']]
                        ]
                    }).addClass('summernote-initialized'); // prevent re-init
                });
            });
        });
    </script>

@endsection
