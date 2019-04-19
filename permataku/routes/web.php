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
Auth::routes();

Route::get('/', function () {
    return view('home');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'agen'], function() {

    Route::get('/daftaragen','HomeController@daftaragen');
    Route::post('/insert','AgenController@insert');
    Route::get('/daftarsukses','HomeController@daftarsukses');
    Route::get('/dashboard','AgenController@dashboard');
});
Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard','AdminController@dashboard')->middleware('admin');
});