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

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
	Route::post ('deposit', 'BalanceController@depositStore')->name('deposit.store');
	Route::get ('deposit', 'BalanceController@deposit')->name('balance.deposit');
    Route::get ('/', 'AdminController@index')->name('admin.home');
    Route::get ('balance', 'BalanceController@index')->name('admin.balance');
});

Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();