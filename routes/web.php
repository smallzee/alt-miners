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

        Route::get('/dashboard', "AdminController@dashboard")->name('dashboard');

        Route::get('/admin', "AdminController@admin")->name('admin');


        Route::get('/users', "UserController@users")->name('user');

        // role
        Route::get('/role', "RoleController@role")->name('role');
        Route::get('/edit-role/{id}', "RoleController@edit_role")->name('edit_role');
        Route::post('/update_role', "RoleController@update_role")->name('update_role');
        Route::post('/update_user_role', "RoleController@update_user_role")->name('update_user_role');

        // country
        Route::get('/country', "CountryController@country")->name('country');

        Route::post('/create_new_role', "RoleController@create_new_role")->name('create_new_role');
        Route::get('/change-role/{id}', "RoleController@change_role")->name('change_role');

        // settings
        Route::get('/settings', "SettingsController@settings")->name('settings');
        Route::post('/update_settings', "SettingsController@update_settings")->name('update_settings');

        // logout
        Route::get('/logout', "AdminController@logout")->name('logout');

    });
});