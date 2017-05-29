<?php
use App\Http\Controllers;
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

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::group(['middleware'=> 'auth'], function()
{
	Route::get('/home', function(){
		return view('/home');
	})->name('home');

	Route::get('/admin_dashboard', function(){
		return view('/admin.admin_dashboard');
	})->name('admin_dashboard');
	
	Route::get('/seller_dashboard',function(){
		return view('/seller.seller_dashboard');
	})->name('seller_dashboard');

	Route::get('/accountant_dashboard',function(){
		return view('/accountant.accountant_dashboard');
	})->name('accountant_dashboard');

	Route::get('/stocker_dashboard',function(){
		return view('/stocker.stocker_dashboard');
	})->name('stocker_dashboard');
});


Route::get('sell_product',['middleware' => 'auth', 'uses' => 'SellerController@index']);

Route::get('instock',['middleware' => 'auth', 'uses' => 'InStockController@index']);

Route::get('instock_admin',['middleware' => 'auth', 'uses' => 'AdminController@instock']);
Route::get('admin_sell_products',['middleware' => 'auth', 'uses' => 'AdminController@adminSell']);

Route::get('instock_stocker',['middleware' => 'auth', 'uses' => 'StockerController@index']);
Route::get('outgoing_stock',['middleware' => 'auth', 'uses' => 'StockerController@goingOutStock']);

Route::post('importExcel',['middleware' => 'auth', 'uses' => 'StockerController@importExcel']);

Route::get('sellers_show_dashboard_admin',['middleware' => 'auth', 'uses' => 'AdminShowUsersController@index']);
Route::get('accountants_show_dashboard_admin',['middleware' => 'auth', 'uses' => 'AdminShowUsersController@show_accountant']);
Route::get('stockers_show_dashboard_admin',['middleware' => 'auth', 'uses' => 'AdminShowUsersController@show_stockers']);

Route::post('outgoing_stock',['middleware' => 'auth', 'uses' => 'StockerController@store']);