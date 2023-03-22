@extends('frontend/layout/app')
@section('seo')
<title>{{ $blog->title }}</title>
<meta name="title" content="{{ $blog->title }}">
<meta name="description" content="{{ $blog->summary}}">
<meta name="keywords" content="{{ $blog->keywords}}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{Request::url()}}">
<meta property="og:title" content="{{ $blog->title }}">
<meta property="og:description" content="{{ $blog->summary}}">
<meta property="og:keywords" content="{{ $blog->keywords}}">
<meta property="og:image" content="{{asset('image/'.$blog->socialmediaimage)}}">
<meta property="og:image:width" content="1200" />	
<meta property="og:image:height" content="630" />	
<meta property="og:image:type" content="image/webp" />
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{Request::url()}}">
<meta property="twitter:title" content="{{ $blog->title }}">
<meta property="twitter:description" content="{{ $blog->summary}}">
<meta property="twitter:keywords" content="{{ $blog->keywords}}">
<meta property="twitter:image" content="{{asset('image/'.$blog->socialmediaimage)}}">
@endsection

@section('frontbody')

<section id="blog" class="blog" style="padding-top:100px;">
    <div class="container" data-aos="fade-up">
        <div class="row">

            <div class="col-lg-9 entries">
            
                <article class="entry entry-single">

                    <div class="entry-img d-flex justify-content-center"   >
                        <img src="{{asset('image/'.$blog->image)}}" alt="{{ $blog->imagealt}}" class="img-fluid" >
                    </div>
                    <h1 class="entry-title text-decoration-none">
                        {{ $blog->title }}
                    </h1>
                    <div class="entry-meta">
                        <ul>
                            {{-- <li class="d-flex align-items-center ">Author &nbsp;::&nbsp;&nbsp; <a href="#"
                                    class="text-decoration-none text-warning font-weight-bold">{{ $blog->user->name }}</a></li> --}}
                            {{-- <li class="d-flex align-items-center ">Last Modified Date  &nbsp;:&nbsp;&nbsp; <a href="#"
                                    class="text-decoration-none text-warning font-weight-bold"><time
                                        datetime="2020-01-01"> {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</time></a></li> --}}
                                        {{-- datetime="2020-01-01">{{ $b->created_at->format('Y-m-d') }}</time></a></li> --}}

                                        {{-- <span class="day">{{\Carbon\Carbon::parse(created_at)->format('d M')}}</span> --}}
                            {{-- <li class="d-flex align-items-center "><i class="bi bi-chat-dots"></i> <a href="#" class="text-decoration-none text-danger font-weight-bold">12 Comments</a></li> --}}
                        </ul>
                    </div>
                    <div class="ck-content">
                        {!! $blog->description !!} 
                    </div>
                </article><!-- End blog entry -->
            </div>
            <div class="col-lg-3">
                <div class="sidebar">

                    {{-- <h3 class="sidebar-title">Search</h3>
                    <hr>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div> --}}

                    <h3 class="sidebar-title">Categories</h3>
                    <hr>
                    <div class="sidebar-item categories">

                        @foreach ($categories as $category)
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
                                    target="_blank"><i class="fab  fa-3x fa-solid fa-facebook-square"></i></a></span>
                            {{-- <span><a href="{{ asset('https://www.facebook.com/') }}"><i
                                class="fab fa-instagram-square"></i></a></span> --}}
                            <span><a href="{{ asset('https://twitter.com/clippingworld2') }}" target="_blank"><i
                                        class="fab fa-3x fa-solid fa-twitter-square"></i></a></span>
                            <span><a href="{{ asset('https://www.instagram.com/connectclippingworld/') }}"
                                    target="_blank"><i class="fab fa-3x fa-solid fa-instagram-square"></i></a></span>
                            <span><a href="{{ asset('https://www.linkedin.com/company/clippingworld2/') }}"
                                    target="_blank"><i class="fab fa-3x fa-solid fa-linkedin"></i></a></span>
                            <span><a href="{{ asset('https://www.pinterest.com/clippingworld/ ') }}" target="_blank"><i
                                        class="fab fa-3x fa-solid fa-pinterest-square"></i></a></span>
                            <span><a href="{{ asset('https://www.youtube.com/channel/UCLRDqJgwcFOxdpqo7vBxh9Q/featured') }}"
                                    target="_blank"><i class="fab fa-3x fa-solid fa-youtube-square"></i></a></span>

                        </div>

                        <div class="clearfix"></div>

                    </div>
                    {{-- <br>
                    <hr>
                        <section class="bg-warning text-center p-5 mt-4">
                            <div class="container p-3">
                                <p id="display_message"></p>
                                ad

                            </div>
                            <div class="clearfix"></div>
                        </section>
                    <br><br> --}}
                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->
            {{-- <div class="col-md-1">
            
          </div> --}}

        </div>

    </div>
</section><!-- End Blog Single Section -->

<div class="container">
    <h3 class="text-dark">Trending Post</h3>
    <hr>
    <div class="row">
        <div class="col-lg-9">
            <div class="owl-carousel owl-theme">
                @foreach ($categories as $key => $cat )
                @if (!$cat->blogs->isEmpty())
                <div class="item">
                    @foreach ($cat->blogs->random(1)  as $key => $blog)
                    <div class="card mb-4" onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">
                        
                        <div class=" containerImage">

                            <img src="{{asset('image/'.$blog->image)}}" alt="{{$blog->imagealt}}"
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
                            <div class="post-item ">
                               
                                    <img class="img-responsive image-fluid rounded " src="{{asset('image/'.$blog->image)}}"
                                    alt="satic image">
                           
                                
                                <h4><a href="{{ Route('getPostbySlug', $blog->slug) }}"
                                        class="text-decoration-none">{{ $blog->title }}</a></h4>
                                <p class="text-decoration-none text-dark postDate" style="margin-left:6rem;">
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



