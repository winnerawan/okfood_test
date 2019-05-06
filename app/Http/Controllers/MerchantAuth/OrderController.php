<?php

namespace App\Http\Controllers\MerchantAuth;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Order;
use App\OrderDetail;
use App\Restaurant;
use App\Customer;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::join('restaurants', 'orders.restaurant_id', 'restaurants.id')
            ->where('restaurants.merchant_id', Auth::user()->id)->get(['orders.*']);
        $order_completed = Order::join('restaurants', 'orders.restaurant_id', 'restaurants.id')
            ->where('restaurants.merchant_id', Auth::user()->id)->where('orders.status', 2)->get(['orders.*']);
//        $orders = DB::table('orders')->select('orders.*')
//            ->join('restaurants', 'orders.restaurant_id', 'restaurants.id')
//            ->where('restaurants.merchant_id', Auth::user()->id)->paginate(5);

        //flash('There is a new order')->info()->important();

        return view('merchant.order.index')->with(['orders' => $orders, 'order_completed' => $order_completed]);
        //return $orders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->input('status');
        $order->save();

        //$orders = Order::join('restaurants', 'orders.restaurant_id', 'restaurants.id')
        //->where('restaurants.merchant_id', Auth::user()->id)->get(['orders.*']);
        return redirect()->route('merchant.order.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function flashMessage()
    {

    }
}
