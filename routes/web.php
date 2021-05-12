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

Route::get("/", "MyController@index")->name('index');
Route::get("about", "MyController@about")->name('about');
Route::get("gallery", "MyController@gallery")->name('gallery');
Route::get("faq", "MyController@faq")->name('faq');

Route::group(['namespace'=>'account','prefix'=>'account'], function (){
    Route::resource("login", "LoginController");
    Route::resource("create", "CreateController");
});

