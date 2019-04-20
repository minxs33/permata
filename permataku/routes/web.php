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

Route::get('/daftaragen','HomeController@daftaragen');
Route::get('/daftarsukses','HomeController@daftarsukses');
Route::group(['prefix' => 'agen'], function() {

    // Daftar
    Route::post('/insert','AgenController@insert');
    // Dashboard
    Route::get('/dashboard','AgenController@dashboard')->middleware('agen');
    Route::get('/transaksi','AgenController@transaksiPage')->middleware('agen');
    Route::get('/getID','AgenController@getID');
    Route::post('/insertPelanggan','AgenController@insertPelanggan');

});
Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard','AdminController@dashboard')->middleware('admin');
});