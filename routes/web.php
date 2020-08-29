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

Route::get('/', 'HomeController@index')->name('index');
Route::post('/', 'HomeController@searchByCategory')->name('index.category');
Route::get('/sign-out', 'Auth/LoginController@logout')->name('user.logout')->middleware('auth');

Route::get('/get-token', function () {
    return csrf_token();
})->name('csrftoken');

Route::get('/tentang-kami', 'HomeController@about')->name('about');

Route::group(['prefix' => 'donasi'], function(){
  Route::get('/', 'CampaignController@front')->name('campaigns.front');
});

Route::group(['prefix' => 'zakat'], function(){
  Route::get('/', 'ZakatController@front')->name('zakats.front');
  Route::get('/detail', 'ZakatController@payment')->name('zakats.payment');
  Route::post('/transaction-token', 'ZakatController@getSnapToken')->name('zakats.transactionToken');
  Route::post('/save-transaction', 'ZakatController@saveTransaction')->name('zakats.saveTransaction');
});

Route::group(['prefix' => 'profil'], function(){
  Route::get('/', 'UserController@front')->name('users.front');
});

Route::group(['prefix' => 'berita'], function(){
  Route::get('/', 'NewController@index')->name('news.front');
});

Route::post('/payment/notification/handler','NotificationController@notification')->name('notification.handler');
Auth::routes();

// Auth::routes(['verify' => true]);
// Route::get('/home', 'HomeController@index')->middleware('verified');

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'HomeController@home')->name('home')->middleware('auth');
  
  Route::resource('events', 'EventController')->middleware('auth');
  Route::resource('news', 'NewsController')->middleware('auth');
  Route::resource('campaigns', 'CampaignController')->middleware('auth');
  Route::resource('users', 'UserController')->middleware('auth');
  Route::resource('zakats', 'ZakatController')->middleware('auth');
  Route::resource('donations', 'DonationController')->middleware('auth');
  Route::resource('campaignCategories', 'CampaignCategoryController')->middleware('auth');
  Route::resource('campaignReports', 'CampaignReportController')->middleware('auth');
  Route::resource('campaignUpdates', 'CampaignUpdateController')->middleware('auth');
  Route::resource('campaignReports', 'CampaignReportController')->middleware('auth');
  Route::resource('campaignUpdates', 'CampaignUpdateController')->middleware('auth');
  Route::resource('reportCategories', 'ReportCategoryController')->middleware('auth');
  Route::resource('wishlists', 'WishlistController')->middleware('auth');
});
