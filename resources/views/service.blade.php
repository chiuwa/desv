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
							<li>後台 CMS 系統</li>
							<li>包含維護／系統升級</li>								
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
							<li>風格、功能近乎全客製化</li>
							<li>高度客製化的頁面</li>
							<li>後台 CMS 系統</li>
							<li>支援語言切換</li>
							<li>包含維護／系統升級</li>	
							<li>按要求完全訂制</li>
							<li>響應式網頁設計</li>
							<li>需要獨特功能</li>
							<li>要求完全個人化或完全按公司形象設計</li>
						</ul>
					</div>
					<hr>
					<div class="service_desc_other">
						<ul class="service_desc_extra">
							<li>由資深員工開發</li>
							<li>適合預算較高</li>
							<li>長期發展事業的公司</li>						
						</ul>
					</div>
					<div class="chartRadarDiv3" >
						<canvas id="chartRadar3"></canvas>
					</div>
					<div class="service_price_primary">
						<span class="service_per_month">
							費用 : 
						</span>
						<span class="service_price">			
							$150,000 Up
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>	
	//定義變數
	var chartRadarDOM;
	var chartRadarData;
	var chartRadarOptions;
	
    	//載入雷達圖
    	Chart.defaults.global.legend.display = false;
    	Chart.defaults.global.defaultFontColor =' #908E65';
    	chartRadarDOM = document.getElementById("chartRadar");
    	chartRadarData;
    	chartRadarOptions = 
    	{
    		scale: 
    		{
    			ticks: 
    			{
    				fontSize: 1,
    				beginAtZero: true,
    				maxTicksLimit: 5,
    				min:0,
    				max:100
    			},
    			pointLabels: 
    			{
    				fontSize: 12,
    				color: '#F6490D'
    			},
    			gridLines: 
    			{
    				color: '#FFD768'
    			}
    		}
    	};

    	console.log("---------Rader Data--------");
    	var graphData =new Array();
    	graphData.push(60);
    	graphData.push(40);
    	graphData.push(40);
	// graphData.push(20);
	// graphData.push(97);
	
	
	console.log("--------Rader Create-------------");
	console.log(graphData);

	//CreateData
	chartRadarData = {
		labels: ['Cost-effectiveness', 'Time benefit', 'Experience'],
		datasets: [{
			label: "Skill Level",
			backgroundColor: "#2f5c6f",
			borderColor: "rgba(63,63,74,.8)",
			pointBackgroundColor: "rgba(63,63,74,1)",
			pointBorderColor: "rgba(0,0,0,0)",
			pointHoverBackgroundColor: "#fff",
			pointHoverBorderColor: "rgba(0,0,0,0.3)",
			pointBorderWidth: 5,
			data: graphData}]
		};
		
	//Draw
	var chartRadar = new Chart(chartRadarDOM, {
		type: 'radar',
		data: chartRadarData,
		options: chartRadarOptions
	});
</script>

<script>	
	//定義變數
	var chartRadarDOM2;
	var chartRadarData2;
	var chartRadarOptions2;
	
    	//載入雷達圖
    	Chart.defaults.global.legend.display = false;
    	Chart.defaults.global.defaultFontColor =' #908E65';
    	chartRadarDOM2 = document.getElementById("chartRadar2");
    	chartRadarData2;
    	chartRadarOptions2 = 
    	{
    		scale: 
    		{
    			ticks: 
    			{
    				fontSize: 1,
    				beginAtZero: true,
    				maxTicksLimit: 5,
    				min:0,
    				max:100
    			},
    			pointLabels: 
    			{
    				fontSize: 12,
    				color: '#F6490D'
    			},
    			gridLines: 
    			{
    				color: '#FFD768'
    			}
    		}
    	};

    	console.log("---------Rader Data--------");
    	var graphData2 =new Array();
    	graphData2.push(75);
    	graphData2.push(60);
    	graphData2.push(80);
	// graphData.push(20);
	// graphData.push(97);
	
	
	console.log("--------Rader Create-------------");
	console.log(graphData2);

	//CreateData
	chartRadarData2 = {
		labels: ['Cost-effectiveness', 'Time benefit', 'Experience'],
		datasets: [{
			label: "Skill Level",
			backgroundColor: "#2f5c6f",
			borderColor: "rgba(63,63,74,.8)",
			pointBackgroundColor: "rgba(63,63,74,1)",
			pointBorderColor: "rgba(0,0,0,0)",
			pointHoverBackgroundColor: "#fff",
			pointHoverBorderColor: "rgba(0,0,0,0.3)",
			pointBorderWidth: 5,
			data: graphData2}]
		};
		
	//Draw
	var chartRadar2 = new Chart(chartRadarDOM2, {
		type: 'radar',
		data: chartRadarData2,
		options: chartRadarOptions2
	});
</script>


<script>	
	//定義變數
	var chartRadarDOM3;
	var chartRadarData3;
	var chartRadarOptions3;
	
    	//載入雷達圖
    	Chart.defaults.global.legend.display = false;
    	Chart.defaults.global.defaultFontColor =' #908E65';
    	chartRadarDOM3 = document.getElementById("chartRadar3");
    	chartRadarData3;
    	chartRadarOptions3 = 
    	{
    		scale: 
    		{
    			ticks: 
    			{
    				fontSize: 1,
    				beginAtZero: true,
    				maxTicksLimit: 5,
    				min:0,
    				max:100
    			},
    			pointLabels: 
    			{
    				fontSize: 12,
    				color: '#F6490D'
    			},
    			gridLines: 
    			{
    				color: '#FFD768'
    			}
    		}
    	};

    	console.log("---------Rader Data--------");
    	var graphData3 =new Array();
    	graphData3.push(100);
    	graphData3.push(80);
    	graphData3.push(90);
	// graphData.push(20);
	// graphData.push(97);
	
	
	console.log("--------Rader Create-------------");
	console.log(graphData3);

	//CreateData
	chartRadarData3 = {
		labels: ['Cost-effectiveness', 'Time benefit', 'Experience'],
		datasets: [{
			label: "Skill Level",
			backgroundColor: "#2f5c6f",
			borderColor: "rgba(63,63,74,.8)",
			pointBackgroundColor: "rgba(63,63,74,1)",
			pointBorderColor: "rgba(0,0,0,0)",
			pointHoverBackgroundColor: "#fff",
			pointHoverBorderColor: "rgba(0,0,0,0.3)",
			pointBorderWidth: 5,
			data: graphData3}]
		};
		
	//Draw
	var chartRadar3 = new Chart(chartRadarDOM3, {
		type: 'radar',
		data: chartRadarData3,
		options: chartRadarOptions3
	});
</script>


@endsection
