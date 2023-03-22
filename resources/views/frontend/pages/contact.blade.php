@extends('frontend/layout/app')
@section('seo')
    <title>Contact us | Wikilearns | Blogging Platform</title>
    <meta name="description"
        content="Wiki learns a popular blogging platform that has worked great over the years. Have any queries? Enjoy our contact us option. ">
    <meta name="author" content="Contact Us || WiKi Learns">
    <meta property="og:site_name" content="WikiLearns" />
    <meta property="og:site" content="https://www.wikilearn.com" />
    <meta property="og:title" content="Contact Us || WiKi Learns" />
    <meta property="og:description"
        content="Wiki learns a popular blogging platform that has worked great over the years. Have any queries? Enjoy our contact us option."/>
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="article" />
@endsection
@section('frontbody')
    <style>
        /* #contact .card:hover i,#contact .card:hover h4{
             color: #87d37c;
            } */

        .mtext {
            color: black !important;

        }
        font-family: 'Roboto',
        sans-serif;

        body {
            background: #212966;
            ";
    font-family: "Roboto", sans-serif;
            padding: 0;
        }
        /*//////////////////////////////////////////////////////////////////
            [ FONT ]*/

        @font-face {
            font-family: Montserrat-Regular;
            src: url('../fonts/montserrat/Montserrat-Regular.ttf');
        }

        @font-face {
            font-family: Montserrat-Bold;
            src: url('../fonts/montserrat/Montserrat-Bold.ttf');
        }

        @font-face {
            font-family: Montserrat-ExtraBold;
            src: url('../fonts/montserrat/Montserrat-ExtraBold.ttf');
        }

        @font-face {
            font-family: Montserrat-Medium;
            src: url('../fonts/montserrat/Montserrat-Medium.ttf');
        }



        /*//////////////////////////////////////////////////////////////////
            [ RESTYLE TAG ]*/


        /*---------------------------------------------*/
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0px;
        }

        /* p {
             font-family: Montserrat-Regular;
             font-size: 25px;
             line-height: 1.7;
             color: #666666;
             margin: 0px;
            } */

        ul,
        li {
            margin: 0px;
            list-style-type: none;
        }


        /*---------------------------------------------*/
        input {
            outline: none;
            border: none;
        }

        textarea {
            outline: none;
            border: none;
        }

        textarea:focus,
        input:focus {
            border-color: transparent !important;
        }

        input::-webkit-input-placeholder {
            color: #999999;
        }

        input:-moz-placeholder {
            color: #999999;
        }

        input::-moz-placeholder {
            color: #999999;
        }

        input:-ms-input-placeholder {
            color: #999999;
        }

        textarea::-webkit-input-placeholder {
            color: #999999;
        }

        textarea:-moz-placeholder {
            color: #999999;
        }

        textarea::-moz-placeholder {
            color: #999999;
        }

        textarea:-ms-input-placeholder {
            color: #999999;
        }

        /*---------------------------------------------*/
        button {
            outline: none !important;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        /* iframe {
             border: none !important;
            } */




        /*//////////////////////////////////////////////////////////////////
            [ Contact 1 ]*/

        .contact1 {
            width: 100%;
            min-height: 100%;
            padding: 15px;

            /* background: #009bff; */
            /* background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
              background: -o-linear-gradient(left, #0072ff, #00c6ff);
              background: -moz-linear-gradient(left, #0072ff, #00c6ff);
              background: linear-gradient(left, #0072ff, #00c6ff); */

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .container-contact1 {
            width: 1163px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;

            padding: 90px 130px 88px 148px;
        }

        /*------------------------------------------------------------------
            [  ]*/
        .contact1-pic {
            width: 296px;
        }

        .contact1-pic img {
            max-width: 100%;
        }


        /*------------------------------------------------------------------
            [  ]*/
        .contact1-form {
            width: 390px;
        }

        .contact1-form-title {
            display: block;
            font-family: Montserrat-ExtraBold;
            font-size: 24px;
            color: #333333;
            line-height: 1.2;
            text-align: center;
            padding-bottom: 15px;
            padding-top: 15px;
            margin-bottom: 30px;
            background-color: #57b846;
            border-radius: 25px;
        }

        input.input1 {
            height: 50px;
            border-radius: 25px;
            padding: 0 30px;
        }

        input.input1+.shadow-input1 {
            border-radius: 25px;
        }

        textarea.input1 {
            min-height: 150px;
            border-radius: 25px;
            padding: 12px 30px;
        }

        textarea.input1+.shadow-input1 {
            border-radius: 25px;
        }

        /*---------------------------------------------*/
        .wrap-input1 {
            position: relative;
            width: 100%;
            z-index: 1;
            margin-bottom: 20px;
        }

        .input1 {
            display: block;
            width: 100%;
            background: #e6e6e6;
            font-family: Montserrat-Bold;
            font-size: 15px;
            line-height: 1.5;
            color: #666666;
        }

        .shadow-input1 {
            content: '';
            display: block;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            box-shadow: 0px 0px 0px 0px;
            color: rgba(87, 184, 70, 0.5);
        }

        .input1:focus+.shadow-input1 {
            -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
            animation: anim-shadow 0.5s ease-in-out forwards;
        }

        @-webkit-keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 80px 30px;
                opacity: 0;
            }
        }

        @keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 80px 30px;
                opacity: 0;
            }
        }

        /*---------------------------------------------*/
        .container-contact1-form-btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .contact1-form-btn {
            min-width: 193px;
            height: 50px;
            border-radius: 25px;
            background: #57b846;
            font-family: Montserrat-Bold;
            font-size: 15px;
            line-height: 1.5;
            color: #fff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 25px;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }



        .contact1-form-btn:hover {
            background: #333333;
        }

        /*------------------------------------------------------------------
            [ Responsive ]*/

        @media (max-width: 1200px) {
            .contact1-pic {
                width: 33.5%;
            }

            .contact1-form {
                width: 44%;
            }
        }

        @media (max-width: 992px) {
            .container-contact1 {
                padding: 90px 80px 88px 90px;
            }

            .contact1-pic {
                width: 35%;
            }

            .contact1-form {
                width: 55%;
            }
        }

        @media (max-width: 768px) {
            .container-contact1 {
                padding: 90px 80px 88px 80px;
            }

            .contact1-pic {
                display: none;
            }

            .contact1-form {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .container-contact1 {
                padding: 90px 15px 88px 15px;
            }
        }

        @media (max-width: 992px) {
            .alert-validate::before {
                visibility: visible;
                opacity: 1;
            }
        }
    </style>



    <section class="main" style="padding-top:200px; background-color:#0193AE;">

        <div class="contact1" style="background-color:#0193AE;">
            <div class="container-contact1">

                <div class="container mb-5">
                    @if (session()->has('sucess'))
                        <div class="alert alert-success text-center">
                            {{ session()->get('sucess') }}
                        </div>
                    @endif

                </div>
                <div class="container mb-5">
                    <h2 style="font-family: 'Rochester',Sans-serif;color:black;">Have Questions? Reach Out To Us.</h2>
                </div>
                <div class="contact1-pic js-tilt" data-tilt>
                    <img src="{{ 'frontend/images/contact/img-01.png' }}" alt="IMG">
                    <h6>What do you think? Let us Know</h6>
                </div>
                <form class="contact1-form validate-form" action="{{ route('fontcontactus') }}" method="POST">
                    @csrf
                  
                    <span class="contact1-form-title">
                        Get in touch
                    </span>

                    <div class="wrap-input1 validate-input" data-validate="First Name is required">
                        <input class="input1" type="text" name="fname" placeholder="First Name">
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Last Name is required">
                        <input class="input1" type="text" name="lname" placeholder="Last Name">
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input1" type="text" name="email" placeholder="Email">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Subject is required">
                        <input class="input1" type="text" name="subject" placeholder="Subject">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Message is required">
                        <textarea class="input1" name="message" placeholder="Message"></textarea>
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="container-contact1-form-btn">
                        <button class="contact1-form-btn" type="submit">
                            <span>
                                Send Message
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
