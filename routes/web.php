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
})->name('moments');

Route::get('/blog', 'BlogController@show')->name('blog');

Route::get('/contact', function() {
    return view('main.contact');
})->name('contact');

/*Secondary pages section start*/
Route::get('/blog-single/{postId?}', 'BlogSingleController@show')->name('blog-single');

Route::get('/moments-details', function() {
    return view('main.moments-details');
})->name('moments-details');
/*Secondary pages section end*/

/*Forms controllers section start*/
Route::match(['get', 'post'], '/email-contact', 'ContactFormController@index')->name('email-contact');

Route::match(['get', 'post'], '/comment/{postId?}', 'CommentController@send')->name('comment');
/*Forms controllers section end*/

/*Voyager controllers section start*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/*Voyager controllers section end*/
