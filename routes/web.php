<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.main');
})->name('/');

Route::get('/about', function() {
    return view('main.about');
})->name('about');

Route::get('/moments', function() {
    return view('main.moments');
})->name('moments')->middleware('auth');

Route::get('/blog', 'BlogController@show')->name('blog')->middleware('auth');

Route::get('/contact', function() {
    return view('main.contact');
})->name('contact');

/*Secondary pages section start*/
Route::get('/blog-single/{postId?}', 'BlogSingleController@show')->name('blog-single')->middleware('auth');

Route::get('/moments-details', function() {
    return view('main.moments-details');
})->name('moments-details')->middleware('auth');
/*Secondary pages section end*/

/*Forms controllers section start*/
Route::match(['get', 'post'], '/email-contact', 'ContactFormController@index')->name('email-contact');

Route::match(['get', 'post'], '/comment/{postId?}', 'CommentController@send')->name('comment');

Route::match(['get', 'post'], '/subscribe', 'SubscribeController@index')->name('subscribe');
/*Forms controllers section end*/

/*Voyager controllers section start*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/*Voyager controllers section end*/

/*Auth rotes section start*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/register', function() {
    return view('auth.register');
})->name('register');

Route::get('/logout', function() {
    Auth::logout();

    return view('main.main');
})->name('logout');
/*Auth routes section end*/
