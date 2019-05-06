<?php

// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('admin')->user();

//     //dd($users);

//     return view('admin.home');
// })->name('home');
Route::get('/home', 'AdminAuth\DashboardController@dashboard')->name('home');
Route::resource('category', 'AdminAuth\CategoriesController');
Route::resource('type', 'AdminAuth\TypeController');
Route::resource('restaurant', 'AdminAuth\RestaurantsController');
Route::resource('menu', 'AdminAuth\MenusController');
Route::resource('customer', 'AdminAuth\CustomersController');
Route::resource('merchant', 'AdminAuth\MerchantController');
Route::resource('promotion', 'AdminAuth\PromotionController');
Route::resource('page', 'AdminAuth\PageController');
Route::resource('tax', 'AdminAuth\TaxController');
Route::resource('group', 'AdminAuth\GroupMenuController');
Route::resource('order', 'AdminAuth\OrderController');
Route::resource('orderdetail', 'AdminAuth\OrderDetailController');
Route::get('setting', 'AdminAuth\SettingController@index')->name('setting.index');
Route::put('setting/update/tax', 'AdminAuth\SettingController@index')->name('setting.tax');
Route::put('setting/update/page', 'AdminAuth\SettingController@index')->name('setting.page');

Route::get('/categories/get/restaurant/{restaurant_id}', 'AdminAuth\MenusController@getCategories');
Route::get('/categories/dropdown', function(){
  $input = Input::get('option');
	$restaurant = Restaurant::find($input);
   $categories = $restaurant->category();
   dd($categories);
	return Response::eloquent($categories->get(['id','name']));
});
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('/');
});

