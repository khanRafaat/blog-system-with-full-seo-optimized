@extends('backend.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category and Sub Categories List</h3>
                    </div>

                    <div class="card-body">
                        
                        <table class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr class="text-center">
                                    <th>id</th>
                                    <th>Categories</th>
                                    <th>Sub Categories</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                <tr class="text-center">

                                   
                                    <td>1</td>
                                    <td>asdas</td>
                                    <td class="badge badge-primary mt-1">asdasd</td>
                                    <td class=" text-center">
                                        <a class="btn btn-primary btn-sm" href="#">Edit</a>
                                    </td>
                                </tr>
                              


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Sub Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('subcat.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="category">Select Category</label>
                                <select name="category_id" id="category_id" class="form-control form-control-sm" required>
                                    <option value="">--- Please Choose a Suitable Category ----</option>
                                    @foreach ($catData as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="subcategory_name">Sub Category Name </label>
                                <input type="text" name="subcategory_name" id="subcategory_name"
                                    class="form-control form-control-sm" placeholder="Enter your Sub-category name"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Add Sub Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
