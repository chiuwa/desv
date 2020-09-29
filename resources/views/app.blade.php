
@extends('layouts.app')

@section('title', setting('site.title'))
@section('main_page')
@php use \App\Http\Controllers\HomeController; @endphp

   
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <aside id="colorlib-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumbs text-center">
                    <!--h2>Blog</h2>
                    <p><span><a href="/">Home</a></span></p-->
   @php 
    $carousel  = HomeController::getCarousel(); 
  @endphp         
           
  <div  id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
  
  @foreach($carousel as $key=>$c)
  @if($key=='0')
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    @else
    <li data-target="#myCarousel" data-slide-to="{{$key}}"></li>
  @endif  
  @endforeach
      
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" > 
  @foreach($carousel as $key=>$c)
  @if($key=='0')
   <div class="item active">
       <img src="{{ Voyager::image($c->value)}}" class="responsive" style="width:100%;height: 100%">
      </div>
    @else
    <div class="item">
        <img src="{{ Voyager::image($c->value)}}" class="responsive" style="width:100%;height: 100%">
      </div>    
  @endif  
  @endforeach
    </div>
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>  
                </div>
            </div>
        </div>
    </aside>
  
   
  <div id="colorlib-container" style="min-height: 500px;">
        <div class="container">
            @yield('content')

            <div class="row">


                <div class="content_full">
                <p class="text-center promotion_title_1" data-aos="fade-right">
                    @lang('frontend.home_promotion_title_1')
                </p>
                <div class="col-xs-12 col-md-12 content_div">
                    <div data-aos="zoom-out-right" class="content1">

                        <div class="col-xs-12 col-md-5 image_class">
                            @php
                                $promotion_image_1 = Voyager::setting('site.promotion_image_1', '');
                            @endphp
                            @if($promotion_image_1 !== '')
                                <img  class="content_image" data-aos="fade-right"
                                      data-aos-anchor="#example-anchor"
                                      data-aos-offset="500"
                                      data-aos-duration="500" src="{{ Voyager::image($promotion_image_1) }}" type="image/png">
                            @endif
                        </div>
                        <div class="col-xs-12 col-md-7">
                            <p class="promotion_content_1"> @lang('frontend.home_promotion_content_1')</p>
                        </div>
                    </div>
                </div>
                    </div>


             <div class="content_full">
      <p class="text-center promotion_title_1" data-aos="fade-right">
      @lang('frontend.home_promotion_title_2')
      </p>
      <div class="col-xs-12 col-md-12 content_div">
      <div data-aos="zoom-out-right" class="content1">

      <div class="col-xs-12 col-md-7">
      <p class="promotion_content_1"> @lang('frontend.home_promotion_content_2')</p>
      </div>
      <div class="col-xs-12 col-md-5 image_class">
          @php
           $promotion_image_2 = Voyager::setting('site.promotion_image_2', '');
           @endphp
          @if($promotion_image_2 !== '')
            <img  class="content_image" data-aos="fade-right"
                              data-aos-anchor="#example-anchor"
                              data-aos-offset="500"
                              data-aos-duration="500" src="{{ Voyager::image($promotion_image_2) }}" type="image/png">
          @endif
      </div>

      </div>
        </div>
                </div>
        
        
            <div class="content_full">
                <p class="text-center promotion_title_1" data-aos="fade-right">
                    @lang('frontend.home_promotion_title_3')
                </p>
                <div class="col-xs-12 col-md-12 content_div">
                    <div data-aos="zoom-out-right" class="content1">

                        <div class="col-xs-12 col-md-5 image_class">
                            @php
                                $promotion_image_3 = Voyager::setting('site.promotion_image_3', '');
                            @endphp
                            @if($promotion_image_3 !== '')
                                <img  class="content_image" data-aos="fade-right"
                                      data-aos-anchor="#example-anchor"
                                      data-aos-offset="500"
                                      data-aos-duration="500" src="{{ Voyager::image($promotion_image_3) }}" type="image/png">
                            @endif
                        </div>
                        <div class="col-xs-12 col-md-7">
                            <p class="promotion_content_3"> @lang('frontend.home_promotion_content_3')</p>
                        </div>
                    </div>
                </div>
              </div>
          
          
          
        
        
      </div>
        </div>
    </div>






@endsection


