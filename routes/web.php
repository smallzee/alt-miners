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
Route::get("contact", "MyController@contact")->name('contact');
Route::get("cloud-pricing", "MyController@cloud_pricing")->name('cloud_pricing');
Route::get("doge-pricing", "MyController@doge_pricing")->name('doge_pricing');

Route::group(['namespace'=>'account','prefix'=>'account'], function (){
    Route::resource("login", "LoginController");
    Route::resource("create", "CreateController");
});

//user route
Route::group(['namespace'=>'user','prefix' => 'user'],function (){

    Route::middleware(['isStatus'])->group(function (){

        Route::get("kyc", "KycController@kyc")->name('kyc');
        Route::post("upload_kyc", "KycController@upload_kyc")->name('upload_kyc');

        Route::middleware(['isKycVerified',])->group(function (){
            Route::get('/dashboard', "UserController@dashboard")->name('dashboard');

            // logout
            Route::get('/logout', "UserController@logout")->name('logout');
        });
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

        // pricing
        Route::get('/add-pricing', "PricingController@add_pricing")->name('add_pricing');
        Route::get('/cloud-pricing', "PricingController@cloud_pricing")->name('cloud_pricing');
        Route::get('/doge-pricing', "PricingController@doge_pricing")->name('doge_pricing');
        Route::post('/create_new_cloud_pricing', "PricingController@create_new_cloud_pricing")->name('create_new_cloud_pricing');


        // kyc
        Route::get('/kyc', "KycController@kyc")->name('kyc');
        Route::get('/edit-kyc/{id}', "KycController@edit_kyc")->name('edit_kyc');
        Route::get('/view-user-kyc/{user_id}', "KycController@view_user_kyc")->name('view_user_kyc');
        Route::get('/kyc-users/{kyc_status}', "KycController@kyc_users")->name('kyc_users');
        Route::post('/create_new_kyc_type', "KycController@create_new_kyc_type")->name('create_new_kyc_type');
        Route::post('/confirm_user_kyc', "KycController@confirm_user_kyc")->name('confirm_user_kyc');
        Route::post('/edit_kyc_type', "KycController@edit_kyc_type")->name('edit_kyc_type');

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