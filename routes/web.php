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

Route::get('/', function () {
    Log::warn('some warning - '. now());
    Log::error('some warning - '. now());    
    return view('welcome');
});

Route::get('/log-image', function () {
    Log::error('image: '. file_get_contents(storage_path('images/screenshot.png')));
    return view('welcome');
});

Route::get('/phpinfo', function () {
    echo phpinfo();
});
