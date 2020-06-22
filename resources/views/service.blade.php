@extends('layouts.app')
@section('title',setting('site.title') ." | ". __('frontend.services_package'))


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
							<li>使用現成的網頁套版設計</li>
							<li>支援語言切換</li>
							<li>修改次數</li>
							<li>按要求訂制</li>
							<li>小型企業</li>
							<li>個人網站</li>
							<li>簡介組織或其他簡單用途</li>
						</ul>
					</div>
					<hr>
					<div class="service_desc_other">
						<ul class="service_desc_extra">
							<li>使用現成的網頁套版設計</li>
							<li>支援語言切換</li>
							<li>修改次數</li>
							<li>按要求訂制</li>
							<li>小型企業</li>
							<li>個人網站</li>
							<li>簡介組織或其他簡單用途</li>
						</ul>
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
						<a href="#">APPLY</a>
					</div>
				</div>

				<div class="col-md-3 col-sm-3 service_div" data-aos="zoom-in-down" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
					<div class="service_title">
							<span>@lang('frontend.low_lv_plan')</span>
					</div>
				
					<div class="service_price_primary">
						<span class="service_price">
							$800
						</span>
						<span class="service_per_month">
							/month
						</span>
					</div>
					<div class="service_desc">
						<ul class="service_desc_extra">
							<li>由專業既大屌毅操刀</li>
							<li>你應該覺得榮幸</li>
							<li>價錢可面議</li>
							<li>價錢主要看臉</li>
							<li>樣衰收貴D，好似我咁樣就FREE PAY</li>
						</ul>
					</div>
					<div class="service_apply">
						<a href="#">APPLY</a>
					</div>
				</div>

				<div class="col-md-3 col-sm-3 service_div" data-aos="zoom-in-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
					<div class="service_title">
					<span>@lang('frontend.full_lv_plan')</span>
					</div>
					
					<div class="service_price_primary">
						<span class="service_price">
							$170000
						</span>
						<span class="service_per_month">
							/month
						</span>
					</div>
					<div class="service_desc">
						<ul>
							<li>由專業既大屌毅操刀</li>
							<li>你應該覺得榮幸</li>
							<li>價錢可面議</li>
							<li>價錢主要看臉</li>
							<li>樣衰收貴D，好似我咁樣就FREE PAY</li>
						</ul>
					</div>
					<div class="service_apply">
						<a href="#">APPLY</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
