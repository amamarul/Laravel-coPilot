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
//dd($_SERVER['REMOTE_ADDR']);
Route::get('/', function () {
    //Mail::to('davidrobinson117@gmail.com')->send(new \App\Mail\Test());
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
   Route::get('/', 'AdminController@home');
});
