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
												<!--<img src="{{asset('images/slide')}}{{$post->id}}.jpg">-->
												<img src="{{url('images')}}/{{$post->impath}}">
											</div>
											<div class="entry-content">
												<p>{{$post->body}}</p>
											</div>
											<div class="entry-content">
												<!--<p>{{$post->body}}</p>-->
												<center><a class="button " href="{{url('posts')}}/{{$post->id}}/edit">Edit</a></center>

												<form name="comment_form" id="comment_form" method="post" action="{{action('PostsController@destroy', $post->id)}}  " enctype="multipart/form-data">
														{{ csrf_field() }}

														<input type="hidden" name="_method" value="DELETE">
														<input class="sendButton" type="submit" name="submitcomment" value="Delete">
												</form>
											</div>
										</div>


									</article>
						</div>
					</div>
				</div>



@endsection
