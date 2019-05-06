<?php
namespace App\Http\Controllers\Api;
use App\Customer;
use App\Category;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Response;
use App\Events\OrderEvent;
use App\Repository\Transformers\MenuTransformer;
use \Illuminate\Http\Response as Res;
use Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Input;
class WebNotification extends ApiController
{
    
    public function sendPushNotification($orderId) {
        event(new OrderEvent($orderId));
        return "true";
    }
}