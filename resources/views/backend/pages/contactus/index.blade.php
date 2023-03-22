@extends('backend.master')
@section('title', 'Message Inbox')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Writer Request
                </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beWriterReq as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->fname }}
                                        @if ($data->exam == 1)
                                            <span class="badge badge-success">Exam Done</span>
                                        @else
                                            <span class="badge badge-warning">Exam Pending</span>
                                        @endif

                                        @if ($data->status == 0)
                                            <span class="badge badge-danger">New</span>
                                        @endif

                                    </td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        <div class="dropdown" style="z-index: 9999999 !importent">
                                            <button class="btn btn-outline-primary btn-sm " type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" style="z-index: 9999999 !importent">

                                                <form action="{{ route('bewriter-backend.destroy', $data->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('bewriter_view')
                                                        <a class="dropdown-item"
                                                            href="{{ route('bewriter-backend.show', $data->id) }}">View</a>
                                                    @endcan
                                                    @can('bewriter_add')
                                                    <a class="dropdown-item"
                                                    href="{{ route('bewriter-backend.edit', $data->id) }}">Add User</a>
                                                    @endcan
                                                    @can('bewriter_delete')
                                                    <button type="submit" class="dropdown-item"
                                                        onclick="return confirm('Are you sure you want to permanently delete this writer Information?');">Delete</button>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Contact Us Massage
                </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactUsData as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->fname }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->subject }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-outline-primary btn-sm " type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form action="{{ route('contactus.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('contact_us_view')
                                                    <a class="dropdown-item"
                                                        href="{{ route('contactus.show', $data->id) }}">View</a>
                                                    @endcan
                                                    @can('contact_us_delete') 
                                                    <button type="submit" class="dropdown-item"
                                                    onclick="return confirm('Are you sure you want to permanently delete this message ?');">Delete</button>
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
@endsection
