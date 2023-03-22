@extends('backend.master')
@section('title', 'Edit User Informations')
@section('content')

    <div class="d-flex justify-content-center">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit User Information
                    </div>
                    <div class="card-body">

                        <form action="{{route('user.store')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">First Name</label>
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" >
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" >
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" class="form-control" id="password" placeholder="Leave Blank If Not Necessary">
                                </div>
    
                            </div>
                            
                            <div class="form-group">
                                <label for="roleAssign">Assign Role</label>

                                <select id="roleAssign" name="role" class="form-control">
                              @foreach ($roles as $role )
                              <option 
                              value="{{$role->id}}">{{$role->name}}</option>
                              @endforeach
                                </select>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPostion">Select Postion</label>
                                    <select id="inputPostion" name="position" class="form-control">
                                        <option >Choose...</option>
                                        <option value="Inhouse" >Inhouse</option>
                                        <option value="Contractual">Outsource</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputStatus">Status</label>
                                    <select id="inputStatus" name="status" class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
