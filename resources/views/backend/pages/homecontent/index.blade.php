@extends('backend.master')
@section('title', 'Home Content')
@section('content')
@if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <div class="row">
        
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Home Content list</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover table-sm table-responsive">
                        <thead>
                            <tr class="text-center">
                                <th>id</th>
                                <th>Section</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($homecontent as $key => $content)
                                <tr class="text-center">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $content->section }}</td>
                                    <td>{{$content->content}} </td>
                                    <td class=" text-center">
                                    <a class="btn btn-primary btn-sm" href="{{ route('home-content.edit', $content->id) }}">Edit</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        @can('category_add')
        @endcan
    </div>
@endsection
