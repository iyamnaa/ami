<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

Route::get('/tentang-kami', 'AlmsController@index')->name('aboutus');


Route::group(['prefix' => 'donasi'], function(){
  Route::get('/', 'DonationController@index')->name('donation.index');
});

Route::group(['prefix' => 'zakat'], function(){
  Route::get('/', 'AlmsController@index')->name('alms.index');
});

Route::group(['prefix' => 'profil'], function(){
  Route::get('/', 'UserController@index')->name('user.index');
});

Route::group(['prefix' => 'berita'], function(){
  Route::get('/', 'NewsController@index')->name('news.index');
});