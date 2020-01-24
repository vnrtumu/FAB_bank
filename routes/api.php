<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('displayAllMerchants', 'Api\MerchantController@displayAllMerchants');
Route::post('import', 'Api\MerchantController@import');
Route::post('showSingleMerchant', 'Api\MerchantController@showSingleMerchant');
Route::post('updateMerchantDetails', 'Api\MerchantController@updateMerchantDetails');
