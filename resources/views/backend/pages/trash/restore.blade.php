@extends('backend.master')
@section('title', 'Trash Box')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $getreStore->title }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{route('finalTrashedItem',$getreStore->id)}}" method="POST">
                         @csrf
                         @method('GET')
                        <div class="form-group">
                            <label for="writer">Select Writer</label>
                            <select name="writer" id="writer" class="form-control form-control-sm selectpicker" required
                                data-live-search="true">
                                @foreach ($users as $c)
                                    <option @php
                                    if ($c->id ==  $getreStore->user_id){
                                    echo"selected";
                                    } @endphp
                                  value="{{ $c->id }}">{{ $c->fname }} {{ $c->lname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Restore Post</button>
                    </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
