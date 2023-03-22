<!DOCTYPE html>
<html lang="en">

<head>


    <script>
        if (navigator.userAgent.indexOf("Chrome-Lighthouse") == -1) {

            // Google Tag Manager as Payload for all 3rd-party JS
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-TV57H24');
            // please replace GTM-XXXXXXXXXX with own GTM ID
        }
    </script>



    {{-- <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TV57H24');
    </script>
    <!-- End Google Tag Manager --> --}}

    <!-- Google Tag Manager -->



    <script>
        if (navigator.userAgent.indexOf("Chrome-Lighthouse") == -1) {

            // Google Tag Manager as Payload for all 3rd-party JS
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-KTCNFZ7');
            // please replace GTM-XXXXXXXXXX with own GTM ID
        }
    </script>


    {{-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KTCNFZ7');
    </script> --}}
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LPFHXNY947"></script>
    <script>
        if (navigator.userAgent.indexOf("Chrome-Lighthouse") == -1) {
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-LPFHXNY947');
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo')
    <!-- Styles -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&amp;display=swap" rel="stylesheet"> --}}

    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap" rel="stylesheet">

    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/ckeditor.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
        integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"
        integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('frontend/images/wikilearns.png') }}">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TV57H24" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTCNFZ7" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="mySidenav" class="sidenav">
        <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
        <a style="font-size:30px" href="{{ Route('frontend.main') }}"><b>Wiki Learns</b></a>
        <hr>
        @foreach ($catgorr as $category)
            @if (!$category->blogs->isEmpty())
                <a href="{{ route('getCategorybySlug', $category->category_slug) }}">
                    {{ $category->category_name }}</a>
            @endif
        @endforeach
    </div>
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top" id="main">
        <div class="offsetnavmargin ml-5">
            <span class="offsetNav" onclick="openNav()">&#9781;</span>
            <a aria-label="logo" class="navbar-brand logo-image" href="{{ Route('frontend.main') }}">
                {{-- <img src="{{asset('frontend/images/phoro-collage-social.png')}}" alt="wikilearns"> --}}
            </a>
            <a class="textLogo homeTextIcon" href="{{ Route('frontend.main') }}"><b>WiKi Learns</b></a>

        </div>
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->
        <div class="col-md-3 d-flex justify-content-end " id="homeSearch" style="margin-left:10rem">
            <div class="search-container">
                <form action="{{ route('serachblog') }}" method="GET">

                    <input class="search expandright" id="searchright" type="search" name="search"
                        placeholder="What are you looking for ?">
                    <button style="border: none" type="submit" class="button searchbutton" for="searchright"><span
                            class="mglass">&#9906;</span></button>
                </form>
            </div>
        </div>
        <div class="collapse navbar-collapse text-left" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto" style="font-size: 15px;">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ Route('frontend.about') }}">Be a Writer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ Route('frontend.contact') }}">Contact Us</a>
                </li>
                <li class="nav-item dropdown explorenav">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Explore
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @foreach ($catgorr as $category)
                            @if (!$category->blogs->isEmpty())
                                <a class="dropdown-item"
                                    href="{{ route('getCategorybySlug', $category->category_slug) }}">
                                    {{ $category->category_name }}</a>
                            @endif
                        @endforeach
                    </div>
                </li>
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link page-scroll" href="{{ route('home') }}">
                            Dashboard
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            LogIn
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('login') }}">Sign In</a>
                            <a class="dropdown-item" href="{{ route('bewriter.info') }}">Sign Up</a>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    <!-- end of navbar -->
    <!-- end of navbar -->
    <div onclick="closeNav()">
        @yield('frontbody')
    </div>
    <footer style="background-color: #242424">
        <div class="container">
            <hr>
            <div class="w-90">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row pt-3 ">
                            <div class="col-md-3">
                                <h5 class=" textLogoMenu text-white"> <span style="font-size: 25px;">WiKi
                                        Learns</span></h5>
                                <p class="text-white">
                                    “Wiki Learns” is a popular blogging platform, and as a guest writer, you can write
                                    for us. We accept content in several niches. However, your content must meet our
                                    community standards.
                                </p>
                                <div class="btn-group-footer">
                                    <a aria-label="facebook" href="#"><i class=" fab fa-facebook"
                                            aria-hidden="true"></i> <span class="footerStext">Follow us on
                                            Facebook</span> </a>
                                    <a aria-label="twitter" href="#"><i class=" fab fa-twitter"
                                            aria-hidden="true"></i> <span class="footerStext">Follow us on
                                            Twitter</span></a>
                                    <a aria-label="linkedin" href="#"><i class=" fab fa-linkedin"
                                            aria-hidden="true"></i> <span class="footerStext">Follow us on
                                            Linkedin</span></a>
                                    <a aria-label="pin" href="#"><i class=" fab fa-pinterest"
                                            aria-hidden="true"></i> <span class="footerStext">Follow us on
                                            Pinterest</span></a>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <h5 class="text-white">Features</h5>
                                <ul class="list-unstyled text-small">
                                    <li><a class="text-white" href="{{ Route('frontend.main') }}">Home</a></li>
                                    <li><a class="text-white" href="{{ route('about.us') }}">About Us</a></li>
                                    <li><a class="text-white" href="{{ route('frontend.contact') }}">Contact Us</a>
                                    </li>
                                    <li><a class="text-white" href="#">Meet The Team</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 text-center">
                                <h5 class="text-white">Resources</h5>
                                <ul class="list-unstyled text-small">
                                    <li><a class="text-white" href="{{ route('sitemap.index') }}">Sitemap</a></li>
                                    <li><a class="text-white" href="{{ route('frontend.termscondition') }}">Terms &
                                            Use</a></li>
                                    <li><a class="text-white" href="{{ route('frontend.privacy') }}">Privacy
                                            Policy</a></li>
                                    <li><a class="text-white" href="{{ route('frontend.adpolicty') }}">Advertisement
                                            Policy</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-white">Newsletter</h5>
                                {{-- <section class="bg-warning text-center p-5 mt-4"> --}}
                                <div class="container pb-3" style="margin-left: -13px;">
                                    <p id="display_message">
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{ $message }}</p>
                                            </div>
                                        @endif
                                    </p>
                                    <h4 class="text-white">SUBSCRIBE NOW</h4>
                                    <form action="{{ route('newsletter.store') }}" method="POST">
                                        @csrf
                                        <input class="mb-2 form-control form-control-sm" type="email"
                                            id="email" name="email" placeholder="Enter Your Email">
                                        <button type="submit" class="btn btn-success btn-sm">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center text-white " style="padding-bottom:30px ">© {{ \Carbon\Carbon::now()->year }} All
            Rights Reserved.</div>

        <div class="footerAd " id="myadFooter">
            <div style="display: none;" onclick="hideFooter()" id="footerTopleft" class="footerTopleft"><i
                    class=" float-left-class  fa fa-chevron-circle-down" aria-hidden="true"></i></div>
            <div onclick="upFooter()" id="footerTopleftup" class="footerTopleftup"><i
                    class=" fa fa-chevron-circle-up" aria-hidden="true"></i></div>
            <div style="display: none;" id="mainFooterAd" class="float-left-class mainFooterAd">For ad</div>
        </div>
    </footer>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
        integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        jQuery.event.special.touchstart = {
            setup: function(_, ns, handle) {
                this.addEventListener("touchstart", handle, {
                    passive: !ns.includes("noPreventDefault")
                });
            }
        };
        jQuery.event.special.touchmove = {
            setup: function(_, ns, handle) {
                this.addEventListener("touchmove", handle, {
                    passive: !ns.includes("noPreventDefault")
                });
            }
        };
        jQuery.event.special.wheel = {
            setup: function(_, ns, handle) {
                this.addEventListener("wheel", handle, {
                    passive: true
                });
            }
        };
        jQuery.event.special.mousewheel = {
            setup: function(_, ns, handle) {
                this.addEventListener("mousewheel", handle, {
                    passive: true
                });
            }
        };
    </script>
    <script>
        $("img").lazyload({
            effect: "fadeIn"
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("homeSearch").style.marginLeft = "5rem";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("homeSearch").style.marginLeft = "10rem";
        }

        function hideFooter() {
            document.getElementById("myadFooter").style.height = "0";
            document.getElementById("footerTopleft").style.display = "none";
            document.getElementById("footerTopleftup").style.display = "block";
            document.getElementById("mainFooterAd").style.display = "none";
        }

        function upFooter() {
            document.getElementById("myadFooter").style.cssText = "transition: 1s; height: 200px";
            document.getElementById("footerTopleft").style.display = "block";
            document.getElementById("footerTopleftup").style.display = "none";
            document.getElementById("mainFooterAd").style.display = "block";
        }
    </script>
    <script>
        $(window).on('scroll load', function() {
            if ($(".navbar").offset().top > 20) {
                $(".fixed-top").addClass("top-nav-collapse");
            } else {
                $(".fixed-top").removeClass("top-nav-collapse");
            }
        });
    </script>

    <script type="text/javascript">
        var path = "{{ route('serachautocomplete') }}";

        $("#searchright").autocomplete({
            appendTo: $("#searchright").parent(),
            source: function(request, response) {
                $.ajax({
                    url: path,
                    type: 'GET',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },

            select: function(event, ui) {
                $('#searchright').val(ui.item.label);
            }
        });
    </script>
    @yield('script')

    <!-- Default Statcounter code for Wiki Learns Report https://wikilearns.com/ -->
    <script type="text/javascript">
        var sc_project = 12840818;
        var sc_invisible = 1;
        var sc_security = "53d527c6";
    </script>
    <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
    <noscript>
        <div class="statcounter"><a title="Web Analytics" href="https://statcounter.com/" target="_blank"><img
                    class="statcounter" src="https://c.statcounter.com/12840818/0/53d527c6/1/" alt="Web Analytics"
                    referrerPolicy="no-referrer-when-downgrade"></a></div>
    </noscript>
    <!-- End of Statcounter Code -->

</body>

</html>
