@extends('frontend/layout/app')
@section('seo')

<title>Wikilearns Search</title>
<meta name="title" content="Wikilearns Search">
@endsection
@section('frontbody')
@section('frontbody')
<section id="blog" class="blog" style="padding-top:90px;">
    <div class="container" data-aos="fade-up">
        <div class="p-5">      
        </div>
        <div class="row">    
            <div class="col-lg-9 entries">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-3">
                            <div class="card mb-4">
                                <div class="hover-zoom"  onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">
                                    <img src="{{asset('image/'.$blog->image)}}" alt="Card image cap"
                                        class="card-img-top img-fluid img-responsive rounded-top">
                                </div>
                                <div class="card-body">
                                    <a class="text-decoration-none" href="{{ Route('getPostbySlug', $blog->slug) }}"> <h5 class="card-title text-center display-5 text-dark">{{ $blog->title }}</h5></a>
                                    <div class="text-center">
                                        <a class="pt-2 text-decoration-none text-center"
                                            href="{{ Route('getPostbySlug', $blog->slug) }}"><span
                                                class="border-2 btn btn-success btn-sm rounded-pill">Read More...</span></a>
                                    </div>
                                    <hr>
                                    <div class="text-center text-dark">
                                        <span><a href="https://www.facebook.com/connectclippingworld/" target="_blank"><i
                                                    class="fab fa-3x fa-solid fa-facebook-square rounded-pill text-success"
                                                    style="font-size:30px; border-radius:75%;!important;"></i></a></span>&nbsp;
                                        <span><a href="https://twitter.com/clippingworld2" target="_blank"><i
                                                    class="fab fa-3x fa-solid fa-twitter-square text-success"
                                                    style="font-size:30px;"></i></a></span>&nbsp;
                                        <span><a href="https://www.instagram.com/connectclippingworld/" target="_blank"><i
                                                    class="fab fa-3x fa-solid fa-instagram-square text-success"
                                                    style="font-size:30px;"></i></a></span>&nbsp;
                                        <span><a href="https://www.linkedin.com/company/clippingworld2/" target="_blank"><i
                                                    class="fab fa-3x fa-solid fa-linkedin text-success"
                                                    style="font-size:30px;"></i></a></span>&nbsp;
                                        <span><a href="https://www.pinterest.com/clippingworld/ " target="_blank"><i
                                                    class="fab fa-3x fa-solid fa-pinterest-square text-success"
                                                    style="font-size:30px;"></i></a></span>&nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar">
                    

                    <h3 class="sidebar-title">Categories</h3>
                    <hr>
                    <div class="sidebar-item categories">
                        @foreach ($catgorr as $category)
                        @if (!$category->blogs->isEmpty())
                        <ul>
                            <li><a href="{{route('getCategorybySlug',$category->category_slug)}}"
                                    class="text-decoration-none font-weight-bold">{{ $category->category_name }}</a>
                            </li>
                        </ul>
                        @endif
                        @endforeach
                    </div>
                    <div class="">
                        <h3 class="sidebar-title">
                            Follow Us
                        </h3>
                        <hr>
                        <div class="follow-container">
                            {{-- <span><a href="#"><i class="fa-brands fa-facebook"></i></a></span> --}}
                            <span><a href="{{ asset('https://www.facebook.com/connectclippingworld/') }}"
                                    target="_blank"><i class="fab text-dark fa-3x fa-solid fa-facebook-square"></i></a></span>
                            {{-- <span><a href="{{ asset('https://www.facebook.com/') }}"><i
                                class="fab fa-instagram-square"></i></a></span> --}}
                            <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i
                                        class="fab text-dark  fa-3x fa-solid fa-twitter-square"></i></a></span>
                            <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}"
                                    target="_blank"><i class="fab text-dark fa-3x fa-solid fa-instagram-square"></i></a></span>
                            <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}"
                                    target="_blank"><i class="fab text-dark fa-3x fa-solid fa-linkedin"></i></a></span>
                            <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i
                                        class="fab fa-3x text-dark fa-solid fa-pinterest-square"></i></a></span>
                            <span><a href="{{ asset('https://www.youtube.com/channel/UCLRDqJgwcFOxdpqo7vBxh9Q/featured') }}"
                                    target="_blank"><i class="fab text-dark fa-3x fa-solid fa-youtube-square"></i></a></span>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                    <br>
                    
                    <hr>
                        <section class="bg-warning text-center p-5 mt-4">
                            <div class="container p-3">
                                ads
                            </div>
                            <div class="clearfix"></div>
                        </section>
                    <br><br>


                       
                    </div><!-- End sidebar recent posts-->


                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->
      

        </div>

    </div>
