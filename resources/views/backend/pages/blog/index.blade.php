@extends('backend.master')
@section('title', 'Blog List')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Unpublished Post</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover table-sm table-responsive">
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
                            @foreach ($ublogs as $key => $blog)
                                <tr class="text-center">
                                    <td>{{ $key + $ublogs->firstItem() }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        @foreach ($blog->categories as $catName)
                                            <span class="badge badge-primary">{{ $catName->category_name }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $blog->user->fname }} <br> <small>{{ $blog->user->position}}</small> </td>
                                    <td class=" text-center">

                                        <div class="dropdown">
                                            <button class="btn btn-outline-primary btn-sm " type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                                    @csrf
                                                    <a class="dropdown-item" href="{{ route('blog.show', $blog->id) }}"
                                                        target="_blank">Show</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('blog.edit', $blog->id) }}">Edit</a>
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item"
                                                        onclick="return confirm('Are you sure you want to Trash this Post?');">Trash
                                                        Item</button>
                                                </form>

                                            </div>
                                        </div>



                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $ublogs->links() }}
                    </div>

                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Published Post</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover table-sm table-responsive">
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

                            @foreach ($pblogs as $key => $blog)
                                <tr class="text-center">
                                    <td>{{ $key + $pblogs->firstItem() }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        @foreach ($blog->categories as $catName)
                                            <span class="badge badge-primary">{{ $catName->category_name }}</span>
                                        @endforeach
                                    </td>


                                    <td>{{ $blog->user->fname }} <br> <small>{{ $blog->user->position}}</small> </td>
                                    <td class=" text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-primary btn-sm " type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                                    @csrf
                                                    <a class="dropdown-item" href="{{ route('blog.show', $blog->id) }}"
                                                        target="_blank">Show</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('blog.edit', $blog->id) }}">Edit</a>
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item"
                                                        onclick="return confirm('Are you sure you want to Trash this Post?');">Trash
                                                        Item</button>
                                                </form>

                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $pblogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Corrections</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover table-sm table-responsive">
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
                            @foreach ($cblogs as $key => $blog)
                                <tr class="text-center">
                                    <td>{{ $key + $cblogs->firstItem() }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        @foreach ($blog->categories as $catName)
                                            <span class="badge badge-primary">{{ $catName->category_name }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $blog->user->fname }} <br> <small>{{ $blog->user->position}}</small> </td>
                                    <td class=" text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-primary btn-sm " type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                                    @csrf
                                                    <a class="dropdown-item" href="{{ route('blog.show', $blog->id) }}"
                                                        target="_blank">Show</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('blog.edit', $blog->id) }}">Edit</a>
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item"
                                                        onclick="return confirm('Are you sure you want to Trash this Post?');">Trash
                                                        Item</button>
                                                </form>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $cblogs->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Rejected Blogs</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover table-sm table-responsive">
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
                            @if (count($rblogs))
                                @foreach ($rblogs as $key => $blog)
                                    <tr class="text-center">
                                        <td>{{ $key + $rblogs->firstItem() }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>
                                            @foreach ($blog->categories as $catName)
                                                <span class="badge badge-primary">{{ $catName->category_name }}</span>
                                            @endforeach
                                        </td>

                                        <td>{{ $blog->user->fname }} <br> <small>{{ $blog->user->position}}</small> </td>
                                        <td class=" text-center">
                                            <div class="dropdown">
                                                <button class="btn btn-outline-primary btn-sm " type="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                                        @csrf
                                                        <a class="dropdown-item" href="{{ route('blog.show', $blog->id) }}"
                                                            target="_blank">Show</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('blog.edit', $blog->id) }}">Edit</a>
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item"
                                                            onclick="return confirm('Are you sure you want to Trash this Post?');">Trash
                                                            Item</button>
                                                    </form>
                                                </div>
                                            </div>
                                            {{-- <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">                                  
                                    <a class="btn btn-success btn-sm" href="{{ route('blog.show',$blog->id) }}" target="_blank">Show</a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $rblogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
