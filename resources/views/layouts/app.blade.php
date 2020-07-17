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


<!--   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

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

            <div class="logo logo_dw col-md-2  col-xs-4 ">
              @php
              $admin_favicon = Voyager::setting('site.logo', '');
              @endphp
              @if($admin_favicon !== '')
              <a href="/"><img   class="desv_image" src="{{ Voyager::image($admin_favicon) }}" type="image/png"></a>
              @endif

            </div>


            <div  data-aos="fade-right" class="col-xs-6 col-md-6 text-right pull-right lang">

              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              @if(App::getLocale()!==$localeCode)
              <a  class="lung_big_nav" style="margin-right: 10px" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
              </a>
              @endif
              @endforeach


              @if(Auth::check())
              <div class="user_nav">
                <label>{{ Auth::user()->name}}</label>
                <a href="logout">@lang('frontend.logout')</a>
              </div>
              @else
              <a href="/login" class="btn btn-outline-info login_button">@lang('frontend.service_platform')</a>
              @endif

            </div>
          </div>
        </div>
      </div>
      <div  data-aos="zoom-in" class="col-xs-12 text-center menu-1" >
       <ul class="navbar_ul">
      <li class="{{ (\Route::currentRouteName() == 'home') ? 'navbar_li active' : 'navbar_li' }}"> <a href="/">@lang('frontend.home')</a></li>
        <li class="{{ (\Route::currentRouteName() == 'service') ? 'has-dropdown navbar_li active' : 'has-dropdown navbar_li' }} ">
          <a href="/service">@lang('frontend.services')</a>
          <ul class="dropdown">
           <li><a href="/service">@lang('frontend.services_package')</a></li>
         </ul>
       </li>
        <li class="{{ (\Route::currentRouteName() == 'platform') ? 'navbar_li active' : 'navbar_li' }}"><a href="/platform">@lang('frontend.platform')</a></li>
       <li class="{{ (\Route::currentRouteName() == 'design') ? 'navbar_li active' : 'navbar_li' }}"><a href="/design">@lang('frontend.design')</a></li>
       <li class="{{ (\Route::currentRouteName() == 'develop') ? 'navbar_li active' : 'navbar_li' }}"><a href="/develop">@lang('frontend.develop') </a></li>
       <li class="{{ (\Route::currentRouteName() == 'contact') ? 'navbar_li active' : 'navbar_li' }}"><a href="/contact">@lang('frontend.contact')</a></li>
       @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
       @if(App::getLocale()!==$localeCode)
       <li class="navbar_li lung_nav"> <a  style="margin-right: 10px" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
         {{ $properties['native'] }}
       </a></li>
       @endif
       @endforeach
     </ul>

   </div>
 </nav>
</div>

@yield('main_page')

<footer  role="contentinfo">
  <div class="container-fluid footer">
    <div class="container">
      <div class="footer_title">
        <label>@lang('frontend.contact')</label>
      </div>
      <div class="contact_desc">
        <label> @lang('frontend.contact_desc')</label>
      </div>

      <div class="row ">

        <div class="col-md-5">         
          <br>   
          <p class="icn" style="color: #fff"> <i class="fa fa-phone"></i> &nbsp;&nbsp; @php echo(' '.Voyager::setting('site.phone'));  @endphp </p>
          <p class="icn" style="color: #fff"><i class="fa fa-envelope"></i> &nbsp;&nbsp; @php echo(' '.Voyager::setting('site.email'));  @endphp </p>

          <hr>

          <div class="media">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fab fa-facebook-f"></a></i></li>
              <li><a href="#"> <i class="fab fa-instagram"> </i></a>  </li>
              <li><a href="#"><i class="fab fa-whatsapp"></i> </a>  </li> 
              <li><a href="#"> <i class="fab fa-github"> </i> </a>  </li>
              <li><a href="#"> <i class="fab fa-aws"></i> </a>  </li>

            </ul>
          </div>

        </div>

        <div class="col-md-1"></div>

        <div class="col-md-6">
          {!! Form::open(array('action' => 'HomeController@asking')) !!}
          <div class="row">
           <div class="col-md-6">
            <div class=" title_div">

              <label class="radio-inline title_redio">{!! Form::radio('title', "mr", null,['required']) !!}Mr.</label>

              <label class="radio-inline title_redio">{!! Form::radio('title', "mrs", null) !!}Mrs.</label>

              <label class="radio-inline title_redio">{!! Form::radio('title', "miss", null) !!}Miss</label>

            </div>   

          </div>
          <div class="col-md-6">
           {!! Form::text('name', null, array('placeholder'=>' Surname','class'=>'form_text','required'=>'true')) !!}
         </div>
         <div class="col-md-6">
          {!! Form::email('email', null, array('placeholder'=>' Email','class'=>'form_text','required'=>'true')) !!}
        </div>
        <div class="col-md-6">
          {!! Form::text('phone', null, array('placeholder'=>' Phone (Option)','class'=>'form_text')) !!}
        </div>
        <div class="col-md-12">
          @php
          $query_types = ['web_site'=>'WebSite Develope','design'=>'Design','start_up'=>'Start Up Plan','other'=>'Other'];
          @endphp
          {!! Form::select('query_type_name',$query_types, null, array('placeholder'=>' Query Type','class' => 'form-control query_type ','required'=>'true')) !!}
        </div>
        <div class="col-md-12">
         {!! Form::textarea('query_question', null, ['placeholder'=>'Any Question?','required'=>'true','id' => 'query_question', 'rows' => 4]) !!}
       </div>
       <div class="col-md-12 submit_button">
        {{Form::submit('Submit', ['class' => 'btn btn-info cus_submit_button'])}}
      </div>

      {!!  Form::close() !!}
    </div>
  </div>
</div>
</div>
</div>

<div  class="footer-copyright">
  <label>Copyright © @php $admin_title = Voyager::setting('site.title'); echo ( now()->year); print_r (' '. $admin_title) @endphp All Rights Reserved</label>

</div>
</footer>


<div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<div id="popupmodal" class="modal hide fade popup_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  </div>
  <div class="modal-body">
    <p class="text-center">
     @php
     if(Session::has('modal_message_success')){
     echo( Session::get('modal_message_success') );
   }elseif(Session::has('modal_message_error')){
   echo(  Session::get('modal_message_error') );
 }
 @endphp
</p>
</div>

<div class="modal-footer">
  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
</div>
</div>

<!-- jQuery -->
<!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
@if( Session::has('modal_message_error') || Session::has('modal_message_success'))
<script type="text/javascript">
  $(document).ready(function() {
    $('#popupmodal').modal();
    $('#popupmodal').removeClass( "hide" )
  });
</script>

@endif

</body>
</html>

