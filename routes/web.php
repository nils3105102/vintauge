<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/', 'PagesController@index');
//Route::get('/posts', 'PagesController@posts');
Route::get('/contact', 'PagesController@contact');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/single', 'PagesController@single');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
