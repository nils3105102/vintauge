<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Image;

class PagesController extends Controller
{
    //
    public function index(){
        /*$data = [
            'title'=>'About us',
            'description'=>'Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla <br>fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. <br>Aliquam et elit eu nunc rhoncus viverra quis at felis. Sed do',
            'phraseName'=>'OUR PHILOSOPHY',
            'phrase'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.',
            'citate'=>'Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista.'
        ];*/
        $posts = Post::orderBy('created_at','desc')->get();
        return view('pages.index')->with('posts', $posts);
    }
    public function posts(){
        return view('pages.posts');
    }
    public function contact(){
        $title = 'Contact Form';
        return view('pages.contact')->with('title',$title);
    }
    public function gallery(){

        $images = Image::orderBy('created_at','desc')->get();
        return view('pages.gallery')->with('images',$images);
    }
    public function single(){
        return view('pages.single');
    }
}
