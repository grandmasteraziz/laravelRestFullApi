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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
*  Buyers
*/
Route::resource('buyers','Buyer\BuyerController');

/**
*  Sellers
*/
Route::resource('sellers','Seller\SellerController');

/**
*  Products
*/
Route::resource('products','Seller\SellerController');

/**
*  Categories
*/
Route::resource('categories','Category\CategoryController');

/**
*  Transcations
*/
Route::resource('transcations','Transcation\TranscationController');

/**
*  User
*/
Route::resource('user','User\UserController');