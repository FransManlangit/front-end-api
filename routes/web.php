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
    return view('welcome');
});

Route::resource('/customer', 'CustomerController');
Route::resource('/item', 'ItemController');

// Route::get('/getItems', [
//     'uses' => 'ItemController@getItem',
//     'as' => 'getItems'
//     ]);
Route::view('item-index','item.index');
Route::view('/shop', 'shop.index');
Route::post('/item/checkout',[
    'uses' => 'ItemController@postCheckout',
    'as' => 'checkout'
]);



Route::get('/dashboard/title-chart',[
    'uses' => 'DashboardController@titleChart',
    'as' => 'dashboard.titleChart'
]);
Route::get('/dashboard/sales-chart',[
    'uses' => 'DashboardController@salesChart',
    'as' => 'dashboard.salesChart'
]);
Route::get('/dashboard/items-chart',[
    'uses' => 'DashboardController@itemsChart',
    'as' => 'dashboard.itemsChart'
]);

Route::view('/dashboard','dashboard.index');
