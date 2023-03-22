@extends('frontend/layout/app')
@section('seo')
    <title>Advertisement | Wikilearns | Blogging platform</title>
    <meta name="description"
        content="WikiLearns, a popular blogging platform, offers its visitors the option of viewing third-party advertisements here.You can promote your brand here.">
    <meta name="author" content="Be a Writer || WiKi Learns">
    <meta name="keywords" content="Advertisement Policy">
    <meta property="og:site_name" content="Wiki Learn" />
    <meta property="og:site" content="https://www.wikilearn.com" />
    <meta property="og:title" content="Advertisement | Wikilearns | Blogging platform" />
    <meta property="og:description"
        content="WikiLearns, a popular blogging platform, offers its visitors the option of viewing third-party advertisements here.You can promote your brand here." />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="article" />
@endsection
@section('frontbody')
    <!-- start privacy policy -->
    <style>
        /* h1, h2, h3,h4, h5, h6, p, span{
            color: white;
        } */
    </style>

    <div class="container-fluid " style="padding-top:100px;">
        <div class="row p-5">
            <div class="card" style="background-color:  rgb(196, 194, 194);border-radius: 2px 110px !important; padding:0px 20px;">
                <div class="card-header text-center" style="border-radius: 2px 110px !important">
                    <h1 class="text-center">Advertisement with WikiLearns </h1>

                    <p>
                        As a third-party owner, you can easily publish your company advertisement on our platform. We will
                        allow that after completing the payment. Here we are providing some rules and regulations for the
                        advertisement.
                    </p>
                </div>
                <div class="card-body P-5">
                    <h3 class="card-title">“Wiki Learns” is a multi niche blogging platform and we are focusing on
                    </h3>
                    <p class="card-text P-3">
                    <ul>
                        <li>Trending & News</li>
                        <li>Reviews & Buying Guide</li>
                        <li>Photography</li>
                        <li>Tech & Tricks:Tutorial</li>
                        <li>Fashion & Lifestyle</li>
                        <li>Media & Entertainment</li>
                        <li>Science & Technology</li>
                        <li>Business & Finance</li>
                        <li>Pet & Animels</li>
                        <li>Health & Fitness</li>
                        <li>Sports & Outdoor</li>
                        <li>Food & Travel</li>
                    </ul>
                    <p>So, if you are working on any of these niches feel free to contact with us for swapping an article or
                        advertise your brand here.</p>
                    </p>
                    <h3 class="card-title">Who are eligible to publish an advertisement here
                    </h3>
                    <p class="card-text p-3">
                    <h6> Ecommerce site owner</h6>
                    <p>If you are an eCommerce site owner and want to promote your platform, you can easily choose “Wiki
                        Learns.” Wiki Learns is a popular multi-niche blogging platform that serves users by sharing
                        necessary information regarding photography, trending news, viral news, technology, health,
                        business, etc.
                        You can provide your advertisement in our header, footer, or side banner. To do that, you need to
                        contact us through mail <b>at info@wikiwriters.com. We discuss the payments in the mail.</b>

                    </p>
                    <h6>Blog owner </h6>
                    <p>
                        Contact us if you are a blog owner like us and want to promote your blog on our platform. We always
                        appreciate new bloggers coming to our platform and increasing their visibility.

                    </p>
                    <h6>News Site </h6>
                    <p>
                        We also welcome promoting your newly created news site. Just visit our site and contact us. You can
                        advertise in the header section, footer, or within the content. We also allow the fixed sidebar
                        advertisement for a fixed time. This time, we will charge something more. You can contact us through
                        the mail.
                    </p>
                    <h6>Forum platform </h6>
                    <p>
                        We also promote different types of forums on our platform. You can place your forum advertisement daily, weekly, and monthly. 

                    </p>

                    <h6>Sizes & Example </h6>
                    <p>
                        Mostly we use a vertical banner that is 160px by 600px. We also publish different types of horizontal banners on our platform. We use them on the side banner. The billboard banner would be 970*250 pixels. 

                        We will also provide you with a portrait banner that is 300*1050. 
                        <br>
                        <br>
                        <span class="text-danger">N.B: We do not allow any marketing banner that is related to 18+ content</span>
                        
                    </p>
                    <h6>Payment Method  </h6>
                    <p>
                        We accept all payment methods, including PayPal, Payoneer, bank transfer, Visa & Master card payment. 
                    </p>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- end privacy policy -->
@endsection
