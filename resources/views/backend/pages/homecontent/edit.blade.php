@extends('backend.master')
@section('title', 'Home Content Edit')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="{{ route('home-content.update', $content->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-header text-center font-weight-bolder"><h4>{{ $content->section }}</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="category_name">Writer Content</label>
                        <textarea class="form-control" name="content" id="" cols="30" rows="10"> {{ $content->content }}</textarea>
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

