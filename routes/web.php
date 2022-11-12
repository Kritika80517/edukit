<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about/', function(){
    return view('front/about');
});
Route::get('contact/', function(){
    return view('front/contact');
});
Route::get('elements/', function(){
    return view('front/elements');
});
Route::get('index/', function(){
    return view('front/index');
});
Route::get('post/', function(){
    return view('front/post');
});
Route::get('services/', function(){
    return view('front/services');
});
Route::get('single-post', function(){
    return view('front/single-post');
});
Route::get('privacy-policy', function(){
    return view('front/privacy-policy');
});
Route::get('interview-ques', function(){
    return view('front/interview-ques');
});