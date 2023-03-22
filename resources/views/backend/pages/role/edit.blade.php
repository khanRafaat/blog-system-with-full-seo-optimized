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
                        <h3 class="card-title">Edit Role And Permission</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card-body">
                            <form action="{{route('role-permissions.update',$role->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter Role Name</label>
                                        <input type="text" name="name" class="form-control"placeholder="Role Name"
                                            value="{{ $role->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="permission">Select Permissions</label>
                                    <select name="permission[]" id="permission"
                                        class="form-control form-control-sm selectpicker" required multiple
                                        data-live-search="true">
                                        @foreach ($permission as $p)
                                            <option
                                                @foreach ($rolePermissions as $pId){{ $pId->id == $p->id ? 'selected' : '' }} @endforeach
                                                value="{{ $p->id }}"> {{ $p->name }}</option>
                                        @endforeach



                                    </select>


                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-info">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
@endsection
