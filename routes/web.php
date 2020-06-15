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
Auth::routes();
Route::get('login','Auth\LoginController@login')->name('login');
Route::post('authenticate','Auth\LoginController@authenticate')->name('authenticate');
Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::get('/','FrontPagesController@index')->name('index');
Route::get('shop','FrontPagesController@products')->name('shops');
Route::get('shop/{category_id}','FrontPagesController@similar')->name('shop');
Route::get('product-details/{product}','FrontPagesController@productDetails')->name('product-details');
Route::get('contact','FrontPagesController@contact')->name('contact');

Route::namespace('Admin')->middleware('auth')->prefix('admin')->name('admin.')->group(function(){

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('products','ProductController');
    Route::resource('categories','CategoryController');
    Route::resource('users','UserController');
    Route::resource('contacts','ContactController');
    //Route::resource('users','UserController')->middleware('can:show-users');
});
