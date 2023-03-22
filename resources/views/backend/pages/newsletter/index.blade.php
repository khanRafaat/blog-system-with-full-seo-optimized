@extends('backend.master')

@section('content')

<div class="row">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Email list</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-hover table-sm">
                    <thead>
                        <tr class="text-center" >
                            <th>Serial</th>
                            <th>Email</th>                           
                            {{-- <th>Status</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newsletters as $key => $newsletter )
                        {{-- @foreach ($newsletters as $newsletter) --}}
                        <tr class="text-center">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $newsletter->email }}</td>
                            {{-- <td>demo</td> --}}
                            <td class=" text-center">
                                <form action="{{ route('newsletter.destroy',$newsletter->id) }}" method="POST">   
                                    {{-- {{ route('category.destroy',$category->id) }}                                --}}
                                    {{-- <a class="btn btn-success btn-sm" href="#">Show</a> --}}
                                    {{-- <a class="btn btn-primary btn-sm" href="#">Edit</a> --}}
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are you sure you want to delete this item?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                       @endforeach
                       
                    </tbody>
                </table>
                {{-- <div class="clearfix"></div> --}}
                <div class="pagination justify-content-center text-center mt-3">

                    {{ $newsletters->links() }}
        
                </div>
                {{-- <div class="text-center">
                    {!!  $newsletters->links() !!}
                </div> --}}
            </div>
            <!-- /.card-body -->
            {{-- <div class="card-footer clearfix text-lg">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>

@endsection
