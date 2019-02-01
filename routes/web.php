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
    return view('welcome');
});

Route::get('/aktivis', function(){
    return view('aktivis');   
});

Route::post('/aktivis', 'AktivisController@storeAktivis');

Route::get('/view', 'AktivisController@viewAktivis');
Route::get('/update/{id}', 'AktivisController@updateName');
Route::post('/delete', 'AktivisController@deleteAktivis');

