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

Auth::routes();

Route::get('dashboard', 'HomeController@index')->name('home');

Route::resource('locations', 'LocationsController');

Route::resource('categories', 'CategoriesController');

Route::resource('metrics', 'MetricsController');

Route::resource('suppliers', 'SuppliersController');

Route::resource('inventories', 'InventoriesController');

Route::resource('stocks', 'StocksController');