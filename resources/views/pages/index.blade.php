@extends('layouts.app')
@section('content')


<div id="owl-slide" class="owl-carousel">
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="item">
				<img src="{{asset('images/slide')}}{{$post->id}}.jpg" />
			</div>
		@endforeach
	@endif

	</div>
</div>

				<section class="content-box box-1">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header">
								<h2>About us</h2>
							</div>
							<div class="box-content">
								<p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla <br>fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. <br>Aliquam et elit eu nunc rhoncus viverra quis at felis. Sed do</p>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-2-------------------->
				<section class="content-box box-style-1 box-2">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="row">
								@foreach(App\Image::orderBy('created_at','desc')->get() as $image)
									<div class="col-1-3">
										<div class="wrap-col">
											<article>
												<div class="post-thumbnail-wrap">
													<a href="{{asset('images/1')}}{{$image->id}}.jpg" class="portfolio-box" data-fancybox="images">
														<img src="{{asset('images/1')}}{{$image->id}}.jpg" alt="">
														<div class="portfolio-box-second">
															<img src="images/{{$image->id}}.jpg" alt="">
														</div>
													</a>
												</div>
												<div class="entry-header ">
													<h3 class="entry-title">{{$image->title}}</h3>

												</div>
											</article>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-3-------------------->
				<section class="content-box box-3">
					<div class="zerogrid">
						<div class="wrap-box"><!--Start Box-->
							<div class="box-header">
								<h2>OUR PHILOSOPHY</h2>
							</div>
							<div class="box-content">
								<div class="row">
									<div class="col-1-2">
										<div class="wrap-col">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
										</div>
									</div>
									<div class="col-1-2">
										<div class="wrap-col">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
										</div>
									</div>
								</div>
								<div class="row">
									<blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista.</p></blockquote>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-4-------------------->
				<section class="content-box box-style-1 box-4">
					<div class="zerogrid" style="width: 100%">
						<div class="wrap-box"><!--Start Box-->
							@if(count($posts) > 0)
								@foreach($posts as $post)

										<div class="row">
											<article>
												@if($post->id % 2 != 0)
													<div class="col-1-2">
														<img src="{{asset('images/slide')}}{{$post->id}}.jpg" alt="">
													</div>
												@else
												<div class="col-1-2 f-right">
													<img src="{{asset('images/slide')}}{{$post->id}}.jpg" alt="">
												</div>
												@endif
												<div class="col-1-2">
													<div class="entry-content t-center">
														<h3>{{$post->title}}</h3>
														<p>{{$post->body}}</p>
														<a class="button" href="{{url('posts')}}/{{$post->id}}">Read More</a>
													</div>
												</div>
											</article>
										</div>
								@endforeach
							@endif
							<!--<div class="row">
								<article>
									<div class="col-1-2 f-right">
										<img src="images/slide2.jpg" alt="">
									</div>
									<div class="col-1-2">
										<div class="entry-content t-center">
											<h3>The title on the article</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
											<a class="button" href="single.html">Read More</a>
										</div>
									</div>
								</article>
							</div>
							<div class="row">
								<article>
									<div class="col-1-2">
										<img src="images/slide3.jpg" alt="">
									</div>
									<div class="col-1-2">
										<div class="entry-content t-center">
											<h3>The title on the article</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
											<a class="button" href="single.html">Read More</a>
										</div>
									</div>
								</article>
							</div>-->
						</div>
					</div>
				</section>
@endsection

		<!--////////////////////////////////////Footer-->

		<!-- carousel -->
@section('script')
		<script src="{{asset('owl-carousel/owl.carousel.js')}}"></script>
		<script>
		$(document).ready(function() {
		  $("#owl-slide").owlCarousel({
			autoPlay: 3000,
			items : 1,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [979,1],
			itemsTablet : [768, 1],
			itemsMobile : [479, 1],
			navigation: true,
			navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
			pagination: false
		  });
		});
		</script>
@endsection
