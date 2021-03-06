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
    return view('coba');
});

Route::get('/test/{angka}', function($angka){
    return view('test', ["angka" => $angka]);
});

Route::get('/signup', function(){
    return view('signup');
});

Route::get('/hallo/{nama}', function($nama){
    return "Hallo $nama";
});

Route::get('/form', 'RegisterController@form');

Route::get('/sapa', 'RegisterController@sapa');
Route::post('/sapa', 'RegisterController@sapa_post');

// Route::coba('/coba', 'RegisterController@coba');

