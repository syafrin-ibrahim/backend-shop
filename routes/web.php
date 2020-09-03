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

Route::get('/','DashboardController@index')->name('home');
Auth::routes();
Route::get('products/{id}/gallery', 'ProductController@showGallery')->name('products.gallery');
Route::resource('/products','ProductController');
Route::resource('/transactions','TransactionController');
Route::get('/transactions/{id}/change-status','TransactionController@changeStatus')->name('transaction.status');

Route::resource('/product-gallery','ProductGalleryController');



//Route::get('/home', 'HomeController@index')->name('home');
