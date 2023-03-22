@extends('backend.master')
@section('title', 'Edit User Informations')
@section('content')

@php
$unset = "";
$inhouse = "";
$outsource ="";
$active ="";
$inactive ="";

if($users->position === "Unset"){
    $unset = "selected";
}else {
    $unset = "";
}

if($users->position === "Inhouse"){
    $inhouse = "selected";
}else {
    $inhouse = "";
}
if($users->position === "Outsource"){
    $outsource = "selected";
}else {
    $outsource = "";
}

if($users->status === "Active"){
    $active = "selected";
}else {
    $active = "";
}

if($users->status === "Inactive"){
    $inactive = "selected";
}else {
    $inactive = "";
}

@endphp

    <div class="d-flex justify-content-center">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit User Information
                    </div>
                    <div class="card-body">

                        <form action="{{route('user.update',$users->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">First Name</label>
                                    <input type="text" name="fname" class="form-control" id="name" placeholder="Name" value="{{$users->fname}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="name">Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="name" placeholder="Name" value="{{$users->lname}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{$users->email}}" class="form-control" id="email" placeholder="Email" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Leave Blank If Not Necessary">
                                </div>
    
                            </div>
                            
                            <div class="form-group">
                                <label for="roleAssign">Assign Role</label>

                                <select id="roleAssign" name="role" class="form-control">
                              @foreach ($roles as $role )
                              <option 
                              @php
                              if (!empty($assignedRole)) {
                                if ($assignedRole == $role->id ) {
                               echo"selected";
                               }else {
                                echo"";
                               }
                              }
                              @endphp
                              value="{{$role->id}}">{{$role->name}}</option>
                              @endforeach
                                </select>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPostion">Select Postion</label>
                                    <select id="inputPostion" name="position" class="form-control">
                                        <option {{$unset}}>Choose...</option>
                                        <option value="Inhouse" {{$inhouse}}>Inhouse</option>
                                        <option value="Outsource" {{$outsource}}>Outsource</option>
                                      
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputStatus">Status</label>
                                    <select id="inputStatus" name="status" class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="Active"{{$active}}>Active</option>
                                        <option value="Inactive"{{$inactive}}>Inactive</option>
                                    </select>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Update Information</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
