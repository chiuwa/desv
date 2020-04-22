
@extends('layouts.app')

@section('title', setting('site.title'))


@section('main_page')
@php use TCG\Voyager\Models\Setting @endphp
    <aside id="colorlib-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumbs text-center">
                    <!--h2>Blog</h2>
                    <p><span><a href="/">Home</a></span></p-->
	 @php 
		$carousel  = Setting::getCarousel(); 
	@endphp					
					 
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
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
@endsection

@section('content')
    <div class="row row-pb-md">
        @foreach($posts as $post)
        <div class="col-md-4" style="height: 500px;">
            <div class="blog-entry">
                <div class="blog-img">
                    <a href="/blog/view/{{ $post->post_id }}">
                        <img src="{{ Voyager::image($post->thumbnail('medium')) }}" class="img-responsive" alt="html5 bootstrap template">
                    </a>
                </div>
                <div class="desc">
                    <p class="meta">
                        <span class="cat"><a href="#">{{ $post->name }}</a></span>
                        <span class="date">{{ date('Y-m-d', strtotime($post->created_at)) }}</span>
{{--                        <span class="pos">By <a href="#">Rich</a></span>--}}
                    </p>
                    <h2><a href="/blog/view/{{ $post->post_id }}">{{ $post->title }}</a></h2>
                    <p>{{  Str::limit($post->excerpt, 150, '...') }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

{{--    <div class="row">--}}
{{--        <div class="col-md-12 text-center">--}}
{{--            <ul class="pagination">--}}
{{--                <li class="disabled"><a href="#">&laquo;</a></li>--}}
{{--                <li class="active"><a href="#">1</a></li>--}}
{{--                <li><a href="#">2</a></li>--}}
{{--                <li><a href="#">3</a></li>--}}
{{--                <li><a href="#">4</a></li>--}}
{{--                <li><a href="#">&raquo;</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
