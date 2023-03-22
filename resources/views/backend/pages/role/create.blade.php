@extends('backend.master')
@section('title', 'Edit Role And Permission')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Role with Permissions</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card-body">
                            <form action="{{route('role-permissions.store')}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter Role Name</label>
                                        <input type="text" name="name" class="form-control"placeholder="Role Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="permission">Select Permissions</label>
                                        <select name="permission[]" id="permission"
                                            class="form-control form-control-sm selectpicker" required multiple
                                            data-live-search="true">
                                            @foreach ($permission as $p)
                                                <option
                                                    value="{{ $p->id }}"> {{ $p->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-large btn-info text-center">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
@endsection
