@extends('backend.master')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-header text-center font-weight-bolder"><h4>Category Created Form</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" name="category_name"  value="{{ $category->category_name }}" id="category_name" class="form-control" placeholder="Enter your category name">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

