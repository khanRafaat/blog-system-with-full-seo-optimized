@extends('frontend/layout/app')
@section('seo')
    <title>Be a writer | Write for us</title>
    <meta name="description" content="Be a writer for “Wikilearns” and enjoy a great platform to showcase your talent to the world. It will be fun to have her write for us. ">
    <meta name="keywords" content="Write for us">
    <meta name="author" content="Khan Rafaat">
    <meta property="og:site_name" content="WiKiLearns"/>
    <meta property="og:title" content="Be a writer | Write for us"/>
    <meta property="og:description" content="Be a writer for “Wikilearns” and enjoy a great platform to showcase your talent to the world. It will be fun to have her write for us. " />
    <meta property="og:image" content="" />
    <meta property="og:url" content="https://www.wikilearns.com/be-a-writer" />
    <meta property="og:type" content="article" />
@endsection
@section('frontbody')
    <style>
        .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .social-link:hover,
        .social-link:focus {
            background: #ddd;
            text-decoration: none;
            color: #555;
        }


        .mbg {
            background-color: #212966;

        }

        .mfont {
            text-align: justify;
            color: #FFF;
            font-family: "Montserrat", Sans-serif;
            font-size: 1.4em;
            font-weight: 300;
            line-height: 1.3em;
            text-shadow: 5px 5px 4px rgb(0 0 0 / 50%);
        }

        /* FAQ */
        
.panel-default>.panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #e4e5e7;
  padding: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.panel-default>.panel-heading a {
  display: block;
  padding: 10px 15px;
}

.panel-default>.panel-heading a:after {
  content: "";
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  float: right;
  transition: transform .25s linear;
  -webkit-transition: -webkit-transform .25s linear;
}

.panel-default>.panel-heading a[aria-expanded="true"] {
  background-color: #eee;
}

