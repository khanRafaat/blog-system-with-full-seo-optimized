@extends('backend.master')
@section('title', 'Message Inbox')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Add New Writer</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('bewriter-backend.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly name="fname" class="form-control" id="staticEmail" value="{{$userData->fname}}">
                                 
                                    <input type="hidden" name="lname" class="form-control" id="staticEmail" value="{{$userData->lname}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly name="orginalemail" class="form-control" id="staticEmail" value="{{$userData->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Date of Birth</label>
                                <div class="col-sm-10">
                                    <input type="date" readonly name="dob"  class="form-control" id="staticEmail" value="{{$userData->dob}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="phone" readonly name="phone"  class="form-control" id="staticEmail" value="{{$userData->phone}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly name="country"  class="form-control" id="staticEmail" value="{{$userData->country}}">
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="text-center">Login Information</h4>
                            </div>

                            <div class="form-group row mt-4">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Login Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control" placeholder="Ex: username.clipping@cllipingworld.com" >
                                </div>
                                </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" name="password" class="form-control" placeholder="Password" >
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-primary text-center"> Add New Writer</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
