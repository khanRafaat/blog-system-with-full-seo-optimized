@extends('backend.master')

@section('content')

<div class="row">
    <div class="col-lg-7">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Upload Banner</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Head Banner</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Right Side Banner</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Middle Banner</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Footer Banner</a>
                  </div>
                </div>
                <div class="col-9">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="category">Select Banner</label>
                                    
                                    <input type="file" name="headerBanner" class="form-control form-control-sm">
                                    <small class="mt-1">Banner size should be 728*90 pixel <span class="text-danger">*</span></small>
                                  
                                </div>
                                <button type="submit" class="btn btn-success">Add Banner</button>
                            </div>
                        </div>
                    </div>




                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Upload Banner</h3>
            </div>
        </div>
    </div>
</div>


@endsection