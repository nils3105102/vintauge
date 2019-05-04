@extends('layouts.app')
@section('content')
<div class="zerogrid">
    <div class="comments-are">
        <div id="comment">
            <h3>Edit Post</h3>
            <form name="comment_form" id="comment_form" method="post" action="{{action('PostsController@update', $post->id)}}  " enctype="multipart/form-data">
                {{ csrf_field() }}
                <label>
                <span>Title of the post:</span>
                <input type="text"  name="title" id="name" value="{{$post->title}}" required>
                </label>
                <label>
                <span>Description of the post:</span>
                <textarea name="body" id="message"  required>{{$post->body}}</textarea>
                </label>
                <input type="file" name="impath">
                <img src="{{url('images')}}/{{$post->impath}}" alt="">
                <input type="hidden" name="_method" value="PUT"> 
                <center><input class="sendButton" type="submit" name="submitcomment" value="Submit"></center>
            </form>
        </div>
    </div>
</div>
@endsection
