@extends('backend.master')
@section('title',$blog->title)
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

              <div class="col-md-12 d-flex justify-content-center">
                <img src="{{asset('image/'.$blog->image)}}" width="auto">
              </div>
             
              <h1 class="mt-3 text-center">{{ $blog->title }}</h1>

              <h4 class="d-flex justify-content-center">{{ $blog->summary }}</h4>

            <ul class="d-flex justify-content-center mt-4" style="display:flex;flex-wrap: wrap;list-style:none;">
              <li>
                Category &nbsp;::&nbsp;&nbsp; 
                  @foreach ($blog->categories as $catName)
                  <span class="text-primary">   {{ $catName->category_name }} </span> ,
              @endforeach
              </li>
              <li class="ml-4">
                Author &nbsp;::&nbsp;&nbsp; <span class="text-primary">{{auth()->user($blog->author)->fname}}</span> 
              </li>
              <li class="ml-4">
                Last Update &nbsp;::&nbsp;&nbsp; <span class="text-primary">{{ \Carbon\Carbon::parse($blog->updated_at)->format('d M, Y') }}</span> 
              </li>
            </ul>

                      <div class="d-flex justify-content-center mt-4">

                        <div class="col-md-12">
                          {!! $blog->description !!} 
                      </div>
                      </div>
            </div>
        </div>
    </div>
</div>
@endsection

