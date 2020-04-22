<!DOCTYPE HTML>
<?php

use TCG\Voyager\Models\Setting;
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    @yield('social')


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

</head>
<body>

<div class="colorlib-loader"></div>
<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
					 <div class="logo col-md-2 col-sm-3 col-xs-5 ">
					 @php
					 $admin_favicon = Voyager::setting('site.logo', '');
					 @endphp

					@if($admin_favicon !== '')
						<img  style="width: 100%;" src="{{ Voyager::image($admin_favicon) }}" type="image/png">
					@endif
					 </div>
                        <div id="colorlib-logo"><a href="/">{{setting('site.title')}}</div>
                    </div>
                   <div class="col-xs-8 text-right menu-1">
                       <ul>
                            <li><a href="/">Home</a></li>
							<li class="active"><a href="/sister/index">Search</a></li>
                           <li class="has-dropdown">
                              <a href="/">Blog</a>
                               <ul class="dropdown">
                                   <li><a href="single.html">Blog Single</a></li>
                                   <li><a href="#">Video</a></li>
                                   <li><a href="#">Read</a></li>
                                   <li><a href="#">Lifestyle</a></li>
                               </ul>
                            </li>

                            <li><a href="travel.html">Travel</a></li>
                            <li><a href="about.html">About Me</a></li>
                           <li><a href="contact.html">Contact</a></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('main_page')

    @yield('blog_single')

    <div id="colorlib-container">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <footer  role="contentinfo">

    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<!-- Owl carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
<!-- Main -->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

