<?php

Route::get('/', function () {
    return view('front.index');
});
/*
 * Admin Routes
 */
Route::prefix('admin')->group(function() {

   
        // Dashboard
        Route::get('/', 'DashboardController@index');

        // Products
        Route::resource('/show','ShowsController');
   

        // Logout
        Route::get('logout','AdminUserController@logout');



    // Admin Login
    Route::get('/login', 'AdminUserController@index');
    Route::post('/login', 'AdminUserController@store');
});

/*
 * Front Routes
 */
Route::get('/', 'Front\HomeController@productList');

// User Registration
Route::get('admin/register','Front\RegistrationController@index');
Route::post('/register','Front\RegistrationController@store');


Route::get('/','Front\HomeController@productList'); 