@extends('backend.master')
@section('title', 'Message Inbox')
@section('content')

 
    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header">
                   Contact Us Message
                </div>
                <div class="card-body">

                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                          <h2 class="display-5">Name: {{$contactus->fname }} {{$contactus->fname }}</h2>
                          <h4 class="display-6">Subject: {{$contactus->subject }}</h4>
                          <h4 class="display-6">Email: {{$contactus->email }}</h4>
                          <p class="lead">{{$contactus->message }}</p>
                        </div>
                      </div>
                   
                </div>
            </div>
        </div>
       
    </div>
@endsection
