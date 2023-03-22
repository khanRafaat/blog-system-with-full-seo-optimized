@extends('backend.master')
@section('title', 'Trash Box')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Trashed Item ({{ count($tblogs) }})</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr class="text-center">
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tblogs as $key => $blog)
                                    <tr class="text-center">
                                        <td>{{ $key + $tblogs->firstItem() }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>
                                            @foreach ($blog->categories as $catName)
                                                <span class="badge badge-primary">{{ $catName->category_name }}</span>
                                            @endforeach
                                        </td>
                                        <td>{{ $blog->user->fname }}</td>
                                        <td class=" text-center">

                                            <div class="dropdown">
                                                <button class="btn btn-outline-primary btn-sm " type="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu">

                                                    <a class="dropdown-item" href="{{ route('blog.show', $blog->id) }}"
                                                        target="_blank">Show</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('blog.edit', $blog->id) }}">Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('retoreTrashedItem', $blog->id) }} "
                                                        onclick="return confirm('Are you sure you want to restore this post?');">Retore</a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('permanentDeteleItem', $blog->id) }} "
                                                        onclick="return confirm('Are you sure you want to delete this Post Permanently?');">Delete
                                                        Permanently</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="mt-3">
                            {{ $tblogs->links() }}
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
