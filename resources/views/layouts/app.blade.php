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
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <!--link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">	
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
    <nav class="colorlib-nav navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div  data-aos="fade-right" class="col-xs-5 logo_dw">
					 <div class="logo col-md-4 col-sm-6 col-xs-8 ">
					 @php
					 $admin_favicon = Voyager::setting('site.logo', '');
					 @endphp
					@if($admin_favicon !== '')
						<img  style="width: 100%;" src="{{ Voyager::image($admin_favicon) }}" type="image/png">
					@endif
					 </div>
                    </div>

        <div  data-aos="fade-right" class="col-xs-5 col-md-6 text-right pull-right lang">
		<div>
		@php $i = 0 ; @endphp
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                      @if($i !== 0 )
						<span> | </span>
						@endif
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
							@php $i = $i+1 ; @endphp
                @endforeach
		</div>

                   </div>
                </div>
            </div>
        </div>
		<div  data-aos="zoom-in" class="col-xs-12 text-center menu-1" >
                       <ul class="navbar_ul">
                            <li class="active navbar_li"><a href="/">@lang('frontend.home')</a></li>
							<li class="navbar_li"><a href="/product/index">@lang('frontend.product')</a></li>
                           <li class="has-dropdown navbar_li">
                              <a href="/">@lang('frontend.services')</a>
                               <ul class="dropdown">
                                   <li><a href="#">@lang('frontend.services')</a></li>
                                   <li><a href="#">@lang('frontend.services')</a></li>
                                   <li><a href="#">@lang('frontend.services')</a></li>
                                   <li><a href="#">@lang('frontend.services')</a></li>
                               </ul>
                            </li>

                            <li class="navbar_li"><a href="travel.html">@lang('frontend.design')</a></li>
                            <li class="navbar_li"><a href="about.html">@lang('frontend.develop') </a></li>
                           <li class="navbar_li"><a href="contact.html">@lang('frontend.contact')</a></li>
                        </ul>

        </div>
    </nav>

    @yield('main_page')

    @yield('blog_single')

    <div id="colorlib-container" style="min-height: 500px;">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <footer  role="contentinfo">
    <div  class="col-md-12 footer">
    <div class="row">
        <div class="footer-up">
            <div class="footer_title">
                <p>@lang('frontend.contact')</p>		
            </div>
				<div class="col-md-12 contact_on">
				<div class="contact_info text-center">
				<p class="contact_phone "><span class="glyphicon glyphicon-earphone"></span>@php echo(' '.Voyager::setting('site.phone'));  @endphp</p>
				<p class="contact_email "><span class="glyphicon glyphicon-envelope"></span>@php echo(' '.Voyager::setting('site.email'));  @endphp</p>		
				</div>	
				</div>
				<div class="contact_desc">
				<p> @lang('frontend.contact_desc')</p>
				</div>
			
            </div>
    </div>
    </div>

        <div  class="footer-copyright">
            <span>Copyright © @php $admin_title = Voyager::setting('site.title'); echo ( now()->year); print_r (' '. $admin_title) @endphp All Rights Reserved</span>

        </div>

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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>

