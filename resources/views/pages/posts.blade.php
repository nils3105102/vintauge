@extends('layouts.app')
@section('content')
		<!--////////////////////////////////////Container-->

				<!-----------------Content-Box-------------------->
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">
							@if (count($posts) > 0 )
								@foreach($posts as $post)
									<article class="single-post zerogrid">
										<div class="row wrap-post"><!--Start Box-->
											<div class="entry-header">
												<span class="time">{{$post->created_at}}</span>
												<h2 class="entry-title"><a href="{{url('posts')}}/{{$post->id}}">{{$post->title}}</a></h2>
												<!--<span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>-->
											</div>
											<div class="post-thumbnail-wrap">
												<!--<img src="{{asset('images/slide')}}{{$post->id}}.jpg">-->
												<img src="{{asset('images')}}/{{$post->impath}}">
											</div>
											<div class="entry-content">
												<!--<p>{{$post->body}}</p>-->
												<center><a class="button " href="{{url('posts')}}/{{$post->id}}">Read More</a></center>
											</div>
										</div>
									</article>
								@endforeach
							@else
								<p>No posts found<p>
							@endif
						<!--	<article class="single-post zerogrid">
								<div class="row wrap-post">
									<div class="entry-header">
										<span class="time">June 26, 2013  by admin</span>
										<h2 class="entry-title"><a href="#">RETRO GALLERY: FRAGMENTING PERSISTENT FLIGHT AND PATHOLOGY</a></h2>
										<span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>
									</div>
									<div class="post-thumbnail-wrap">
										<img src="images/slide2.jpg">
									</div>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
										<center><a class="button " href="single.html">Read More</a></center>
									</div>
								</div>
							</article>
							<article class="single-post zerogrid">
								<div class="row wrap-post">
									<div class="entry-header">
										<span class="time">June 26, 2013  by admin</span>
										<h2 class="entry-title"><a href="#">RETRO GALLERY: FRAGMENTING PERSISTENT FLIGHT AND PATHOLOGY</a></h2>
										<span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>
									</div>
									<div class="post-thumbnail-wrap">
										<img src="images/slide1.jpg">
									</div>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
										<center><a class="button " href="single.html">Read More</a></center>
									</div>
								</div>
							</article>-->
						</div>
					</div>
				</div>
@endsection
