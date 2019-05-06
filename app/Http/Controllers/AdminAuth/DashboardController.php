<?php

namespace App\Http\Controllers\AdminAuth;

use App\Customer;
use App\Restaurant;
use DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $customers = Customer::whereDate('created_at', DB::raw('CURDATE()'))->get();
        $restaurants = Restaurant::all();
        $merchants_has_restaurant = DB::table('merchants')
                        ->select('*')->join('restaurants', 'restaurants.merchant_id', '=', 'merchants.id')
                        ->get();

        return view('admin.home')->with(['customers' => $customers, 'merchants_has_restaurant' => $merchants_has_restaurant]);
    }
}
