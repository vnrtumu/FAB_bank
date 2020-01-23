<?php
// use Illuminate\Routing\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'MerchantController@index')->name('index');
Route::get('/display', 'MerchantController@display')->name('display');
Route::post('/store', 'MerchantController@store')->name('store');
Route::get('/singleMerchant/{MerchantDetails}', 'MerchantController@show')->name('singleMerchant');
Route::get('/merchantEdit/{MerchantDetails}/edit', 'MerchantController@edit')->name('merchantEdit');
Route::patch('/update/{MerchantDetails}', 'MerchantController@update')->name('update');