</section><!-- End Blog Single Section -->

<div class="container">
    <h3 class="text-dark">Trending Post</h3>
    <hr>
    <div class="row">
        <div class="col-lg-9">
            <div class="owl-carousel owl-theme">
                @foreach ($catgorr as $key => $cat )
                @if (!$cat->blogs->isEmpty())
                <div class="item">
                    @foreach ($cat->blogs->random(1)  as $key => $blog)
                    <div class="card mb-4">
                        
                        <div class=" containerImage">

                            <img src="{{asset('image/'.$blog->image)}}" alt="{{ $blog->title }}"
                                class="card-img-top img-fluid img-responsive rounded-top">
                                <a class="top-left" href="{{route('getCategorybySlug',$cat->category_slug)}}">{{$cat->category_name}}</a>
                                {{-- <div class="top-left"> </div> --}}
                        </div>
                        <div class="card-body">


                            <h5 class="card-title text-center display-5">{{ $blog->title }}</h5>
                            <div class="text-center">
                                <a class="pt-2 text-decoration-none text-center"
                                    href="{{ Route('getPostbySlug', $blog->slug) }}"><span
                                        class="border-2 readmore-btn  btn-sm rounded-pill" >Read More...</span></a>
                            </div>
                            <hr>
                            <div style="padding: 20px">
                            <div class="share-button" >
                                <div class="share-button__back">
                            <a class="share__link fShare" href="#" title="twitter"><i class="d-flex justify-content-center fab fa-facebook-f"> </i></a>
                              <a class="share__link fShare" href="#" title="facebook"> <i class="d-flex justify-content-center  fab fa-twitter"> </i></a>
                              <a class="share__link fShare" href="#" title="google plus"><i class="d-flex justify-content-center fab fa-linkedin" > </i> </a>
                              <a class="share__link fShare" href="#" title="dribbble"><i class="d-flex justify-content-center fab fa-pinterest"> </i> </a>
                                </div>
                                <div class="share-button__front">
                                  <p class="share-button__text">Share</p>
                                </div>
                              </div>
                        </div>
                        </div>


                    </div>
                    @endforeach

                </div>
                @endif
                @endforeach


            </div> 

     <div class="row">
            
              
              

            </div> 

        </div>
        <div class="col-lg-3 blog">
            <div class="sidebar">

                <h3 class="sidebar-title">Recent Posts</h3>
                <hr>
                <div class="sidebar-item recent-posts">
                    @if (count($blogs))
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($cat->blogs as $blog)
                            <div class="post-item" onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">
                                <img class="img-responsive image-fluid rounded mt-auto"
                                src="{{ asset('image/' . $blog->thumbnail) }}" alt="{{ $blog->imagealt }}">
                                <h4><a href="{{ Route('getPostbySlug', $blog->slug) }}"
                                        class="text-decoration-none">{!! Str::limit(strip_tags($blog->title), 40, $end = '..') !!}</a></h4>
                                <p class="text-decoration-none text-dark ">
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</p>
                            </div>
                            @php
                                if (++$i == 5) {
                                    break;
                                }
                            @endphp
                        @endforeach
                    @else
                        <div class="post-item clearfix">
                            <p>No Related Post</p>
                        </div>
                    @endif
                </div><!-- End sidebar recent posts-->
            </div><!-- End sidebar -->
        </div>

    </div>
</div>

@endsection

@section('script')
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        navText: ["<i class='owlicon fa fa-chevron-circle-left'></i>",
            "<i class='owlicon fa fa-chevron-circle-right'></i>"
        ],
        responsive: {
            0: {
                items: 1,

            },
            600: {
                items: 3,

            },
            1000: {
                items: 3,

            }
        }
    });
</script>
@endsection



