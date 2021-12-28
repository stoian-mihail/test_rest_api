<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('create-product', 'ProductsController@store')->name('create-product');
Route::put('update-product/{Product}', 'ProductsController@update')->name('update-product');
Route::get('show-product/{Product}', 'ProductsController@show')->name('show-product');
Route::delete('delete-product/{Product}', 'ProductsController@destroy')->name('delete-product');
Route::get('products', 'ProductsController@index')->name('products');
