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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/banners', 'ImageController@index');
Route::get('/products', 'ProductController@front');
Route::post('/product', 'ProductController@categorizedProduct');
Route::post('/getImages', 'ProductController@getImages');
Route::get('/searchProducts/{name}', 'ProductController@searchProduct');
Route::get('/images', 'ImageController@cart');
Route::get('/product-details/{name}', 'ProductController@fetchProducts');
Route::get('/cart/{id}', 'CartController@cartDetails');
Route::get('/wishlist/{id}', 'WishlistController@wishlistDetails');
Route::get('/orders/{id}', 'OrderController@orders');
Route::post('/updateCart', 'CartController@update');
Route::post('/removeCartProduct', 'CartController@destroy');
Route::post('/addCart', 'CartController@store');
Route::post('/addWishlist', 'WishlistController@store');
Route::post('/removeWishlist', 'WishlistController@destroy');
Route::post('/payment', 'PurchaserController@store');
Route::post('/makeOrder', 'PurchaserController@makeOrder');
Route::post('/addNewsletter', 'NewsletterController@store');
Route::post('/orderCancel', 'OrderController@orderCancel');
Route::post('/addEnquiry', 'LinkController@addEnquiry');
Route::get('/tags', 'LinkController@allTags');
Route::post('/categories', 'CategoryController@front');
Route::get('/category', 'CategoryController@index');
Route::post('/rating/new', 'ProductController@setRating')->name('setRating');
Route::get('/rating/{$id}', 'ProductController@getRating')->name('getRating');
Route::post('/checkCoupon', 'CouponController@checkCoupon');
// Route::get('add-category' ,'LinkController@addCategory');