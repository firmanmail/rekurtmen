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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('create/sms', 'SmsController@create')->name('notifikasi.sms.create');
Route::post('kirim/sms', 'SmsController@store')->name('kirim.sms');

Route::get('create/email', 'NotifikasiController@create')->name('notifikasi.email.create');
Route::post('kirim/email', 'NotifikasiController@store')->name('kirim.email');

Route::group(['prefix' => 'home'], function(){
    Route::get('index', 'RekurtController@index')->name('backend.home.index');
    Route::get('create', 'RekurtController@create')->name('backend.pengguna.create');
});

Route::group(['prefix' => 'pengguna'], function(){
    Route::get('index', 'PenggunaController@index')->name('backend.pengguna.index');
    Route::get('create', 'PenggunaController@create')->name('backend.pengguna.create');
    Route::post('store', 'PenggunaController@store')->name('backend.pengguna.store');
    Route::get('edit/{pengguna}' , 'PenggunaController@edit')->name('backend.pengguna.edit');
    Route::patch('update/{pengguna}' , 'PenggunaController@update')->name('backend.pengguna.update');
    Route::delete('delete/{pengguna}', 'PenggunaController@destroy')->name('backend.pengguna.delete');
    Route::get('show/{pengguna}' , 'PenggunaController@show')->name('backend.pengguna.show');
});

Route::group(['prefix' => 'pelamar'], function(){
    Route::get('index', 'PelamarController@index')->name('backend.pelamar.index');
    Route::get('create', 'PelamarController@create')->name('backend.pelamar.create');
    Route::post('store', 'PelamarController@store')->name('backend.pelamar.store');
    Route::get('edit/{pelamar}' , 'PelamassrController@edit')->name('backend.pelamar.edit');
    Route::patch('update/{pelamar}' , 'PelamarController@update')->name('backend.pelamar.update');
    Route::delete('delete/{pelamar}', 'PelamarController@destroy')->name('backend.pelamar.delete');
    Route::get('show/{pelamar}' , 'PelamarController@show')->name('backend.pelamar.show');
});

Route::group(['prefix' => 'penerima'], function(){
    Route::get('index', 'PenerimaController@index')->name('backend.penerima.index');
    Route::get('create', 'PenerimaController@create')->name('backend.penerima.create');
    Route::post('store', 'PenerimaController@store')->name('backend.penerima.store');
    Route::get('edit/{penerima}' , 'PenerimaController@edit')->name('backend.penerima.edit');
    Route::patch('update/{penerima}' , 'PenerimaController@update')->name('backend.penerima.update');
    Route::delete('delete/{penerima}', 'PenerimaController@destroy')->name('backend.penerima.delete');
    Route::get('show/{penerima}' , 'PenerimaController@show')->name('backend.penerima.show');
});

Route::group(['prefix' => 'bagian'], function(){
    Route::get('index', 'BagianController@index')->name('backend.bagian.index');
    Route::get('create', 'BagianController@create')->name('backend.bagian.create');
    Route::post('store', 'BagianController@store')->name('backend.bagian.store');
    Route::get('edit/{bagian}' , 'BagianController@edit')->name('backend.bagian.edit');
    Route::patch('update/{bagian}' , 'BagianController@update')->name('backend.bagian.update');
    Route::delete('delete/{bagian}', 'BagianController@destroy')->name('backend.bagian.delete');
    Route::get('show/{bagian}' , 'BagianController@show')->name('backend.bagian.show');
});

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
});