.panel-default>.panel-heading a[aria-expanded="true"]:after {
  content: "\2212";
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.panel-default>.panel-heading a[aria-expanded="false"]:after {
  content: "\002b";
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.accordion-option {
  width: 100%;
  float: left;
  clear: both;
  margin: 15px 0;
}

.accordion-option .title {
  font-size: 20px;
  font-weight: bold;
  float: left;
  padding: 0;
  margin: 0;
}

.accordion-option .toggle-accordion {
  float: right;
  font-size: 16px;
  color: #6a6c6f;
}

.accordion-option .toggle-accordion:before {
  content: "Expand All";
}

.accordion-option .toggle-accordion.active:before {
  content: "Collapse All";
}
ul li{
    font-size: 15px;
}
    </style>

    <div class="mbg" style="padding-top:150px;">
        <div class="container py-5">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-white mb-5">Be a Writer | Write for US</h1>
                    <h3 class="text-white">“Wiki Learns” is a popular blogging platform, and as a guest writer, you can write
                        for us. We accept content in several niches. However, your content must meet our community
                        standards.</h3>
                    <br>
                    <p class="lead text-white">
                        “Wiki Learns” is a popular blogging platform, and as a guest writer, you can write for us. We accept
                        content in several niches. However, your content must meet our community standards.

                        The topic we accept | Write for a multi-niche
                    <ul class="text-white" >
                        <li>
                            Trending News
                        </li>
                        <li>
                            Reviews & Buying Guide
                        </li>
                        <li>
                            Technology & tricks tutorial
                        </li>
                        <li>
                            Fashion & Lifestyle
                        </li>
                        <li>
                            Photography
                        </li>
                        <li>
                            Media & Entertainment
                        </li>
                        <li>
                            Science & Technology
                        </li>
                        <li>
                            Business & Finance
                        </li>
                        <li>
                            Pet & Animal
                        </li>
                        <li>
                            Health & Fitness
                        </li>
                        <li>
                            Sports & Outdoor activities
                        </li>
                        <li>
                            Food & Travel
                        </li>
                        <li>
                            Education & career
                        </li>
                        <li>
                            Graphic design
                        </li>


                    </ul>

                    <p class="text-white">We are constantly looking for new contributors worldwide. If you aim to challenge
                        our industry and move
                        forward with a good motto, we must listen to you. You can provide the readers with a fresh new idea
                        that
                        will enhance their knowledge as well as open up a new era of knowledge. We like to enlighten our
                        readers
                        as well as the nation. Be part of this great journey!!</p>

                    </p>
                    <br>

                </div>
                <div class="col-lg-6 d-none d-lg-block"><img src="{{asset('image/static/bewriter1.webp')}}"
                        alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>

    <div class="mbg ">
        <div class="container">
    
            <div class="row">
                <div class="col-lg-5 text-center" >
                    <img  class=" d-none d-lg-block"  src="{{asset('image/static/bewriter2.webp')}}" 
                        alt="" >
                </div>

                <div class="col-lg-7">
                    <i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                    <h1 class="text-white" style="font-size:45px;">General Article Submission guidelines
                        that you need to follow</h1>

                    <p class="mfont text-white">

                    <div class="text-white">
                        <h4 style="color:#DFC7DA">Word Limit</h4>
                        <p style="font-weight: 500">We accept guest posts of 1500 to 2000 words. However, the content must
                            be unique and fulfill the
                            tastes of the users. We suggest you write content that is helpful for the users. If you are
                            helping the community, they will send back the love.
                        </p>
                    </div>

                    <div class="text-white">
                        <h4 style="color:#DFC7DA">Image</h4>
                        <p style="font-weight: 500">The images must be distinct and relevant to the content. We do not
                            accept any low-quality images on our blog. If you can create an image for us that would be
                            excellent.
                        </p>
                    </div>

                    <div class="text-white">
                        <h4 style="color:#DFC7DA">Video</h4>
                        <p style="font-weight: 500">If you'd like to embed any YouTube video link to the content, that would
                            be fine. However, it must be related to the topic and fulfill the user's demand.
                        </p>
                    </div>


                    <div class="text-white">
                        <h4 style="color:#DFC7DA">Animation/ GIF images</h4>
                        <p style="font-weight: 500">If you'd like to add an animation or GIF image to the content, that
                            would be excellent. We always appreciate creative people and like to learn from them.
                        </p>
                    </div>

                    <div class="text-white">
                        <h4 style="color:#DFC7DA">Plagiarism checker</h4>
                        <p style="font-weight: 500">The content must be 100% unique and user-friendly. We do not accept any
                            plagiarized content.
                        </p>
                    </div>

                    <div class="text-white">
                        <h4 style="color:#DFC7DA">Readability Score</h4>
                        <p style="font-weight: 500">You need to check and double-check the readability score of your
                            content. Do not try to use too many complex sentences. Write in a simple way so that everybody
                            can understand what you are saying.
                    </div>

                    <div class="text-white">
                        <h4 style="color:#DFC7DA">Grammarly Checking</h4>
                        <p style="font-weight: 500">Check your Grammarly score before submitting the content. It should not
                            contain any grammar errors.
                        </p>
                    </div>

                    <div class="text-white">
                        <h4 style="color:#DFC7DA">Promotion / Advertisement</h4>
                        <p style="font-weight: 500">We will not accept anything that directly promotes a product. Depending
                            on the circumstances, (Blog Name) accept one or two backlinks. You can use a contextual link or
                            an
                            author bio link. We will never accept anything related to <b style="color: yellow">(Adult,
                                Gambling, Betting
                                Drug-related content, etc.)</b>
                        </p>
                    </div>


                    </p>
                    <br>

                </div>

            </div>
        </div>
    </div>


    <div class="mbg" style="">
        <div class="container py-2">
            <div class="row h-100 align-items-center py-1">
                <div class="col-lg-6">

                    <h3 class="text-white">Why you should submit content to our platform? </h3>
                    <br>
                    <p class="lead text-white">
                        We are the fastest-growing multi-niche blogging platform presently. We submit daily content and the
                        growth rate of our site is excellent. If you submit any content here that will certainly increase
                        the brand value of your institution. Let me tell you some of the key factors that you need to
                        consider.</p>
                    <ul class="text-white">
                        <li>
                            1 dofollow link for the lifetime.
                        </li>
                        <li>
                            Instant post-indexing facilities

                        </li>
                        <li>
                            You can earn some referral traffic

                        </li>
                        <li>
                            By posting your content definitely, you can improve the ranking in SERP.

                        </li>
                        <li>
                            We share content on different platforms that will create additional brand value.

                        </li>
                    </ul>
                    <br>

                    <h3 class="text-white">Who can submit content on our platform? </h3>
                    <br>
                    <p class="lead text-white">
                        Anyone can write on our platform. We welcome all. However, it must need to maintain all the
                        standards that we discussed above. Specially we take content from </p>
                    <ul class="text-white">
                        <li>
                            A blogger
                        </li>
                        <li>
                            Writer
                        </li>
                        <li>
                            Publisher
                        </li>
                        <li>
                            Ecommerce owners
                        </li>
                        <li>
                            Magazine owners, etc.
                        </li>
                    </ul>
                    <br>
                </div>
                <div class="col-lg-6 d-none d-lg-block"><img src="{{asset('image/static/bewriter3.webp')}}"
                        alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>

    <div class="mbg" style="">
        <div class="container py-5">
            <div class="row h-100 align-items-center py-1">
                <div class="col-lg-6">
                    
                    <img src="{{asset('image/static/bewriter4.webp')}}"
                    alt="" class="img-fluid d-none d-lg-block">

                  
                    <br>
                    <br>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <h3 class="text-white">How do you find us?</h3>
                    <br>
                    <p class="lead text-white">
                        You can easily search through these queries and easily find us from different search engines. It’s
                        an easy process that you might follow.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <ul class="text-white">
                                <li>“Trending” ” Write for us”</li>
                                <li>“Trending “ Guest Author</li>
                                <li>“Trending” Guest Post </li>
                                <li>“Reviews” “write for us”</li>
                                <li>“Reviews” Guest Author</li>
                                <li>“Reviews” Guest Post </li>
                                <li>“Photography” “write for us”</li>
                                <li>“Photography” Guest Author</li>
                                <li>“Photography” Guest Post</li>
                                <li>“Art” “write for us”</li>
                                <li>“Art” Guest Author</li>
                                <li>“Art” Guest Post</li>
                                <li>“Tech” “write for us”</li>
                                <li>“Tech” Guest Author</li>
                                <li>“Tech” Guest Post</li>
                                <li>“Fashion” “write for us”</li>
                                <li>“Fashion” Guest Author</li>
                                <li>“Fashion” Guest Post</li>
                                <li>“Entertainment” “write for us”</li>
                                <li>“Entertainment” Guest Author</li>
                                <li>“Entertainment” Guest Post</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="text-white">
                                <li>“Technology” “write for us”</li>
                                <li>“Technology” Guest Author</li>
                                <li>“Technology” Guest Post</li>
                                <li>“Business” “write for us”</li>
                                <li>“Business ” Guest Author</li>
                                <li>“Business ” Guest Post</li>
                                <li>“Animals” “write for us”</li>
                                <li>“Animals ” Guest Author</li>
                                <li>“Animals” Guest Post</li>
                                <li>“Fitness” “write for us”</li>
                                <li>“Fitness ” Guest Author</li>
                                <li>“Fitness” Guest Post</li>
                                <li>“Sports” “write for us”</li>
                                <li>“Sports ” Guest Author</li>
                                <li>“Sports” Guest Post</li>
                                <li>“Food” “write for us”</li>
                                <li>“Food ” Guest Author</li>
                                <li>“Food” Guest Post</li>
                                <li>“Education” “write for us”</li>
                                <li>“Education ” Guest Author</li>
                                <li>“Education” Guest Post</li>
                            </ul>
                        </div>
                    </div> 
                    
                    </div>
            </div>
        </div>
    </div>
    <div class="mbg">
        <div class="d-flex justify-content-center">
            <a class="btn btn-large btn-success my-3 mb-5" href="{{route('bewriter.info')}}" style="padding-left: 30px;padding-right:30px;text-decoration:none">
                Sign up to our be a Writer Program
            </a>
        </div>
    </div>
    <div class="mbg" style="padding-bottom: 100px;">
        <div class="row">
            <div class="col-md-12 text-center  ">
                <h3 class="text-white" style="margin-bottom: 50px">FAQ : Be a Writer | Write for US</h3>



                <div class="container" style="width: 40%">
                 
                    <div class="clearfix"></div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne"  >
                          <h4 class="panel-title" >
                            <a style="background: #0F5CC7!important;color:whitesmoke!important;text-decoration:none" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How long does it take to publish content?
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body bg-white p-3" style="font-size: 18px">
                            Well, usually we take 7-15 days to publish content on our platform. It might be less than
                                that or take some extra time depending on the situation.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a style="background: #0F5CC7!important;color:whitesmoke!important;text-decoration:none" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Do you always accept free guest posts?
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body bg-white  p-3" style="font-size: 18px">
                            Most of the time we accept free
                                guest posts.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a style="background: #0F5CC7!important;color:whitesmoke!important;text-decoration:none" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Do you strictly maintain the content quality?
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body bg-white  p-3" style="font-size: 18px">
                            Yes, obviously. We do not compromise on content quality. It must have to maintain all our
                                conditions.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
    @endsection
    @section('script')

    @endsection