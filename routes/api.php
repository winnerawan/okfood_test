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

Route::group(['middleware' => 'cors', 'prefix' => '/v1'], function () {

    Route::post('/login', 'Api\CustomerController@authenticate');

    Route::post('/register', 'Api\CustomerController@register');

    Route::get('/logout/{api_token}', 'Api\CustomerController@logout');
    Route::get('/restaurants', 'Api\RestaurantController@index');
    Route::get('/restaurant/{group_id}', 'Api\RestaurantController@index');

    Route::get('/restaurant/{id}', 'Api\RestaurantController@show');
    Route::get('/category/{id}', 'Api\CategoryController@getAllCategoryByRestaurant');
    Route::get('/groupmenus', 'Api\GroupMenuController@index');
    Route::get('/types', 'Api\TypeController@index');
    Route::get('/menu/{id}', 'Api\MenuController@getMenusByCategory');
    Route::post('/order', 'Api\OrderController@order');
    Route::post('/pickmenu', 'Api\OrderDetailController@orderMenu');
    Route::get('/orderdetail/{id}', 'Api\OrderController@getOrderDetail');
    Route::post('/finalOrder', 'Api\OrderController@finalOrder');
    Route::get('/favorite/{customer_id}', 'Api\FavoriteController@getFavoriteCustomer');
    Route::post('/addfavorite', 'Api\FavoriteController@favorite');

    //new
    Route::get('/nearme', 'Api\RestaurantController@nearMe');
    Route::get('/search', 'Api\RestaurantController@search');
    Route::get('/order_history', 'Api\OrderController@history');
    Route::get('/order_detail_history', 'Api\OrderDetailController@history');
    Route::get('/promos', 'Api\PromotionController@promos');
    Route::get('/push/{orderId}', 'Api\WebNotification@sendPushNotification');
    Route::put('/updateFcm', 'Api\CustomerController@updateFcmToken');
    Route::post('/pus', 'AdminAuth\FcmController@store')->name('push');
});

// Route::get('/customers', 'Api\CustomerController@customers');
// Route::post('/auth/register', 'Api\AuthController@register');
// Route::post('/auth/login', 'Api\AuthController@login');
// Route::get('/menu/all', 'Api\MenuController@getAllMenu');
// Route::get('/menu/{id}', 'Api\MenuController@getMenuByCategory');
// Route::get('/category/{id}', 'Api\CategoryController@getAllCategoryByRestaurant');
// Route::get('/restaurants', 'Api\RestaurantController@getAllRestaurant');
// Route::get('/restaurant/{id}', 'Api\RestaurantController@getAllRestaurantByType');
