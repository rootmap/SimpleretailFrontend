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
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Auth::routes();

Route::get('/', 'AdminSiteController@index');
Route::get('/pricing', 'AdminSiteController@pricing');


Route::get('/business-pos-system', 'SiteSettingController@viewbpos');
Route::get('/simple-cash-register', 'SiteSettingController@viewscashregister');
Route::get('/retail-store', 'SiteSettingController@viewretailstore');

//auto signup //initiate/signup
Route::post('/initiate/signup', 'SignupController@initiateSingup');

//sync initiative
Route::get('/initiate/auto/sync', 'SignupController@autoSync');
Route::get('/initiate/json/sync', 'SignupController@jsonSync');
Route::get('/online/order', 'SignupController@onlineorder');

//paypal
Route::get('/initiate/account/paypal/{invoice_id}', 'SignupController@posPayPaypal');
Route::get('/initiate/paypal/{invoice_id}/{status}', 'SignupController@getPOSPaymentStatusPaypal');

//authorizenet
Route::post('/initiate/account/cardpointee','SignupController@cardpointeeCapture');
Route::get('/authorize/net/payment/history','AuthorizeNetPaymentHistoryController@index');
Route::post('/authorize/net/payment/refund','InvoiceController@refund');
Route::post('/authorize/net/payment/void','InvoiceController@voidTransaction');

Route::post('/save/contact/query', 'AdminSiteController@contact');

Route::group(['middleware' => 'auth'], function () { 

	Route::get('/home', 'SiteSettingController@index');
	Route::get('/admin-site', 'AdminSiteController@index');

	Route::get('/admin-site/setting', 'SiteSettingController@index');
	Route::post('/admin-site/setting/save', 'SiteSettingController@create');
	Route::post('/admin-site/setting/modify/{id}', 'SiteSettingController@update');
	Route::get('/admin-site/setting/edit/{id}', 'SiteSettingController@show');

	Route::get('/admin-site/about', 'AboutSiteController@index');
	Route::post('/admin-site/about/save', 'AboutSiteController@create');
	Route::post('/admin-site/about/modify/{id}', 'AboutSiteController@update');
	Route::get('/admin-site/about/edit/{id}', 'AboutSiteController@show');

	Route::get('/admin-site/features', 'FeatureController@index');
	Route::post('/admin-site/features/save', 'FeatureController@create');
	Route::post('/admin-site/features/modify/{id}', 'FeatureController@update');
	Route::get('/admin-site/features/edit/{id}', 'FeatureController@show');
	Route::get('/admin-site/features/delete/{id}', 'FeatureController@destroy');

	Route::get('/admin-site/dummy-proof', 'DummyProofController@index');
	Route::post('/admin-site/dummy-proof/save', 'DummyProofController@create');
	Route::post('/admin-site/dummy-proof/modify/{id}', 'DummyProofController@update');
	Route::get('/admin-site/dummy-proof/edit/{id}', 'DummyProofController@show');

	Route::get('/admin-site/retail', 'RetailController@index');
	Route::post('/admin-site/retail/save', 'RetailController@create');
	Route::post('/admin-site/retail/modify/{id}', 'RetailController@update');
	Route::get('/admin-site/retail/edit/{id}', 'RetailController@show');

	Route::get('/admin-site/price', 'PriceController@index');
	Route::post('/admin-site/price/save', 'PriceController@create');
	Route::post('/admin-site/price/modify/{id}', 'PriceController@update');
	Route::get('/admin-site/price/edit/{id}', 'PriceController@show');
	Route::get('/admin-site/price/delete/{id}', 'PriceController@destroy');


	Route::get('/admin-site/business-reports', 'BusinessReportController@index');
	Route::post('/admin-site/business-reports/save', 'BusinessReportController@create');
	Route::post('/admin-site/business-reports/modify/{id}', 'BusinessReportController@update');
	Route::get('/admin-site/business-reports/edit/{id}', 'BusinessReportController@show');

	Route::get('/admin-site/business-reports-features', 'BusinessReportFeatureController@index');
	Route::post('/admin-site/business-reports-features/save', 'BusinessReportFeatureController@create');
	Route::post('/admin-site/business-reports-features/modify/{id}', 'BusinessReportFeatureController@update');
	Route::get('/admin-site/business-reports-features/edit/{id}', 'BusinessReportFeatureController@show');
	Route::get('/admin-site/business-reports-features/delete/{id}', 'BusinessReportFeatureController@destroy');
	//Route::get('/admin-site/retail', 'AdminSiteController@retail');
	Route::get('/admin-site/plug-and-play', 'PlugnPlayController@index');
	Route::post('/admin-site/plug-and-play/save', 'PlugnPlayController@create');
	Route::post('/admin-site/plug-and-play/modify/{id}', 'PlugnPlayController@update');
	Route::get('/admin-site/plug-and-play/edit/{id}', 'PlugnPlayController@show');
	Route::get('/admin-site/plug-and-play/delete/{id}', 'PlugnPlayController@destroy');

	Route::get('/admin-site/plug-and-play-image', 'PlugnPlayImageController@index');
	Route::post('/admin-site/plug-and-play-image/save', 'PlugnPlayImageController@create');
	Route::post('/admin-site/plug-and-play-image/modify/{id}', 'PlugnPlayImageController@update');
	Route::get('/admin-site/plug-and-play-image/edit/{id}', 'PlugnPlayImageController@show');
	Route::get('/admin-site/plug-and-play-image/delete/{id}', 'PlugnPlayImageController@destroy');

	Route::get('/admin-site/slider', 'SliderController@index');
	Route::post('/admin-site/slider/save', 'SliderController@create');
	Route::post('/admin-site/slider/modify/{id}', 'SliderController@update');
	Route::get('/admin-site/slider/edit/{id}', 'SliderController@show');
	Route::get('/admin-site/slider/delete/{id}', 'SliderController@destroy');

	Route::get('/admin-site/footer-menu', 'FotterSeoLinkController@index');
	Route::post('/admin-site/footer-menu/save', 'FotterSeoLinkController@create');
	Route::post('/admin-site/footer-menu/modify/{id}', 'FotterSeoLinkController@update');
	Route::get('/admin-site/footer-menu/edit/{id}', 'FotterSeoLinkController@show');
	Route::get('/admin-site/footer-menu/delete/{id}', 'FotterSeoLinkController@destroy');
});
