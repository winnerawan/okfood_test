<?php

namespace App\Http\Controllers\Api;

use App\Order;
use App\OrderDetail;
use App\Customer;
use App\Category;
use App\Menu;
use App\Repository\Transformers\OrderDetailTransformer;
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

class OrderDetailController extends ApiController
{
    protected $orderDetailTransformer;

    public function __construct(OrderDetailTransformer $orderDetailTransformer)
    {
        $this->orderDetailTransformer = $orderDetailTransformer;
    }

    public function orderMenu(Request $request)
    {
        $rules = array (

            'order_id' => 'required',
            'menu_id' => 'required',
            'qty' => 'required',
            'unit_price' => 'required',
            'sub_total' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator-> fails()){

            return $this->respondValidationError('Fields Validation Failed.', $validator->errors());

        } else {
            $order = OrderDetail::create([
                'order_id' => $request['order_id'],
                'menu_id' => $request['menu_id'],
                'qty' => $request['qty'],
                'order_notes' => $request['order_id'],
                'unit_price' => $request['unit_price'],
                'sub_total' => $request['sub_total'],
            ]);

            return $this->respond([

                'error' => false,
                'status' => 'success',
                'status_code' => $this->getStatusCode(),
                'message' => 'Order successful!',
                'orders' => $this->orderDetailTransformer->transform($order),
            ]);

        }
    }

    public function history(Request $request) {
        $orderId = $request['order_id'];
        $order_details = OrderDetail::join('menus', 'menus.id', 'order_details.menu_id')->where('order_id', $orderId)->get();

        foreach($order_details as $order) {
            $order->image = URL::asset('images/'.$order->image);
        }

        return $this->respond([

            'error' => false,
            'status' => 'success',
            'status_code' => $this->getStatusCode(),
            'message' => 'successful!',
            'order_details' => $order_details,
        ]);
    }
}