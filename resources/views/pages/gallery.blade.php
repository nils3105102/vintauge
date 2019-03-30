@extends('layouts.app')
@section('content')

		<!--////////////////////////////////////Container-->
				<!-----------------Content-Box-------------------->
				<div id="main-content" class="zerogrid">
					<div class="wrap-content">

						@if(count($images) > 0)


								@foreach($images as $image)
								<div class="row">
									<div class="col-1-3">
										<div class="wrap-col">
											<article>
												<div class="post-thumbnail-wrap">
													<a href="{{asset('images/1')}}{{$image->id}}.jpg" class="portfolio-box" data-fancybox="images" >
														<img src="{{asset('images/1')}}{{$image->id}}.jpg" alt="">
														<div class="portfolio-box-second">
															<img src="images/{{$image->id}}.jpg" alt="">
														</div>
													</a>
												</div>
												<div class="entry-header ">
													<h3 class="entry-title">{{$image->title}}</h3>
													<div class="l-tags"><p>{{$image->created_at}}</p></div>
												</div>
											</article>
										</div>
									</div>
								@endforeach
						<!--	<div class="col-1-3">
								<div class="wrap-col">
									<article>
										<div class="post-thumbnail-wrap">
											<a href="single.html" class="portfolio-box">
												<img src="images/6.jpg" alt="">
												<div class="portfolio-box-second">
													<img src="images/8.jpg" alt="">
												</div>
											</a>
										</div>
										<div class="entry-header ">
											<h3 class="entry-title">Lovely Smiles</h3>
											<div class="l-tags"><a href="#">Design</a> / <a href="#">Illustrations</a></div>
										</div>
									</article>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<article>
										<div class="post-thumbnail-wrap">
											<a href="single.html" class="portfolio-box">
												<img src="images/14.jpg" alt="">
												<div class="portfolio-box-second">
													<img src="images/3.jpg" alt="">
												</div>
											</a>
										</div>
										<div class="entry-header ">
											<h3 class="entry-title">Lovely Smiles</h3>
											<div class="l-tags"><a href="#">Design</a> / <a href="#">Illustrations</a></div>
										</div>
									</article>
								</div>
							</div>-->
						</div>

					</div>
				</div>

				@endif

@endsection
