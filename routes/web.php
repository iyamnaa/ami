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

Route::get('/coba', function () {
    return public_path('/images/'.'logo.jpg');
})->name('coba');

Route::get('/tentang-kami', 'HomeController@about')->name('about');

Route::group(['prefix' => 'campaign'], function(){
  Route::get('/', 'CampaignController@front')->name('campaigns.front');
  Route::get('/{id}', 'CampaignController@campaignDetail')->name('campaigns.detail');
  Route::get('/update/{id}', 'CampaignUpdateController@update')->name('campaigns.update')->middleware('verified');
  Route::post('/save', 'WishlistController@campaignSave')->name('campaigns.save')->middleware('verified');

  Route::group(['prefix' => 'report'], function(){
    Route::get('/{id}', 'CampaignReportController@report')->name('campaigns.report')->middleware('verified');
    Route::post('/save', 'CampaignReportController@save')->name('report.save')->middleware('verified');
  });
});

Route::group(['prefix' => 'zakat'], function(){
  Route::get('/', 'ZakatController@front')->name('zakats.front');
  Route::get('/detail', 'ZakatController@payment')->name('zakats.payment')->middleware('verified');
  Route::post('/transaction-token', 'ZakatController@getSnapToken')->name('zakats.transactionToken');
  Route::post('/save-transaction', 'ZakatController@saveTransaction')->name('zakats.saveTransaction');
});

Route::group(['prefix' => 'donasi'], function(){
  Route::get('/detail', 'DonationController@payment')->name('donations.payment')->middleware('verified');
  Route::post('/transaction-token', 'DonationController@getSnapToken')->name('donations.transactionToken');
  Route::post('/save-transaction', 'DonationController@saveTransaction')->name('donations.saveTransaction');
});

Route::group(['prefix' => 'profil'], function(){
  Route::get('/{username}', 'UserController@front')->name('users.front');
  Route::get('/edit/{username}', 'UserController@profilEdit')->name('users.edit')->middleware('verified');
  Route::post('/edit/{username}', 'UserController@profilUpdate')->name('profil.update')->middleware('verified');
});

Route::group(['prefix' => 'berita'], function(){
  Route::get('/', 'NewController@index')->name('news.front');
});

Route::post('/payment/notification/handler','NotificationController@notification')->name('notification.handler');
// Auth::routes();

Auth::routes(['verify' => true]);
Route::get('/sign-out', '\App\Http\Controllers\Auth\LoginController@logout')->name('user.logout');
// Route::get('/home', 'HomeController@index')->middleware('verified');

Route::group(['prefix' => 'admin', 'middleware' => ['verified', 'admin'] ], function(){
  Route::get('/', 'HomeController@home')->name('home');
  
  Route::resource('events', 'EventController');
  Route::resource('news', 'NewsController');
  Route::resource('campaigns', 'CampaignController');
  Route::resource('users', 'UserController');
  Route::resource('zakats', 'ZakatController');
  Route::resource('donations', 'DonationController');
  Route::resource('campaignCategories', 'CampaignCategoryController');
  Route::resource('campaignReports', 'CampaignReportController');
  Route::resource('campaignUpdates', 'CampaignUpdateController');
  Route::resource('campaignReports', 'CampaignReportController');
  Route::resource('campaignUpdates', 'CampaignUpdateController');
  Route::resource('reportCategories', 'ReportCategoryController');
  Route::resource('wishlists', 'WishlistController');
});
