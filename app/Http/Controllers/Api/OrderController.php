<?php

namespace App\Http\Controllers\Api;

use App\Order;
use App\OrderDetail;
use App\Customer;
use App\Category;
use App\Menu;
use App\Repository\Transformers\OrderTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Response;
use App\Repository\Transformers\MenuTransformer;
use \Illuminate\Http\Response as Res;
use Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Input;

class OrderController extends ApiController
{
    protected $orderTransformer;

    public function __construct(OrderTransformer $orderTransformer)
    {
        $this->orderTransformer = $orderTransformer;
    }

    public function order(Request $request)
    {
        $rules = array(

            'restaurant_id' => 'required',
            'customer_id' => 'required',
            'delivery_address' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return $this->respondValidationError('Fields Validation Failed.', $validator->errors());

        } else {

            $order = Order::create([

                'restaurant_id' => $request['restaurant_id'],
                'customer_id' => $request['customer_id'],
                'delivery_address' => $request['delivery_address'],

            ]);


            return $this->respond([

                'error' => false,
                'status' => 'success',
                'status_code' => $this->getStatusCode(),
                'message' => 'Order successful!',
                'orders' => $this->orderTransformer->transform($order),
            ]);
        }

    }

    public function getOrderDetail($id)
    {
        $order = Order::with('order_detail')->find($id);
//        return $order;
        if (count($order) == 0) {
            return $this->respondWithError("Order Not Found!");
        }
        return $this->respond([

            'error' => false,
            'status' => 'success',
            'status_code' => $this->getStatusCode(),
            'message' => 'Order successful!',
            'order' => $order,
        ]);
    }

    public function history(Request $request) {
            $customer_id = $request['customer_id'];
            $orders = Restaurant::join('orders', 'orders.restaurant_id', 'restaurants.id')->where('orders.customer_id', '=', $customer_id)->get();


            foreach($orders as $order) {
                $order->image = URL::asset('images/'.$order->image);
            }

            return $this->respond([

                'error' => false,
                'status' => 'success',
                'status_code' => Res::HTTP_OK,
                'message' => 'ok',
                'orders' => $orders,

        ]);
    }

    public function finalOrder(Request $request)
    {

        $data = $request->json()->all();

        $order = new Order;
        $order->restaurant_id = $data['restaurant_id'];
        $order->customer_id = $data['customer_id'];
        $order->delivery_address = $data['delivery_address'];
        $order->delivery_notes = $data['delivery_notes'];
        $order->delivery_cost = $data['delivery_cost'];
        $order->total = $data['total'];
        $order->status =  0; //$data['status'];

        $order->save();

        foreach ($data['order_details'] as $key => $order_detail) {

            $details = new OrderDetail;

            $details->order_id = $order->id;
            $details->menu_id = $order_detail['menu_id'];
            $details->qty = $order_detail['qty'];
            $details->order_notes = $order_detail['order_notes'];
            $details->unit_price = $order_detail['unit_price'];
            $details->sub_total = $order_detail['sub_total'];

            $details->save();

        }

        return $this->respond([

            'error' => false,
            'status' => 'success',
            'status_code' => $this->getStatusCode(),
            'message' => 'Order successful!',
            'order' => $this->orderTransformer->transform($order),
        ]);


    }
}