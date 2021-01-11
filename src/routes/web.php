<?php 

use Illuminate\Support\Facades\Route;

Route::get('/test',function(){
    return"ok";
});

Route::group(['namespace'=>'\TeamBravo\Payment\Http\Controllers'],function(){
    
    Route::get('/test-2','testController@test');
    // SSLCOMMERZ Start

Route::get('/example1','SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2','SslCommerzPaymentController@exampleHostedCheckout');


Route::post('/pay','SslCommerzPaymentController@index');
Route::post('/pay-via-ajax','SslCommerzPaymentController@payViaAjax');


Route::post('/success', 'SslCommerzPaymentController@success');


Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END
});