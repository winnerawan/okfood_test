<?php

// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('merchant')->user();

//     //dd($users);

//     return view('merchant.home');
// })->name('home');
Route::get('/home', 'MerchantAuth\HomeController@index')->name('home');
Route::resource('category', 'MerchantAuth\CategoryController');
Route::resource('restaurant', 'MerchantAuth\RestaurantController');
Route::resource('menu', 'MerchantAuth\MenuController');
Route::resource('order', 'MerchantAuth\OrderController');
Route::resource('order_detail', 'MerchantAuth\OrderDetailController');
Route::get('test_notif', 'MerchantAuth\OrderDetailController@tes_notif');

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('/');
});