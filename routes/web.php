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

Route::get('/blog', function() {
    return view('main.blog');
})->name('blog');

Route::get('/contact', function() {
    return view('main.contact');
})->name('contact');

/*Secondary pages section start*/
Route::get('/blog-single', function() {
    return view('main.blog-single');
})->name('blog-single');

Route::get('/moments-details', function() {
    return view('main.moments-details');
})->name('moments-details');
/*Secondary pages section end*/

/*Forms controllers section start*/
Route::match(['get', 'post'], '/email-contact', 'ContactFormController@index')->name('email-contact');
/*Forms controllers section end*/
