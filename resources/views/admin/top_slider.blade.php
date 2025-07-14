@extends('admin.app')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Top Slider Added</h3>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success"> {{ session('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.top_slider_insert') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
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
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @forelse($top_slider as $key=>$top_slides)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $top_slides->title }}</td>
                                <td>
                                    <img src="{{ asset($top_slides->top_slider) }}" class="img-fluid"
                                        style="height:130px;width:200px;" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('admin.top_slider_delete', $top_slides->id) }}"
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
@endsection
