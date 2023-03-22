@extends('frontend/layout/app')
@section('seo')
    <title>Wikilearns | A Popular Multi Blogging Platform </title>
    <meta name="title" content="Wikilearns | A Popular Multi Blogging Platform ">
    <meta name="description"
        content="Wikilearns, a popular multi blogging platform, has worked excellently over the years and covers several niches like photography, trendy news, travel, etc">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:title" content="Wikilearns | A Popular Multi Blogging Platform">
    <meta property="og:description"
        content="Wikilearns, a popular multi blogging platform, has worked excellently over the years and covers several niches like photography, trendy news, travel, etc">
    <meta property="og:image" content="">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ Request::url() }}">
    <meta property="twitter:title" content="Wikilearns | A Popular Multi Blogging Platform">
    <meta property="twitter:description"
        content="Wikilearns, a popular multi blogging platform, has worked excellently over the years and covers several niches like photography, trendy news, travel, etc">
    <meta property="twitter:image" content="">
@endsection
@section('frontbody')
    <header class="header">
        <div class="homeBg">
            <div class="container">
                <div class="row headingStyle">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <h1>{{ $contents[0]['content'] }}</h1>
                        <p>{{ $contents[1]['content'] }}</p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 homeImge d-none d-md-block d-lg-block">
                        <img class="card-img img-fluid img-responsive" data-original="{{ asset('image/static/home.png') }}"
                            alt="" height="300" width="300">
                    </div>
                </div>
            </div>
        </div>
        <div class="header-content">
            <div class="container">
                <div class="row">
                    @php
                        $i = 0;
                    @endphp
                    <div class=" col-md-6 mobileMergin">
                        <h3 class="d-inline-flex p-1 text-dark border border-dark rounded" style="font-size: 25px">Latest
                            Post</h3>
                        <hr>
                        @foreach ($blogs as $blog)
                            <div class="card" onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">

                                <img data-original="{{ asset('image/' . $blog->image) }}" class="card-img "
                                    alt="{{ $blog->imagealt }}" class="card-img-top img-fluid img-responsive rounded-top">
                                <div class="mask" style="background-color: rgba(0, 0, 0, 0.5)"></div>
                                <div class="card-img-overlay text-white d-flex flex-column align-items-center p-5">
                                    <h4 class="card-title text-white mt-auto">{{ $blog->title }}</h4>
                                    {{-- <h6 class="card-subtitle mb-2">{{ $blog->summary }}</h6> --}}
                                    <div class="link d-flex">
                                        <a href="{{ Route('getPostbySlug', $blog->slug) }}" class="card-link text-white">To
                                            Read
                                            ..</a>
                                    </div>
                                </div>
                            </div>
                            @php
                                if (++$i == 1) {
                                    break;
                                }
                            @endphp
                        @endforeach
                    </div>
                    <div class="col-md-6 homeSlider">
                        <h3 class="d-inline-flex p-1 text-dark border border-dark rounded" style="font-size: 25px">Populer
                            Post</h3>
                        <hr>
                        <div id="homeMainSliders" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <ol class="carousel-indicators">
                                @foreach ($populerPost as $pPost)
                                    <li data-target="#homeMainSliders" data-slide-to="{{ $loop->index }}"
                                        class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($populerPost as $blog)
                                    <div class="carousel-item {{ $loop->first ? ' active' : '' }}"
                                        onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';"
                                        style="cursor: pointer;">
                                        <img class="d-block w-100 responsiveImg "
                                            data-original="{{ asset('image/' . $blog->image) }}"
                                            alt="{{ $blog->imagealt }}">
                                        <div class="carousel-caption ">
                                            <h5>{{ $blog->title }}</h5>
                                            <div class="link mb-3">
                                                <a href="{{ Route('getPostbySlug', $blog->slug) }}"
                                                    class="card-link text-white ">To Read ..</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#homeMainSliders" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#homeMainSliders" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- end of header-content -->
    </header>
    <!-- end of header -->
    <!-- end of header -->


    {{-- <div class="container blog">
        <h3 class="d-inline-flex p-2 text-dark border border-dark rounded">Fashion & Lifestyle</h3>
        <hr>
        <div class="row ">

            <div class="col-lg-9">

                <div class="row ">
                    @foreach ($techBlog as $key => $blog)
                        <div class="col-md-4 {{ $col4 }}">
                            <div class="card mb-4">
                                <div class="hover-zoom">

                                    <img data-original="/image/{{ $blog->image }}" alt="Card image cap"
                                        class="card-img-top img-fluid img-responsive rounded-top">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center display-5 text-dark"> {!! Str::limit(strip_tags($blog->title), 60, $end = '..') !!}</h5>
                                    <div class="text-center">
                                        <a class="pt-2 text-decoration-none text-center"
                                            href="{{ Route('getPostbySlug', $blog->slug) }}"><span
                                                class="border-2 btn readmore-btn btn-sm rounded-pill"> <b>To Read..</b>
                                            </span></a>
                                    </div>

                                    <hr>
                                    <div class="d-flex justify-content-center">
                                        <div class="btn_wrap_share ">
                                            <span class="spanCLass">Share</span>
                                            <div class="containershare">
                                                <a class="hoverZoom"
                                                    href="https://www.facebook.com/share.php?u={{ URL::to('/post/' . $blog->slug) }}"
                                                    target="_blank"><i class="sharElements fab fa-facebook-f fb-share">
                                                    </i></a>

                                                <a class="hoverZoom"
                                                    href="https://twitter.com/intent/tweet?url={{ URL::to('/post/' . $blog->slug) }}&text={{ $blog->title }}"
                                                    target="_blank"><i
                                                        class="sharElements  fab fa-twitter twi-share"></i></a>

                                                <a class="hoverZoom"
                                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ URL::to('/post/' . $blog->slug) }}"
                                                    target="_blank"><i
                                                        class="sharElements fab fa-linkedin  linkd-share"></i></a>



                                                <a class="hoverZoom"
                                                    href="http://pinterest.com/pin/create/button/?url={{ URL::to('/post/' . $blog->slug) }}&description={{ $blog->title }}"
                                                    target="_blank"><i class="sharElements fab fa-pinterest "></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3  align-middle">

                <div class="sidebar ">
                    <section class="bg-warning text-center p-5 mt-4">
                        <div class="container p-5">
                            For Ads
                        </div>
                    </section>
                    <br><br>
                    <br><br>
                    <br> <br>
                </div>
            </div>
            <!-- End blog sidebar -->
        </div>
    </div> --}}

    {{-- Section One Start --}}
    <div class="container blog">
        <div class="row">
            {{-- <div class="col-lg-9   d-flex justify-content-center"> --}}
            <div class="col-lg-12   d-flex justify-content-center">
                <div class="row ">
                    @foreach ($categories as $key => $cat)
                        @if ($key === 0 || ($key === 1 && !$cat->blogs->isEmpty()))
                            <div class="col-lg-6 ">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('getCategorybySlug', $cat->category_slug) }}"
                                        style="text-decoration: none">
                                        <h3 class="d-inline-flex p-1 text-dark border border-dark rounded"
                                            style="font-size: 25px">{{ $cat->category_name }}</h3>
                                    </a>
                                </div>
                                <hr>
                                <div class="row ">
                                    @foreach ($cat->blogs->reverse()->take(2) as $key => $blog)
                                        <div class="col-md-6">
                                            <div class="card mb-4">
                                                <div class="hover-zoom"
                                                    onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">

                                                    <img data-original="{{ asset('image/' . $blog->thumbnail) }}"
                                                        alt="{{ $blog->imagealt }}"
                                                        class="card-img-top img-fluid img-responsive rounded-top">
                                                </div>
                                                <div class="card-body">
                                                    <a class="text-decoration-none"
                                                        href="{{ Route('getPostbySlug', $blog->slug) }}">
                                                        <h5 class="card-title text-center display-5 text-dark">
                                                            {!! Str::limit(strip_tags($blog->title), 60, $end = '..') !!}
                                                        </h5>
                                                    </a>
                                                    <div class="text-center">
                                                        <a class="pt-2 text-decoration-none text-center"
                                                            href="{{ Route('getPostbySlug', $blog->slug) }}"><span
                                                                class="border-2 btn readmore-btn btn-sm rounded-pill text-dark">
                                                                <b>To
                                                                    Read...</b>
                                                            </span></a>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-center sharebutton">
                                                        <div class="btn_wrap_share  ">
                                                            <span class="spanCLass">Share</span>
                                                            <div class="containershare">
                                                                <a class="hoverZoom" aria-label="facebook"
                                                                    href="https://www.facebook.com/share.php?u={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-facebook-f fb-share">
                                                                    </i></a>

                                                                <a class="hoverZoom" aria-label="tweeter"
                                                                    href="https://twitter.com/intent/tweet?url={{ URL::to('/post/' . $blog->slug) }}&text={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements  fab fa-twitter twi-share"></i></a>

                                                                <a class="hoverZoom" aria-label="linkdin"
                                                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-linkedin  linkd-share"></i></a>
                                                                <a class="hoverZoom" aria-label="pinterest"
                                                                    href="http://pinterest.com/pin/create/button/?url={{ URL::to('/post/' . $blog->slug) }}&description={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-pinterest pinta-share "></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- <div class="col-lg-3  align-middle">

                <div class="sidebar ">
                    <section class="bg-warning  p-5 mt-4">
                        <div class="container p-5">
                            For Ads
                        </div>
                    </section>
                    <br><br>

                </div>
            </div> --}}

        </div>
    </div>
    {{-- Section One End --}}
    <div class="container text-center p-5 headings">
        <h2>{{ $contents[2]['content'] }}</h2>
    </div>
    {{-- Section Two Start --}}
    <div class="container blog">
        <div class="row">
            {{-- <div class="col-lg-9   d-flex justify-content-center"> --}}
            <div class="col-lg-12   d-flex justify-content-center">
                <div class="row ">
                    @foreach ($categories as $key => $cat)
                        @if ($key === 2 || ($key === 3 && !$cat->blogs->isEmpty()))
                            <div class="col-lg-6 ">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('getCategorybySlug', $cat->category_slug) }}"
                                        style="text-decoration: none">
                                        <h3 class="d-inline-flex p-1 text-dark border border-dark rounded"
                                            style="font-size: 25px">{{ $cat->category_name }}</h3>
                                    </a>
                                </div>
                                <hr>
                                <div class="row ">
                                    @foreach ($cat->blogs->reverse()->take(2) as $key => $blog)
                                        <div class="col-md-6">
                                            <div class="card mb-4">
                                                <div class="hover-zoom"
                                                    onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">

                                                    <img data-original="{{ asset('image/' . $blog->thumbnail) }}"
                                                        alt="{{ $blog->imagealt }}"
                                                        class="card-img-top img-fluid img-responsive rounded-top">
                                                </div>
                                                <div class="card-body">
                                                    <a class="text-decoration-none"
                                                        href="{{ Route('getPostbySlug', $blog->slug) }}">
                                                        <h5 class="card-title text-center display-5 text-dark">
                                                            {!! Str::limit(strip_tags($blog->title), 60, $end = '..') !!}
                                                        </h5>
                                                    </a>

                                                    <div class="text-center">
                                                        <a class="pt-2 text-decoration-none text-center"
                                                            href="{{ Route('getPostbySlug', $blog->slug) }}"><span
                                                                class="border-2 btn readmore-btn btn-sm rounded-pill text-dark">
                                                                <b>To Read...</b>
                                                            </span></a>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-center sharebutton">
                                                        <div class="btn_wrap_share ">
                                                            <span class="spanCLass">Share</span>
                                                            <div class="containershare">
                                                                <a class="hoverZoom" aria-label="facebook"
                                                                    href="https://www.facebook.com/share.php?u={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-facebook-f fb-share">
                                                                    </i></a>

                                                                <a class="hoverZoom" aria-label="tweeter"
                                                                    href="https://twitter.com/intent/tweet?url={{ URL::to('/post/' . $blog->slug) }}&text={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements  fab fa-twitter twi-share"></i></a>

                                                                <a class="hoverZoom" aria-label="linkedin"
                                                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-linkedin  linkd-share"></i></a>
                                                                <a class="hoverZoom" aria-label="pinterest"
                                                                    href="http://pinterest.com/pin/create/button/?url={{ URL::to('/post/' . $blog->slug) }}&description={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-pinterest pinta-share "></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- <div class="col-lg-3  align-middle">
                <div class="sidebar ">
                    <section class="bg-warning  p-5 mt-4">
                        <div class="container p-5">
                            For Ads
                        </div>
                    </section>
                    <br><br>

                </div>
            </div> --}}

        </div>
    </div>
    {{-- Section Two End --}}
    {{-- Section Three Start --}}
    <div class="container blog">
        <div class="row">
            {{-- <div class="col-lg-9   d-flex justify-content-center"> --}}
            <div class="col-lg-12   d-flex justify-content-center">
                <div class="row ">
                    @foreach ($categories as $key => $cat)
                        @if ($key === 4 || ($key === 5 && !$cat->blogs->isEmpty()))
                            <div class="col-lg-6 ">
                                <div class="d-flex justify-content-center">

                                    <a href="{{ route('getCategorybySlug', $cat->category_slug) }}"
                                        style="text-decoration: none">
                                        <h3 class="d-inline-flex p-1 text-dark border border-dark rounded"
                                            style="font-size: 25px">{{ $cat->category_name }}</h3>
                                    </a>
                                </div>
                                <hr>
                                <div class="row ">
                                    @foreach ($cat->blogs->reverse()->take(2) as $key => $blog)
                                        <div class="col-md-6">
                                            <div class="card mb-4">

                                                <div class="hover-zoom"
                                                    onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">

                                                    <img data-original="{{ asset('image/' . $blog->thumbnail) }}"
                                                        alt="{{ $blog->imagealt }}"
                                                        class="card-img-top img-fluid img-responsive rounded-top">
                                                </div>
                                                <div class="card-body">
                                                    <a class="text-decoration-none"
                                                        href="{{ Route('getPostbySlug', $blog->slug) }}">
                                                        <h5 class="card-title text-center display-5 text-dark">
                                                            {!! Str::limit(strip_tags($blog->title), 60, $end = '..') !!}
                                                        </h5>
                                                    </a>

                                                    <div class="text-center">
                                                        <a class="pt-2 text-decoration-none text-center"
                                                            href="{{ Route('getPostbySlug', $blog->slug) }}"><span
                                                                class="border-2 btn readmore-btn btn-sm rounded-pill text-dark">
                                                                <b>To Read...</b>
                                                            </span></a>
                                                    </div>
                                                    
                                                    <hr>
                                                    <div class="d-flex justify-content-center sharebutton">
                                                        <div class="btn_wrap_share ">
                                                            <span class="spanCLass">Share</span>
                                                            <div class="containershare">
                                                                <a class="hoverZoom" aria-label="facebook"
                                                                    href="https://www.facebook.com/share.php?u={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-facebook-f fb-share">
                                                                    </i></a>

                                                                <a class="hoverZoom" aria-label="twittwer"
                                                                    href="https://twitter.com/intent/tweet?url={{ URL::to('/post/' . $blog->slug) }}&text={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements  fab fa-twitter twi-share"></i></a>

                                                                <a class="hoverZoom" aria-label="linkedin"
                                                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-linkedin  linkd-share"></i></a>
                                                                <a class="hoverZoom" aria-label="pinterest"
                                                                    href="http://pinterest.com/pin/create/button/?url={{ URL::to('/post/' . $blog->slug) }}&description={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-pinterest pinta-share "></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- <div class="col-lg-3  align-middle">

                <div class="sidebar ">
                    <section class="bg-warning  p-5 mt-4">
                        <div class="container p-5">
                            For Ads
                        </div>
                    </section>
                    <br><br>

                </div>
            </div> --}}

        </div>
    </div>
    {{-- Section Three End --}}

    {{-- Section Four Start --}}

    <div class="container blog">
        <div class="row">

            {{-- <div class="col-lg-9   d-flex justify-content-center"> --}}

            <div class="col-lg-12   d-flex justify-content-center">
                <div class="row ">
                    @foreach ($categories as $key => $cat)
                        @if ($key === 6 || ($key === 7 && !$cat->blogs->isEmpty()))
                            <div class="col-lg-6 ">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('getCategorybySlug', $cat->category_slug) }}"
                                        style="text-decoration: none">
                                        <h3 class="d-inline-flex p-1 text-dark border border-dark rounded"
                                            style="font-size: 25px">{{ $cat->category_name }}</h3>
                                    </a>
                                </div>
                                <hr>
                                <div class="row ">
                                    @foreach ($cat->blogs->reverse()->take(2) as $key => $blog)
                                        <div class="col-md-6">
                                            <div class="card mb-4">

                                                <div class="hover-zoom"
                                                    onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">

                                                    <img data-original="{{ asset('image/' . $blog->thumbnail) }}"
                                                        alt="{{ $blog->imagealt }}"
                                                        class="card-img-top img-fluid img-responsive rounded-top">
                                                </div>
                                                <div class="card-body">
                                                    <a class="text-decoration-none"
                                                        href="{{ Route('getPostbySlug', $blog->slug) }}">
                                                        <h5 class="card-title text-center display-5 text-dark">
                                                            {!! Str::limit(strip_tags($blog->title), 60, $end = '..') !!}
                                                        </h5>
                                                    </a>

                                                    <div class="text-center">
                                                        <a class="pt-2 text-decoration-none text-center"
                                                            href="{{ Route('getPostbySlug', $blog->slug) }}"><span
                                                                class="border-2 btn readmore-btn btn-sm rounded-pill text-dark">
                                                                <b>To Read...</b>
                                                            </span></a>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-center sharebutton">
                                                        <div class="btn_wrap_share ">
                                                            <span class="spanCLass">Share</span>
                                                            <div class="containershare">
                                                                <a class="hoverZoom" aria-label="facebook"
                                                                    href="https://www.facebook.com/share.php?u={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-facebook-f fb-share">
                                                                    </i></a>

                                                                <a class="hoverZoom" aria-label="twitter"
                                                                    href="https://twitter.com/intent/tweet?url={{ URL::to('/post/' . $blog->slug) }}&text={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements  fab fa-twitter twi-share"></i></a>

                                                                <a class="hoverZoom" aria-label="linkedin"
                                                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-linkedin  linkd-share"></i></a>
                                                                <a class="hoverZoom" aria-label="pinterest"
                                                                    href="http://pinterest.com/pin/create/button/?url={{ URL::to('/post/' . $blog->slug) }}&description={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-pinterest pinta-share "></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- <div class="col-lg-3  align-middle">
                <div class="sidebar ">
                    <section class="bg-warning  p-5 mt-4">
                        <div class="container p-5">
                            For Ads
                        </div>
                    </section>
                    <br><br>

                </div>
            </div> --}}

        </div>
    </div>
    {{-- Section Four end --}}


    {{-- Section Five Start --}}

    <div class="container blog">
        <div class="row">
            {{-- <div class="col-lg-9   d-flex justify-content-center"> --}}
            <div class="col-lg-12   d-flex justify-content-center">
                <div class="row ">
                    @foreach ($categories as $key => $cat)
                        @if ($key === 8 || ($key === 9 && !$cat->blogs->isEmpty()))
                            <div class="col-lg-6 ">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('getCategorybySlug', $cat->category_slug) }}"
                                        style="text-decoration: none">
                                        <h3 class="d-inline-flex p-1 text-dark border border-dark rounded"
                                            style="font-size: 25px">{{ $cat->category_name }}</h3>
                                    </a>
                                </div>
                                <hr>
                                <div class="row ">
                                    @foreach ($cat->blogs->reverse()->take(2) as $key => $blog)
                                        <div class="col-md-6">
                                            <div class="card mb-4">

                                                <div class="hover-zoom"
                                                    onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">

                                                    <img data-original="{{ asset('image/' . $blog->thumbnail) }}"
                                                        alt="{{ $blog->imagealt }}"
                                                        class="card-img-top img-fluid img-responsive rounded-top">
                                                </div>
                                                <div class="card-body">
                                                    <a class="text-decoration-none"
                                                        href="{{ Route('getPostbySlug', $blog->slug) }}">
                                                        <h5 class="card-title text-center display-5 text-dark">
                                                            {!! Str::limit(strip_tags($blog->title), 60, $end = '..') !!}
                                                        </h5>
                                                    </a>

                                                    <div class="text-center">
                                                        <a class="pt-2 text-decoration-none text-center"
                                                            href="{{ Route('getPostbySlug', $blog->slug) }}"><span
                                                                class="border-2 btn readmore-btn btn-sm rounded-pill text-dark">
                                                                <b>To Read...</b>
                                                            </span></a>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-center sharebutton">
                                                        <div class="btn_wrap_share ">
                                                            <span class="spanCLass">Share</span>
                                                            <div class="containershare">
                                                                <a class="hoverZoom" aria-label="facebook"
                                                                    href="https://www.facebook.com/share.php?u={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-facebook-f fb-share">
                                                                    </i></a>

                                                                <a class="hoverZoom" aria-label="twitter"
                                                                    href="https://twitter.com/intent/tweet?url={{ URL::to('/post/' . $blog->slug) }}&text={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements  fab fa-twitter twi-share"></i></a>

                                                                <a class="hoverZoom" aria-label="linkedin"
                                                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-linkedin  linkd-share"></i></a>
                                                                <a class="hoverZoom" aria-label="pinterest"
                                                                    href="http://pinterest.com/pin/create/button/?url={{ URL::to('/post/' . $blog->slug) }}&description={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-pinterest pinta-share "></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            {{--             
            <div class="col-lg-3  align-middle">
                <div class="sidebar ">
                    <section class="bg-warning  p-5 mt-4">
                        <div class="container p-5">
                            For Ads
                        </div>
                    </section>
                    <br><br>

                </div>
            </div> --}}

        </div>
    </div>
    {{-- Section Five end --}}


    {{-- Section Six Start --}}

    <div class="container blog">
        <div class="row">
            {{-- <div class="col-lg-9 d-flex justify-content-center"> --}}

            <div class="col-lg-12 d-flex justify-content-center">
                <div class="row ">
                    @foreach ($categories as $key => $cat)
                        @if ($key === 10 || ($key === 11 && !$cat->blogs->isEmpty()))
                            <div class="col-lg-6 ">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('getCategorybySlug', $cat->category_slug) }}"
                                        style="text-decoration: none">
                                        <h3 class="d-inline-flex p-1 text-dark border border-dark rounded"
                                            style="font-size: 25px">{{ $cat->category_name }}</h3>
                                    </a>
                                </div>
                                <hr>
                                <div class="row ">
                                    @foreach ($cat->blogs->reverse()->take(2) as $key => $blog)
                                        <div class="col-md-6">
                                            <div class="card mb-4">
                                                <div class="hover-zoom"
                                                    onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">

                                                    <img data-original="{{ asset('image/' . $blog->thumbnail) }}"
                                                        alt="{{ $blog->imagealt }}"
                                                        class="card-img-top img-fluid img-responsive rounded-top">
                                                </div>
                                                <div class="card-body">
                                                    <a class="text-decoration-none"
                                                        href="{{ Route('getPostbySlug', $blog->slug) }}">
                                                        <h5 class="card-title text-center display-5 text-dark">
                                                            {!! Str::limit(strip_tags($blog->title), 60, $end = '..') !!}
                                                        </h5>
                                                    </a>

                                                    <div class="text-center">
                                                        <a class="pt-2 text-decoration-none text-center"
                                                            href="{{ Route('getPostbySlug', $blog->slug) }}"><span
                                                                class="border-2 btn readmore-btn btn-sm rounded-pill text-dark">
                                                                <b>To Read...</b>
                                                            </span></a>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-center sharebutton">
                                                        <div class="btn_wrap_share ">
                                                            <span class="spanCLass">Share</span>
                                                            <div class="containershare">
                                                                <a class="hoverZoom" aria-label="facebook"
                                                                    href="https://www.facebook.com/share.php?u={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-facebook-f fb-share">
                                                                    </i></a>

                                                                <a class="hoverZoom" aria-label="twitter"
                                                                    href="https://twitter.com/intent/tweet?url={{ URL::to('/post/' . $blog->slug) }}&text={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements  fab fa-twitter twi-share"></i></a>

                                                                <a class="hoverZoom" aria-label="linkedin"
                                                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-linkedin  linkd-share"></i></a>
                                                                <a class="hoverZoom" aria-label="pinterest"
                                                                    href="http://pinterest.com/pin/create/button/?url={{ URL::to('/post/' . $blog->slug) }}&description={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-pinterest pinta-share "></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- <div class="col-lg-3  align-middle">
                <div class="sidebar ">
                    <section class="bg-warning  p-5 mt-4">
                        <div class="container p-5">
                            For Ads
                        </div>
                    </section>
                    <br><br>

                </div>
            </div> --}}

        </div>
    </div>
    {{-- Section Six end --}}
    <div class="container text-center  p-5">
        <h3>{{ $contents[3]['content'] }}</h3>
    </div>
    {{-- Section Seven Start --}}
    <div class="container blog" style="margin-top:20px;margin-bottom:20px">
        <div class="row">
            {{-- <div class="col-lg-9   d-flex justify-content-center"> --}}

            <div class="col-lg-12   d-flex justify-content-center">
                <div class="row ">
                    @foreach ($categories as $key => $cat)
                        @if ($key === 12 || ($key === 13 && !$cat->blogs->isEmpty()))
                            <div class="col-lg-6 ">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('getCategorybySlug', $cat->category_slug) }}"
                                        style="text-decoration: none">
                                        <h3 class="d-inline-flex p-1 text-dark border border-dark rounded"
                                            style="font-size: 25px">{{ $cat->category_name }}</h3>
                                    </a>
                                </div>
                                <hr>
                                <div class="row ">
                                    @foreach ($cat->blogs->reverse()->take(2) as $key => $blog)
                                        <div class="col-md-6">
                                            <div class="card mb-4">

                                                <div class="hover-zoom"
                                                    onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">

                                                    <img data-original="{{ asset('image/' . $blog->thumbnail) }}"
                                                        alt="{{ $blog->imagealt }}"
                                                        class="card-img-top img-fluid img-responsive rounded-top">
                                                </div>
                                                <div class="card-body">
                                                    <a class="text-decoration-none"
                                                        href="{{ Route('getPostbySlug', $blog->slug) }}">
                                                        <h5 class="card-title text-center display-5 text-dark">
                                                            {!! Str::limit(strip_tags($blog->title), 60, $end = '..') !!}
                                                        </h5>
                                                    </a>

                                                    <div class="text-center">
                                                        <a class="pt-2 text-decoration-none text-center"
                                                            href="{{ Route('getPostbySlug', $blog->slug) }}"><span
                                                                class="border-2 btn readmore-btn btn-sm rounded-pill text-dark">
                                                                <b>To Read...</b>
                                                            </span></a>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-center sharebutton">
                                                        <div class="btn_wrap_share ">
                                                            <span class="spanCLass">Share</span>
                                                            <div class="containershare">
                                                                <a class="hoverZoom" aria-label="facebook"
                                                                    href="https://www.facebook.com/share.php?u={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-facebook-f fb-share">
                                                                    </i></a>

                                                                <a class="hoverZoom" aria-label="twitter"
                                                                    href="https://twitter.com/intent/tweet?url={{ URL::to('/post/' . $blog->slug) }}&text={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements  fab fa-twitter twi-share"></i></a>

                                                                <a class="hoverZoom" aria-label="linkedin"
                                                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ URL::to('/post/' . $blog->slug) }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-linkedin  linkd-share"></i></a>
                                                                <a class="hoverZoom" aria-label="pinterest"
                                                                    href="http://pinterest.com/pin/create/button/?url={{ URL::to('/post/' . $blog->slug) }}&description={{ $blog->title }}"
                                                                    target="_blank"><i
                                                                        class="sharElements fab fa-pinterest pinta-share "></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- <div class="col-lg-3  align-middle">

                <div class="sidebar ">
                    <section class="bg-warning  p-5 mt-4">
                        <div class="container p-5">
                            For Ads
                        </div>
                    </section>
                    <br><br>

                </div>
            </div> --}}

        </div>
    </div>
    {{-- Section Seven end --}}

    <div class="container">
        <h3 class="d-inline-flex p-1 text-dark border border-dark rounded" style="font-size: 25px">Trending Post</h3>
        <hr>
        <div class="row">
            <div class="col-lg-9">

                <div class="owl-carousel owl-theme">
                    @foreach ($categories as $key => $cat)
                        @if (!$cat->blogs->isEmpty())
                            <div class="item">
                                @foreach ($cat->blogs->random(1) as $key => $blog)
                                    <div class="card mb-4">
                                        <div class=" containerImage"
                                            onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">
                                            <img data-original="{{ asset('image/' . $blog->thumbnail) }}"
                                                alt="{{ $blog->imagealt }}"
                                                class="card-img-top img-fluid img-responsive rounded-top">
                                            <a class="top-left"
                                                href="{{ route('getCategorybySlug', $cat->category_slug) }}">{{ $cat->category_name }}</a>
                                            {{-- <div class="top-left"> </div> --}}
                                        </div>
                                        <div class="card-body">


                                            <h5 class="card-title text-center display-5">{!! Str::limit(strip_tags($blog->title), 60, $end = '..') !!}</h5>
                                            <div class="text-center">
                                                <a class="pt-2 text-decoration-none text-center"
                                                    href="{{ Route('getPostbySlug', $blog->slug) }}"><span
                                                        class="border-2 readmore-btn  btn-sm rounded-pill text-dark ">Read
                                                        More...</span></a>
                                            </div>
                                            <hr>
                                            <div style="padding: 20px">
                                                <div class="share-button">
                                                    <div class="share-button__back">
                                                        <a class="share__link fShare" aria-label="facebook"
                                                            href="https://www.facebook.com/share.php?u={{ URL::to('/post/' . $blog->slug) }}"><i
                                                                class="d-flex justify-content-center fab fa-facebook-f">
                                                            </i></a>
                                                        <a class="share__link fShare" aria-label="twitter"
                                                            href="https://twitter.com/intent/tweet?url={{ URL::to('/post/' . $blog->slug) }}&text={{ $blog->title }}">
                                                            <i class="d-flex justify-content-center  fab fa-twitter">
                                                            </i></a>
                                                        <a class="share__link fShare" aria-label="linkedin"
                                                            href="https://www.linkedin.com/sharing/share-offsite/?url={{ URL::to('/post/' . $blog->slug) }}"><i
                                                                class="d-flex justify-content-center fab fa-linkedin"> </i>
                                                        </a>
                                                        <a class="share__link fShare" aria-label="pinterest"
                                                            href="http://pinterest.com/pin/create/button/?url={{ URL::to('/post/' . $blog->slug) }}&description={{ $blog->title }}"><i
                                                                class="d-flex justify-content-center fab fa-pinterest">
                                                            </i> </a>
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
                            @foreach ($blogs as $blog)
                                <div class="post-item"
                                    onclick="location.href='{{ Route('getPostbySlug', $blog->slug) }}';">

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
