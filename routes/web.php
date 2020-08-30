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
Route::get('/sign-out', 'verified/LoginController@logout')->name('user.logout')->middleware('verified');

Route::get('/get-token', function () {
    return csrf_token();
})->name('csrftoken');

Route::get('/tentang-kami', 'HomeController@about')->name('about');

Route::group(['prefix' => 'campaign'], function(){
  Route::get('/', 'CampaignController@front')->name('campaigns.front');
  Route::get('/{id}', 'CampaignController@campaignDetail')->name('campaigns.detail');
  Route::get('/laporkan/{id}', 'CampaignReportController@report')->name('campaigns.report')->middleware('verified');
  Route::post('/save', 'WishlistController@campaignSave')->name('campaigns.save')->middleware('verified');
});

Route::group(['prefix' => 'zakat'], function(){
  Route::get('/', 'ZakatController@front')->name('zakats.front');
  Route::get('/detail', 'ZakatController@payment')->name('zakats.payment')->middleware('verified');
  Route::post('/transaction-token', 'ZakatController@getSnapToken')->name('zakats.transactionToken');
  Route::post('/save-transaction', 'ZakatController@saveTransaction')->name('zakats.saveTransaction');
});

Route::group(['prefix' => 'profil'], function(){
  Route::get('/{username}', 'UserController@front')->name('users.front');
});

Route::group(['prefix' => 'berita'], function(){
  Route::get('/', 'NewController@index')->name('news.front');
});

Route::post('/payment/notification/handler','NotificationController@notification')->name('notification.handler');
// Auth::routes();

Auth::routes(['verify' => true]);
// Route::get('/home', 'HomeController@index')->middleware('verified');

Route::group(['prefix' => 'admin', 'middleware' => ['verified', 'admin'] ], function(){
  Route::get('/', 'HomeController@home')->name('home')->middleware('verified');
  
  Route::resource('events', 'EventController')->middleware('verified');
  Route::resource('news', 'NewsController')->middleware('verified');
  Route::resource('campaigns', 'CampaignController')->middleware('verified');
  Route::resource('users', 'UserController')->middleware('verified');
  Route::resource('zakats', 'ZakatController')->middleware('verified');
  Route::resource('donations', 'DonationController')->middleware('verified');
  Route::resource('campaignCategories', 'CampaignCategoryController')->middleware('verified');
  Route::resource('campaignReports', 'CampaignReportController')->middleware('verified');
  Route::resource('campaignUpdates', 'CampaignUpdateController')->middleware('verified');
  Route::resource('campaignReports', 'CampaignReportController')->middleware('verified');
  Route::resource('campaignUpdates', 'CampaignUpdateController')->middleware('verified');
  Route::resource('reportCategories', 'ReportCategoryController')->middleware('verified');
  Route::resource('wishlists', 'WishlistController')->middleware('verified');
});
