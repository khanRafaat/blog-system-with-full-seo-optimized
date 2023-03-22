@extends('frontend/layout/app')
@section('frontbody')

<style>
#heart {
    cursor: pointer
}

/* .like {
    float: right;
    font-size: 22px;
    position: relative;
    top: 20px;
    color: #333333
} */

.fa-gratipay {
    margin-right: 10px;
    transition: 0.5s
}


/* blog section all css */
.bmain{
  padding-top:150px;
  padding-bottom:50px;

}

.card-title{
color:black;
}

.card-text{
color:black;
}

.hover-zoom{

}
.card:hover{
  transform: scale(1.1);
  transition: transform 0.2s ease;
  /* transition: transform 0.2s ease-in-out; */
  background:rgb(231, 225, 225);



  /* box-shadow: 0 5px 5px 0 ;
  border-radius: 0;
  border: 0; */


}
.card-img-top {
    max-height: 200px !important;
    min-height: 150px !important;
    object-fit: cover;
}

</style>




<section style="background-color:#0193AE;">
  <div class="container bmain">
    <div class="row">

      @foreach ($blogs as $blog)
        <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    {{-- <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top"> --}}
                    <img  src="/image/{{ $blog->image }}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                  
                  
                  <h5 class="card-title text-center display-5">{{ $blog->title }}</h5>
                  
                    
                    <p class="card-text">{{ $blog->summary }}</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href="{{Route('front.show', $blog->id )}}"><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center display-5">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.supporting text below as a natural lead-in to additional content.</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href=""><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center display-5">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.supporting text below as a natural lead-in to additional content.</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href="{{Route('front.index')}}"><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center display-5">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.supporting text below as a natural lead-in to additional content.</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href="{{Route('front.index')}}"><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center display-5">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.supporting text below as a natural lead-in to additional content.</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href="{{Route('front.show')}}"><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center display-5">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.supporting text below as a natural lead-in to additional content.</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href="{{Route('front.show')}}"><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center display-5">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.supporting text below as a natural lead-in to additional content.</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href="{{Route('front.show')}}"><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center display-5">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.supporting text below as a natural lead-in to additional content.</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href="{{Route('front.show')}}"><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center display-5">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.supporting text below as a natural lead-in to additional content.</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href="{{Route('front.show')}}"><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center display-5">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.supporting text below as a natural lead-in to additional content.</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href="{{Route('front.show')}}"><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center display-5">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.supporting text below as a natural lead-in to additional content.</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href="{{Route('front.show')}}"><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card mb-4">
                <div class="hover-zoom">
                    <img  src="{{asset('frontend/images/blog/blogn.webp')}}" alt="Card image cap" class="card-img-top img-fluid img-responsive rounded-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center display-5">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.supporting text below as a natural lead-in to additional content.</p>
                    <div class="text-center">
                        <a class="pt-2 text-decoration-none text-center" href="{{Route('front.show')}}"><span class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                    </div>
                    <hr>
                    <div class="text-center text-dark">
                      <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success" style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i class="fab fa-3x fa-solid fa-twitter-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}" target="_blank"><i class="fab fa-3x fa-solid fa-linkedin text-success" style="font-size:30px;"></i></a></span>&nbsp;
                      <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i class="fab fa-3x fa-solid fa-pinterest-square text-success" style="font-size:30px;"></i></a></span>&nbsp;
                    </div>
                </div>
            </div>
        </div> --}}


        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique tenetur consequuntur voluptas. Quia, totam voluptatem.






























    </div>
  </div>
</section>




{{-- <div  class="footer-top pt-5 pb-5 " style="background-image: linear-gradient(magenta, orange); !important; " id="footer-top">
  <div class="container ">
      <div class="row">
          <div class="col-md-12 text-center mt-3" style="padding:110px 0px;!important;">
              <div class="m-5 p-5">
                  <img width="100px" height="100px" class="object" data-value="13" src="{{asset('frontend/images/phoro-collage-social.png')}}" alt="alternative">
                  
              </div>
              <div class="mt-5">
                  <h2 class="mt-5 mb-5">Photo Collage Social</h2>
                  <h5 class="mt-5 mb-5" style="font-size:25px">Whether you are an iPhone or Android user, feel free to use Photo Collage Social without any criteria.</h5>
                  <p class="mt-5 mb-5" style="font-size:20px">Photo Collage Social Available now on Apple Apps Store and Google Play Store</p>

              </div>
              <div class="m-5">
                  
                  <a href="https://apps.apple.com/us/app/photo-collage-social/id1586019017" class="btn m-3 btn-primary text-decoration-none text-center cbbc object" data-value="5"><i class="fab fa-2x pt-2 text-center font-weight-bold fa-apple"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span><b class="text-center font-weight-bold h4">Apple Store</b></span></a>&nbsp;&nbsp;&nbsp;    
                  <a href="https://apps.apple.com/us/app/photo-collage-social/id1586019017" class="btn m-3 btn-primary text-decoration-none text-center cbbc object" data-value="5"><i class="fab fa-2x pt-2 text-center font-weight-bold fa-google-play"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span><b class="text-center font-weight-bold h4">Google Play</b></span></a>    
                  &nbsp;&nbsp;&nbsp;
                  
              </div>
          </div>
      </div>
  </div>
</div> --}}

















<!-- <div class="container bmain">
  <div class="row">
    <div class="col-lg-3">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('frontend/images/blog/blog-1.jpg')}}" alt="" class="img-fluid">
          <div class="card-body">
            <h5 class="card-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->












<!-- <div class="container" style="padding-top:150px;">
  <div class="row">
    <div class="col-lg-3">
      <h1>News Card</h1>
      <div class="cardcontainer">
        <div class="photo"> <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500">
        </div>
        <div class="content">
             <p class="txt4">City Lights In Newyork</p>
             <p class="txt2">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
        </div>
        <div class="footer">
             <p><a class="waves-effect waves-light btn" href="#">Read More</a><a id="heart"><span class="like"><i class="fab fa-gratipay"></i>Like</span></a></p>
             <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span class="comments"><i class="fas fa-comments"></i>45 Comments</span></p>
        </div>
      </div>
    </div>
  </div>
</div> -->





@endsection

@section('script')
<script>
$(document).ready(function(){
  $("#heart").click(function(){
    document.querySelector(".fa-gratipay").style.color = "#E74C3C";
  });
});
</script>
@endsection
