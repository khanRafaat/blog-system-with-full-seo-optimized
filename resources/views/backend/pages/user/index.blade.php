@extends('backend.master')
@section('title', 'User Management')
@section('content')
    <!--  Edit Modal Start -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModallabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModallabel">Edit Users</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!--  Edit Modal End -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    User List
                    @can('user_create')
                    <a href="{{ route('user.create') }}" class="btn btn-success btn-sm float-right"> Add User</a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                @if ($user->id != 1)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $user->fname }}<br>
                                            <small>{{ $user->position }}</small>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @forelse ($user->roles->take(1) as $role)
                                                {{ $role->name }}
                                            @empty
                                                <span class="text-danger">Not Assigned</span>
                                            @endforelse
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-primary btn-sm " type="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        @can('user_edit')
                                                        <a class="dropdown-item"
                                                            href="{{ route('user.edit', $user->id) }}">Edit</a>
                                                            @endcan
                                                            @can('user_delete')
                                                        <button type="submit" class="dropdown-item"
                                                            onclick="return confirm('Are you sure you want to permanently delete this user?');">Delete</button>
                                                            @endcan
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
