@extends('backend.master')
@section('title', 'Message Inbox')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Writer Information</h4>
                    </div>
                    <div class="card-body">
                        <div style="display: flex">
                            <h5>First Name: </h5>
                            <p style="margin-left: 10px"> {{ $userData->fname }} </p>
                        </div>

                        <div style="display: flex">
                            <h5>Last Name: </h5>
                            <p style="margin-left: 10px"> {{ $userData->lname }} </p>
                        </div>


                        <div style="display: flex">
                            <h5>Email: </h5>
                            <p style="margin-left: 10px"> {{ $userData->email }} </p>
                        </div>

                        <div style="display: flex">
                            <h5>Date Of Birth: </h5>
                            <p style="margin-left: 10px"> {{ $userData->dob }} </p>
                        </div>

                        <div style="display: flex">
                            <h5>Phone: </h5>
                            <p style="margin-left: 10px"> {{ $userData->phone }} </p>
                        </div>
                        <div style="display: flex">
                            <h5>Country: </h5>
                            <p style="margin-left: 10px"> {{ $userData->country }} </p>
                        </div>
                        @if (!empty($userData->comments))
                            <div style="display: flex">
                                <h5>Comments: </h5>
                                <p style="margin-left: 10px"> {{ $userData->comments }} </p>
                            </div>
                        @endif
                        <h5>Curriculum vitae: </h5>
                        <iframe src="{{ asset('/file/cv/' . $userData->cv) }}" width="100%" height="500px"></iframe>

                        @if (!empty($userData->time))
                            <div class="card-header">
                                <h4 class="text-center">Writer Quality Check Exam</h4>
                            </div>
                            <div style="display: flex">
                                <h5>Total Time Spend: </h5>
                                <p style="margin-left: 10px"> {{ $userData->time }} </p>
                            </div>
                        @endif
                        @if (!empty($userData->answer))
                            <div style="display: flex">
                                <h5>Answer: </h5>
                                <p style="margin-left: 10px"> {!! $userData->answer !!} </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
