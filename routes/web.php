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



Auth::routes();

Route::get('/h','WebsiteController@index')->name('index');
Route::get('/category/{id}','WebsiteController@category')->name('category');
Route::get('/post/{id}','WebsiteController@post')->name('post');
Route::get('/page/{id}','WebsiteController@page')->name('page');
Route::get('/contact','WebsiteController@showContact')->name('contact.show');
Route::post('/contact','WebsiteController@submitContact')->name('contact.submit');

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::resource('categories','CategoryController');
    Route::resource('posts','PostController');
    Route::resource('pages','PageController');
    Route::resource('galleries','GalleryController');

});

Route::get('/home', 'HomeController@index')->name('home');

// Frontend Demo
Route::get('/', function () {
    return view('frontend.homepage');
});
Route::get('/profil', function () {
    return view('frontend.profil');
});
Route::get('/galeri', function () {
    return view('frontend.galeri');
});
Route::get('/berita', function () {
    return view('frontend.berita');
});
Route::get('/post', function () {
    return view('frontend.post');
});
