@extends('backend.master')
@section('title', 'Role And Permission Management')
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
                        <h3 class="card-title">Role And Permission Management</h3>
                        @can('role_create')
                            <a href="{{ route('role-permissions.create') }}" class="btn btn-success float-right">Create Role</a>
                        @endcan
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Permissions</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $role)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @foreach ($role->permissions as $perm)
                                                <span class="badge badge-info mr-1">
                                                    {{ $perm->name }}
                                                </span>
                                            @endforeach
                                        <td class=" text-center">

                                            <div class="dropdown">
                                                <button class="btn btn-outline-primary btn-sm " type="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <form action="{{ route('role-permissions.destroy', $role->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        @can('role_edit')
                                                            <a class="dropdown-item"
                                                                href="{{ route('role-permissions.edit', $role->id) }}"
                                                                target="_blank">Edit</a>
                                                        @endcan
                                                        @can('role_delete')
                                                            <button type="submit" class="dropdown-item"
                                                                onclick="return confirm('Are you sure you want to permanently delete this user?');">Delete</button>
                                                        @endcan
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
