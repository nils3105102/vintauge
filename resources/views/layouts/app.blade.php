<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>{{config('app.name','zVintauge')}}</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="https://www.zerotheme.com">

    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="{{asset('css/zerogrid.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


	<link rel="stylesheet" href="{{asset('css/menu.css')}}">
	<script src="{{asset('js/jquery1111.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/script.js')}}"></script>

	<!-- Owl Carousel Assets -->
    <link href="{{asset('owl-carousel/owl.carousel.css')}}" rel="stylesheet">

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>

<body>
    <div class="wrap-body">
		<header class="">
			<div class="logo">
				<a href="{{url('')}}">zVintauge</a>
				<span>Collectible Vintage & Antique Photos</span>
			</div>
			<div id="cssmenu" class="align-center">
				<ul>
					<li class=""><a href="{{url('')}}"><span>Home</span></a></li>
					<li><a href="{{url('gallery')}}"><span>Gallery</span></a></li>
					<li class=""><a href="{{url('posts')}}"><span>Blog</span></a>
						<!--<ul>
							<li class="has-sub"><a href="#"><span>Item 1</span></a>
								<ul>
									<li><a href="#"><span>Sub Item</span></a></li>
									<li class="last"><a href="#"><span>Sub Item</span></a></li>
								</ul>
							</li>
							<li class="has-sub"><a href="#"><span>Item 2</span></a>
								<ul>
									<li><a href="#"><span>Sub Item</span></a></li>
									<li class="last"><a href="#"><span>Sub Item</span></a></li>
								</ul>
							</li>
						</ul>-->
					</li>
					<li><a href="{{url('single')}}"><span>About</span></a></li>
					<li class="last"><a href="{{url('contact')}}"><span>Contact</span></a></li>
				</ul>
			</div>
			<!--<div id="owl-slide" class="owl-carousel">
				<div class="item">
					<img src="{{asset('images/slide1.jpg')}}" />
				</div>
				<div class="item">
					<img src="{{asset('images/slide2.jpg')}}" />
				</div>
				<div class="item">
					<img src="{{asset('images/slide3.jpg')}}" />

				</div>
			</div>-->
			<section id="container">
				<div class="wrap-container">
					@yield('content')
				</div>
			</section>
		</header>
@include('inc.footer')
		@yield('script')
	</div>
<script>
$(window).on('beforeunload',function(){
	$(window).scrollTop(0);
});
</script>
</body>
</html>
