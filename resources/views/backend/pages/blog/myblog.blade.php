@extends('backend.master')
@section('title', 'My Blogs')
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ublogs as $key => $blog)
                                <tr class="text-center">
                                    <td>{{ $key + $ublogs->firstItem() }}</td>
                                    <td style=" vertical-align: bottom;"><img src="{{ asset('image/' . $blog->image) }}"
                                            width="100px"></td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        @foreach ($blog->categories as $catName)
                                            <span class="badge badge-primary">{{ $catName->category_name }}</span>
                                        @endforeach
                                    </td>
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Views</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($pblogs as $key => $blog)
                                <tr class="text-center">
                                    <td>{{ $key + $pblogs->firstItem() }}</td>
                                    <td><img src="{{ asset('image/' . $blog->image) }}" width="100px"></td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        @foreach ($blog->categories as $catName)
                                            <span class="badge badge-primary">{{ $catName->category_name }}</span>
                                        @endforeach
                                    </td>

                                    <td>{{ $blog->views }}</td>
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

                                            </div>
                                        </div>


                                        {{-- <a class="btn btn-success btn-sm"
                                            href="{{ route('blog.show', $blog->id) }}" target="_blank">Show</a> --}}
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Correction Post List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-sm table-responsive">
                        <thead>
                            <tr class="text-center">
                                <th>SL</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cblogs as $key => $blog)
                                <tr class="text-center">
                                    <td>{{ $key + $pblogs->firstItem() }}</td>
                                    <td><img src="{{ asset('image/' . $blog->image) }}" width="100px"></td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        @foreach ($blog->categories as $catName)
                                            <span class="badge badge-primary">{{ $catName->category_name }}</span>
                                        @endforeach
                                    </td>
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

                                            </div>
                                        </div>


                                        {{-- <a class="btn btn-success btn-sm"
                                            href="{{ route('blog.show', $blog->id) }}" target="_blank">Show</a> --}}
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
    </div>
@endsection
