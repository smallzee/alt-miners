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

//user route
Route::group(['namespace'=>'user','prefix' => 'user'],function (){


    Route::middleware(['isStatus'])->group(function (){
        Route::get('/dashboard', "UserController@dashboard")->name('dashboard');
    });
});

// admin route
Route::group(['namespace'=>'admin','prefix'=>'admin'], function (){
    Route::resource('/', "LoginController");

    Route::middleware(['isAdmin', 'isStatus'])->group(function (){

        Route::get('/dashboard', "DashboardController@dashboard")->name('dashboard');

        Route::get('/admin', "AdminController@admin")->name('admin');


        // logout
        Route::get('/logout', "AdminController@logout")->name('logout');

    });
});