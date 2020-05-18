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
    return view('main.main');
})->name('/');

Route::get('/about', function() {
    return view('main.about');
})->name('about');

Route::get('/services', function() {
    return view('main.services');
})->name('services');

Route::get('/portfolio', function() {
    return view('main.portfolio');
})->name('portfolio');

Route::get('/testimonials', function() {
    return view('main.testimonials');
})->name('testimonials');

Route::get('/pricing', function() {
    return view('main.pricing');
})->name('pricing');

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

Route::get('/portfolio-details', function() {
    return view('main.portfolio-details');
})->name('portfolio-details');
/*Secondary pages section end*/

/*Forms controllers section start*/
Route::match(['get', 'post'], '/email-contact', 'ContactFormController@index')->name('email-contact');
/*Forms controllers section end*/
