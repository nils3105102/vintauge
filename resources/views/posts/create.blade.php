@extends('layouts.app')
@section('content')
<div class="zerogrid">
    <div class="comments-are">
        <div id="comment">
            <h3>Create Post</h3>
            <form name="comment_form" id="comment_form" method="post" action="{{action('PostsController@store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label>
                <span>Title of the post:</span>
                <input type="text"  name="title" id="name" required>
                </label>
                <label>
                <span>Description of the post:</span>
                <textarea name="body" id="message" required></textarea>
                </label>
                <input type="file" name="impath">
                <center><input class="sendButton" type="submit" name="submitcomment" value="Submit"></center>
            </form>
        </div>
    </div>
</div>
@endsection
