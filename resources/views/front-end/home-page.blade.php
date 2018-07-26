<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	
<!-- Mirrored from techlinqs.com/html/politics/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jul 2018 10:39:39 GMT -->
@include('front-end.partials.head')
	<body class="bg-pattern">
	
	<!-- Wrapper -->
	<div class="wrapper push-wrapper">

		<!-- Forms -->
		
		<!-- Forms -->

		<!-- Header -->
		@include('front-end.partials.top-navbar')
		<!-- Header -->

		<!-- Banner -->
		<div class="banner">
			<img src="{{URL::asset('bos-assets/images/banner/bg3.jpg')}}" alt="">
			<div class="banner-overay">
				<div class="container">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="caption h-white p-white">
							<h3 class="font-cinzel">Welcome to Bureau of Statistics</h3>
							<p>Bureau of Statistics is a provincial statistical organization and an attached department of Planning & Development Department mandated to collect, compile, analyze and disseminate official statistics relating to economic, social, demographic and other important dimensions . Its aim is to provide timely and good quality data to facilitate data users especially in context of quantitative analysis, informed decision-making, evidence-based planning, monitoring & evaluation and research.</p>
							<!-- <img class="signature" src="{{URL::asset('bos-assets/images/signature.png')}}" alt=""> -->
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-7 col-xs-7">
						<div class="banner-layer">
							<form >
									<input type="text" placeholder="Search Data" class="form-control">
									<input type ='submit' class="btn lg form-control" value="Search">
								</form>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<!-- Banner -->

		<!-- Main Contetn -->
			<!-- About Contribution -->
			<!-- <section class="about-contribution">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="my-mission contribution-wigdet">
								<span class="theme-color font-montserrat">MY MISSION</span>
								<h4>Learn about <span class="theme-color">Adam’s vision</span> and the issues He’ll fight.</h4>
								<p>Hillary for America Foreign Policy Advisor Laura Rosenberger Issues Statement on the 25th Anniversary of Ukraine’s IndependenceHillary for America Foreign Policy Advisor Laura Rosenberger Issues Issues Statement on the Statement on the 25th Anniversary.</p>
								<p>Everything you need to know about Hillary and Tim Please Email <a href="#">info@adamsrooth.com</a></p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="contribution-tabs">
							  	<ul class="nav-tabs" role="tablist">
							    	<li class="active"><a href="#contribution" role="tab" data-toggle="tab">Contribution</a></li>
							    	<li><a href="#profile" role="tab" data-toggle="tab">Volunteers</a></li>
							  	</ul>
							  	<div class="tab-content">
							    	<div role="tabpanel" class="tab-pane active" id="contribution">
							    		<div class="contribution content-wigdet">
							    			<p>OUR CAMPAIGN IS POWERED BY SUPPORTERS LIKE YOU</p>
							    			<strong class="font-montserrat">$734,234</strong>
							    			<p><b>Contiributions So Far</b></p>
							    			<div class="range-slider">
							    				<input type="range">
							    			</div>
							    			<a class="btn" href="#">Contribute Now</a>
							    		</div>
							    	</div>
							    	<div role="tabpanel" class="tab-pane" id="profile">
							    		<div class="contribution content-wigdet">
							    			<p>OUR CAMPAIGN IS POWERED BY SUPPORTERS LIKE YOU</p>
							    			<strong class="font-montserrat">1,809</strong>
							    			<p>Volunteers Registerd so far</p>
							    			<ul class="click-users">
							    				<li><a class="icon-man color" href="#"></a></li>
							    				<li><a class="icon-man color" href="#"></a></li>
							    				<li><a class="icon-man color" href="#"></a></li>
							    				<li><a class="icon-man color" href="#"></a></li>
							    				<li><a class="icon-man color" href="#"></a></li>
							    				<li><a class="icon-man color" href="#"></a></li>
							    				<li><a class="icon-man" href="#"></a></li>
							    				<li><a class="icon-man" href="#"></a></li>
							    				<li><a class="icon-man" href="#"></a></li>
							    				<li><a class="icon-man" href="#"></a></li>
							    			</ul>
							    			<a class="btn" href="#">Contribute Now</a>
							    		</div>
							    	</div>
							  	</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="join-us contribution-wigdet">
								<span class="theme-color font-montserrat">JOIN MY MOVEMNET</span>
								<h4>Learn about Hillary’s vision and the issues she’ll fight for as president.</h4>
								<p>By clicking "Text me", you agree that you receive periodic text messages from Hillary for America.</p>
								<form>
									<div class="form-group">
										<input type="text" placeholder="Enter Valid Email Address" class="form-control">
									</div>
									<div class="form-group width-btn">
										<input type="text" placeholder="Postel Code" class="form-control">
										<a class="btn" href="#">Count me In</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!-- About Contribution -->

			<!-- categories -->
			@include('front-end.partials.categories')
					<!-- categories -->

			<!-- publications -->
			@include('front-end.partials.publications')

			<!-- Featured News -->
			@include('front-end.partials.news')

			
			<!-- Brands Icons -->
			<!-- <div class="brands-icon">
				<div class="container">
					<ul id="brands-icon-slider" class="brands-icon-slider">
						<li><a href="#"><img src="{{URL::asset('bos-assets/images/brands/img-02.jpg')}}" alt=""></a></li>
						<li><a href="#"><img src="{{URL::asset('bos-assets/images/brands/img-03.jpg')}}" alt=""></a></li>
						<li><a href="#"><img src="{{URL::asset('bos-assets/images/brands/img-04.jpg')}}" alt=""></a></li>
						<li><a href="#"><img src="{{URL::asset('bos-assets/images/brands/img-05.jpg')}}" alt=""></a></li>
						<li><a href="#"><img src="{{URL::asset('bos-assets/images/brands/img-04.jpg')}}" alt=""></a></li>
					</ul>
				</div>
			</div> -->
			<!-- Brands Icons -->

		</main>
		<!-- Main Contetn -->

		<!-- Footer -->
		@include('front-end.partials.footer')
		<!-- Footer -->
	</div>
	<!-- Wrapper -->

	<!-- Java Script -->
	@include('front-end.partials.js-libraries')					
	</body>

<!-- Mirrored from techlinqs.com/html/politics/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jul 2018 10:43:04 GMT -->
</html>