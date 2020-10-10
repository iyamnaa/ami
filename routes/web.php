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
Route::get('/home', 'HomeController@index')->name('index');
Route::post('/', 'HomeController@searchByCategory')->name('index.category');
Route::get('/sign-out', 'verified/LoginController@logout')->name('user.logout')->middleware('auth', 'verified');

Route::get('/coba', function () {
    return public_path('/images/'.'logo.jpg');
})->name('coba');

Route::get('/coba', 'HomeController@coba')->name('index1');
Route::get('/coba2', 'HomeController@coba2')->name('index2');

Route::get('/tentang-kami', 'HomeController@about')->name('about');
Route::get('/syarat-ketentuan', 'FAQController@syaratKetentuan')->name('syarat.ketentuan');

Route::group(['prefix' => 'campaign'], function(){
  Route::get('/', 'CampaignController@front')->name('campaigns.front');
  Route::get('/{id}', 'CampaignController@campaignDetail')->name('campaigns.detail');
  Route::post('/save', 'WishlistController@campaignSave')->name('campaigns.save')->middleware('auth','verified');

  Route::group(['prefix' => 'report'], function(){
    Route::get('/{id}', 'CampaignReportController@report')->name('campaigns.report')->middleware('auth','verified');
    Route::post('/save', 'CampaignReportController@save')->name('report.save')->middleware('auth','verified');
  });

  Route::group(['prefix' => 'update'], function(){
    Route::get('/{id}', 'CampaignUpdateController@addUpdates')->name('front.campaigns.update')->middleware('auth','verified');
    Route::post('/save', 'CampaignUpdateController@storeUpdates')->name('campaign.updates.save')->middleware('auth','verified');
  });
});

Route::group(['prefix' => 'zakat'], function(){
  Route::get('/', 'ZakatController@front')->name('zakats.front');
  Route::get('/detail', 'ZakatController@payment')->name('zakats.payment');
  Route::post('/transaction-token', 'ZakatController@getSnapToken')->name('zakats.transactionToken');
  Route::post('/save-transaction', 'ZakatController@saveTransaction')->name('zakats.saveTransaction');
});

Route::group(['prefix' => 'donasi'], function(){
  Route::get('/detail', 'DonationController@payment')->name('donations.payment');
  Route::post('/transaction-token', 'DonationController@getSnapToken')->name('donations.transactionToken');
  Route::post('/save-transaction', 'DonationController@saveTransaction')->name('donations.saveTransaction');
});

Route::group(['prefix' => 'profil'], function(){
  Route::get('/{username}', 'UserController@front')->name('users.front');
  Route::get('/edit/{username}', 'UserController@profilEdit')->name('users.edit')->middleware('auth','verified');
  Route::post('/edit/{username}', 'UserController@profilUpdate')->name('profil.update')->middleware('auth','verified');
});

Route::group(['prefix' => 'berita'], function(){
  Route::get('/', 'NewsController@front')->name('news.front');
  Route::get('/{id}', 'NewsController@read')->name('news.read');
});

Route::group(['prefix' => 'faq'], function(){
  Route::get('/', 'FAQController@front')->name('faqs.front');
  Route::get('/{id}', 'FAQController@read')->name('faqs.read');
});

Route::group(['prefix' => 'kwitansi'], function(){
  Route::get('/{username}', 'ReceiptController@userReceipt')->name('receipt.list')->middleware('auth','verified');
  Route::get('/{type}/{id}', 'ReceiptController@show')->name('receipt.show')->middleware('auth','verified');
});

Route::post('/payment/notification/handler','NotificationController@notification')->name('notification.handler');

Auth::routes(['verify' => true]);
Route::get('/sign-out', '\App\Http\Controllers\Auth\LoginController@logout')->name('user.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','verified', 'admin'] ], function(){
  Route::get('/', 'HomeController@home')->name('home');
  
  Route::resource('prices', 'PriceController');
  Route::resource('events', 'EventController');
  Route::resource('news', 'NewsController');
  Route::resource('campaigns', 'CampaignController');
  Route::resource('users', 'UserController');
  Route::resource('zakats', 'ZakatController');
  Route::resource('donations', 'DonationController');
  Route::resource('campaignCategories', 'CampaignCategoryController');
  Route::resource('campaignReports', 'CampaignReportController');
  Route::resource('campaignUpdates', 'CampaignUpdateController');
  Route::resource('topCampaigns', 'TopCampaignController');
  Route::resource('reportCategories', 'ReportCategoryController');
  Route::resource('wishlists', 'WishlistController');
  Route::resource('faqs', 'FAQController');
});
Route::get('coba', 'ImageController@coba');

Route::get('image-crop', 'ImageController@imageCrop');
Route::post('image-crop', 'ImageController@imageCropPost');
