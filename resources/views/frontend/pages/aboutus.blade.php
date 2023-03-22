@extends('frontend/layout/app')
@section('seo')
    <title>About us | Wiki Learns | Multi Niche Blogging Platform</title>
    <meta name="description" content="Wiki learns she is an excellent multi niche blogging platform that covers several popular niches you badly need. Read on to learn about us.">
    <meta name="keywords" content="About us">
    <meta name="author" content="Khan Rafaat">
    <meta property="og:site_name" content="WiKiLearns"/>
    <meta property="og:title" content="Be a writer | Write for us"/>
    <meta property="og:description" content="Wiki learns she is an excellent multi niche blogging platform that covers several popular niches you badly need. Read on to learn about us." />
    <meta property="og:image" content="" />
    <meta property="og:url" content="https://www.wikilearns.com/contact-us" />
    <meta property="og:type" content="article" />
@endsection
@section('frontbody')
    <style>
        .about {
            cursor: pointer;
            background-color: white;
            color: black;
            padding-top: 100px;
            padding-bottom: 30px;

        }

        .about h1 {
            padding: 10px 0;
            margin-bottom: 20px;
        }

        .about h2 {
            opacity: .8;
        }

        .about span {
            display: block;
            width: 100px;
            height: 100px;
            line-height: 100px;
            margin: auto;
            border-radius: 50%;
            font-size: 40px;
            color: black;
            opacity: 0.7;
            background-color: rgb(147, 147, 147);
            border: 2px solid white;

            webkit-transition: all .5s ease;
            moz-transition: all .5s ease;
            os-transition: all .5s ease;
            transition: all .5s ease;

        }

        .about-item:hover span {
            opacity: 1;
            border: 2px solid white;
            font-size: 42px;
            -webkit-transform: scale(1.1, 1.1) rotate(360deg);
            -moz-transform: scale(1.1, 1.1) rotate(360deg);
            -o-transform: scale(1.1, 1.1) rotate(360deg);
            transform: scale(1.1, 1.1) rotate(360deg);
        }

        .about-item:hover h2 {
            opacity: 1;
            -webkit-transform: scale(1.1, 1.1);
            -moz-transform: scale(1.1, 1.1);
            -o-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
        }

        .about .lead {
            color: black;
            font-size: 14px;
            font-weight: bold;
            text-align: justify;
        }
        /* style="border:solid 1px black;border-radius:20px;margin:2px" */
    </style>

    <section class="text-center about">
        <h1 style="padding: 30px">About Us | Wiki Learns </h1>
        <div class="container">
            <div class="d-flex justify-content-center">
                <h5 class="lead " style="width: 50%;padding:10px">
                    "Wiki Learns" is a popular multiniche blogging platform worldwide. We write about our experiences and
                    share them with visitors. It is one of the fastest-growing multi-blogging platforms that will cover the
                    necessary topics like photography, art, design, trendy news, graphic design, business, health, food,
                    travel, etc. We have an experienced research team, and they are working 24/7.
                </h5>
            </div>

            <div class="row py-5">

                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200" >
                    <span class="fa fa-info"></span>
                    <h2>Our mission</h2>
                    <p class="lead">We aim to develop a knowledge-based society. That's why we are researching various
                        niches and sharing information with a large community. We believe in the motto "Sharing is caring."
                        Our mission is to grow the team as large as possible and write in several niches.
                        The research team is constantly working on several previously unexplored niches. It is becoming a
                        matter of pride for us to enlighten the world. We will quench the unquenchable thirst for knowledge.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
                    <span class="fa fa-group"></span>
                    <h2>Visual Texture</h2>
                    <p class="lead">We promote the content in a good way. You will find infographics, text, videos, and
                        interactive designs here. You will never get bored on this platform.
                    </p>
                </div>
                {{-- <div class="clearfix visible-md-block visible-sm-block"></div> --}}
                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
                    <span class="fa fa-eye"></span>
                    <h2>Our vision
                    </h2>
                    <p class="lead">
                        We want to share happiness and knowledge worldwide. Those who like to learn about technology, art,
                        design, photography, the latest trending news, etc., are invited to stay with us and share their
                        views around the globe. We aim to serve millions of people worldwide by sharing authentic
                        information. "Wiki Learns" is the fastest-growing website, and hopefully, within the next five
                        years, we will reach millions of readers worldwide.
                    </p>
                </div>

                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
                    <span class="fa fa-pencil-square-o"></span>
                    <h2>Writing and research team
                    </h2>
                    <p class="lead">
                        We have a strong writing and research team that is working 24/7. Besides that, there is a strong
                        digital marketing team too. They will promote our content on multiple platforms. Be a writer, and
                        you can promote your content too. Our research team will find the most interesting topics around us,
                        and the writing team will solve them later.

                      <b>"Wiki Learns"</b> has expertise in research, problem-solving, and writing. We currently have a <b>team of
                        30 members</b> , and we should increase it soon.


                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
                    <span class="fa fa-globe"></span>
                    <h2>Our Social Media Presence
                    </h2>
                    <p class="lead">
                        "Wiki Learns" is active on different social platforms, and you can contact us here. The most popular
                        platforms are Facebook, Twitter, LinkedIn, Pinterest, Quora, Tumblr, etc. Do you want to contact us?
                        Send them through mail at info @ wikilearns.com. Besides that, you can contact us through our
                        Facebook page instantly. We like to hear from you.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
                    <span class="fa fa-certificate"></span>
                    <h2>Our Trust Badges
                    </h2>
                    <p class="lead">
                        Our content writing team has gained trust badges from users worldwide who loved the performances. It
                        is a resourceful blog, and people love it. Thousands of users worldwide just loved our platform and
                        kept faith in us. Several university professors around the world write our health and business
                        blogs. We verify the information and sources several times and eventually publish them on our
                        platform.
                    </p>
                </div>

            </div>

        </div>
    </section>
@endsection
