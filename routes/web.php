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

Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');

Route::get('/page/{id}','FrontController@page')->name('page');
Route::get('/contact','FrontController@showContact')->name('contact.show');
Route::post('/contact','FrontController@submitContact')->name('contact.submit');

//  Admin
Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/menu', 'HomeController@menu')->name('menu');
    Route::resource('categories','CategoryController');
    Route::resource('posts','PostController');
    Route::resource('pages','PageController');
    Route::resource('galleries','GalleryController');
    Route::resource('choices','ChoiceController');
    Route::resource('banners','BannerController');

});

Route::get('/home', 'HomeController@index')->name('home');
//  Frontend
Route::get('/', 'FrontController@index')->name('homepage');
Route::get('/profil', 'FrontController@profile')->name('profile');
Route::get('/berita','FrontController@news')->name('news');
Route::get('/category/{id}','FrontController@category')->name('category');
Route::get('/post/{slug}','FrontController@post')->name('post');

Route::get('/galeri','FrontController@gallery')->name('galery.index');
Route::get('/galeri/{name}','FrontController@showGallery')->name('galeri.show');