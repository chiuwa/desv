@extends('layouts.app')
@section('title',setting('site.title') ." | ". __('frontend.platform'))


@section('main_page')
<div class="container">
	<div class="row">
		<div class="col-md-12 div_botton">
			<div class="common_main_div">
				<div class="col-md-3 col-sm-3 service_div" data-aos="zoom-out-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
					<div class="service_title">
						<span>@lang('frontend.intern')</span>
					</div>

					<div class="service_desc">
						<ul class="service_desc_extra">
							<li>基本網頁設計</li>						
							<li>按有限要求訂制</li>
							<li>響應式網頁設計</li>
							<li>小型企業,個人網站</li>
						</ul>
					</div>
					<hr>
					<div class="service_desc_other">
						<ul class="service_desc_extra">
							<li>由資深員工帶領</li>
							<li>應屆畢業生開發</li>
							<li>低成本</li>						
						</ul>
					</div>
					<div class="chartRadarDiv" >
						<canvas id="chartRadar"></canvas>
					</div>
					<div class="service_price_primary">
						<span class="service_per_month">
							費用 : 
						</span>
						<span class="service_price">			
							 $5,000 - $35,000
						</span>

					</div>
					<div class="service_apply">
						<a href="#">@lang('frontend.free_quota')</a>
					</div>
				</div>

				<div class="col-md-3 col-sm-3 service_div" data-aos="zoom-in-down" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
					<div class="service_title">
						<span>@lang('frontend.low_lv_plan')</span>
					</div>

					<div class="service_desc">
						<ul class="service_desc_extra">
							<li>專業網頁設計</li>
							<li>支援語言切換</li>
							<li>有限修改次數</li>
							<li>按要求訂制</li>
							<li>響應式網頁設計</li>
							<li>中小企公司網頁</li>
							<li>小型網店</li>
						</ul>
					</div>
					<hr>
					<div class="service_desc_other">
						<ul class="service_desc_extra">
							<li>由有經驗員工開發</li>
							<li>包含設計師費用</li>	
							<li>包含維護／系統升級</li>						
						</ul>
					</div>
					<div class="chartRadarDiv2" >
						<canvas id="chartRadar2"></canvas>
					</div>

					<div class="service_price_primary">
						<span class="service_per_month">
							費用 : 
						</span>
						<span class="service_price">			
							$50,000 - $150,000
						</span>

					</div>
					<div class="service_apply">
						<a href="#">@lang('frontend.free_quota')</a>
					</div>
				</div>




				<div class="col-md-3 col-sm-3 service_div" data-aos="zoom-in-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
					<div class="service_title">
						<span>@lang('frontend.full_lv_plan')</span>
					</div>
					
					<div class="service_desc">
						<ul class="service_desc_extra">
							<li>基本網頁設計</li>
							<li>支援語言切換</li>
							<li>有限修改次數</li>
							<li>按要求訂制</li>
							<li>響應式網頁設計</li>
							<li>小型企業,個人網站</li>
							<li>簡介組織或其他簡單用途</li>
						</ul>
					</div>
					<hr>
					<div class="service_desc_other">
						<ul class="service_desc_extra">
							<li>由資深員工帶領</li>
							<li>應屆畢業生開發</li>
							<li>低成本</li>						
						</ul>
					</div>
					<div class="chartRadarDiv" >
						<canvas id="chartRadar"></canvas>
					</div>
					<div class="service_price_primary">
						<span class="service_per_month">
							費用 : 
						</span>
						<span class="service_price">			
							$5,000 - $15,000
						</span>

					</div>
					<div class="service_apply">
						<a href="#">@lang('frontend.free_quota')</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

@endsection
