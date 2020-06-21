@extends('layouts.app')
@section('title',setting('site.title') ." | ". __('frontend.services_package'))


@section('main_page')
<div class="container">
	<div class="row">
		<div class="col-md-12 div_botton">
			<div class="common_main_div">
				<div class="col-md-3 col-sm-3 service_div" data-aos="zoom-out-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
					<div class="service_title">
						<span>Intern</span>
					</div>
				
					<div class="service_price_primary">
						<span class="service_price">
							$220
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

				<div class="col-md-3 col-sm-3 service_div" data-aos="zoom-in-down" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
					<div class="service_title">
						<span>Junior</span>
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
						<span>Senior</span>
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
