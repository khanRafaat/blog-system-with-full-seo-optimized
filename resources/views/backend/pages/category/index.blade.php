@extends('backend.master')
@section('title', 'Category')
@section('content')
@if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <div class="row">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category list</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover table-sm table-responsive">
                        <thead>
                            <tr class="text-center">
                                <th>id</th>
                                <th>Category Name</th>
                                <th>Total Post</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($categories as $key => $category)
                                <tr class="text-center">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>{{ count($category->blogs )}}</td>
                                    {{-- <td>10/03/2022</td> --}}
                                    <td>{{ $category->status }}</td>
                                    <td class=" text-center">
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                            @can('category_edit')
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('category.edit', $category->id) }}">Edit</a>
                                                @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('category_delete')
                                            <button type="submit" class="btn btn-danger btn-sm " onclick=" return
                                                confirm('Are you sure you want to delete this item?');">Delete</button>
                                                @endcan
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        @can('category_add')
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add new Category</h3>
                </div>
                <form action="{{ route('category.store') }}" method="post">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_name">Category Name </label>
                            <input type="text" name="category_name" id="category_name"
                                class="form-control form-control-sm" placeholder="Enter your category name" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Add Category</button>
                    </div>
                </form>
            </div>

        </div>
        @endcan
    </div>
@endsection
