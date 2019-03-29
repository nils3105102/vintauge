@extends('layouts.app')
@section('content')
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">

									<article class="single-post zerogrid">
										<div class="row wrap-post"><!--Start Box-->
											<div class="entry-header">
												<span class="time">{{$post->created_at}}</span>
												<h2 class="entry-title">{{$post->title}}</h2>
												<!--<span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>-->
											</div>
											<div class="post-thumbnail-wrap">
												<img src="{{asset('images/slide')}}{{$post->id}}.jpg">
											</div>
											<div class="entry-content">
												<p>{{$post->body}}</p>
											</div>
										</div>
									</article>
						</div>
					</div>
				</div>



@endsection
