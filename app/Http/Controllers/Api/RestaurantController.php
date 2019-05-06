<?php
namespace App\Http\Controllers\Api;

use App\Category;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Response;
use App\Repository\Transformers\RestaurantTransformer;
use \Illuminate\Http\Response as Res;
use Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Input;

class RestaurantController extends ApiController
{
    public function __construct(RestaurantTransformer $restaurantTransformer)
    {
 
        $this->restaurantTransformer = $restaurantTransformer;
 
    }

        public function index()
    {
        $limit = Input::get('limit') ?: 100;
 
        $restaurants = Restaurant::paginate($limit);
         
        return $this->respondWithPagination($restaurants, [
            'restaurants' => $this->restaurantTransformer->transformCollection($restaurants->all())
        ], 'Records Found!');
    }

    public function byGroup(Request $request)
    {
        $groupId = $request['group_id'];
        $typeId = $request['type_id'];
        $limit = Input::get('limit') ?: 100;
        $restaurants = Restaurant::where('group_menu_id', $groupId)->orWhere('type_id', $typeId)->paginate($limit);
        return $this->respondWithPagination($restaurants, [
            'restaurants' => $this->restaurantTransformer->transformCollection($restaurants->all())
        ], 'Records Found!');
    }

    public function show($id){
         
        $restaurant = Restaurant::find($id);
 
        if(!$restaurant){
 
            $restaurant = Restaurant::where('id', $id)->firstOrFail();
        }
 
        if(count($restaurant) == 0){
            return $this->respondWithError("Restaurant Not Found!");
        }
 
        return $this->respond([
            'error' => false,
            'status' => 'success',
            'status_code' => $this->getStatusCode(),
            'message' => 'Record Found',
            'restaurant' => $this->restaurantTransformer->transform($restaurant)
        ]);
         
    }

    public function search(Request $request) {
        $name = $request['name'];
        $restaurants = Restaurant::where('name', 'LIKE', "%$name%")->get();
        //TODO rduplicates
        $restaurantwithmenus = Restaurant::join('categories', 'categories.restaurant_id', 'restaurants.id')
                                  ->join('menus', 'menus.category_id', 'categories.id')
                                  ->addSelect('restaurants.*')
                                  ->where('menus.name', 'LIKE', "%$name%")->get();
        //$restaurantwithmenus = DB::select("SELECT * FROM restaurants INNER JOIN categories ON categories.restaurant_id = restaurants.id INNER JOIN menus ON menus.category_id = categories.id WHERE menus.name LIKE '%$name'");

        if (sizeof($restaurants)>0) {

            $data = $restaurants;

            foreach ($data as $key => $value) {
                $value->image = URL::asset('images/'.$value->image);
            }
            return $this->respond([

                'error' => false,
                'status' => 'success',
                'status_code' => Res::HTTP_OK,
                'message' => 'ok',
                'restaurants' => $restaurants,
    
            ]);
         } else {
            $data = $restaurantwithmenus;

            foreach ($data as $key => $value) {
                $value->image = URL::asset('images/'.$value->image);
            }

            return $this->respond([

                'error' => false,
                'status' => 'success',
                'status_code' => Res::HTTP_OK,
                'message' => 'ok',
                'restaurants' => $restaurantwithmenus,
    
            ]);
        }
    }

    public function nearMe(Request $request) {
        
        //10km near me
        $distance = 10;
        $latitude = $request['latitude'];
        $longitude = $request['longitude'];

        $qry = "SELECT *,(((acos(sin(($latitude * pi()/180)) * sin((latitude * pi()/180))+cos(($latitude*pi()/180)) * cos((latitude* pi()/180)) * cos((($longitude- longitude) * pi()/180)))) * 180/pi())*60*1.1515*1.609344) as distance FROM restaurants HAVING distance <= $distance";
        $restaurants = DB::select($qry);

    
        $data = $restaurants;

        foreach ($data as $key => $value) {
            $value->image = URL::asset('images/'.$value->image);
        }
       

        return $this->respond([

            'error' => false,
            'status' => 'success',
            'status_code' => Res::HTTP_OK,
            'message' => 'ok',
            'restaurants' => $data,

        ]);
    }

    function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2) {
        // Calculate the distance in degrees
        $degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
        
        // Convert the distance in degrees to the chosen unit (kilometres, miles or nautical miles)
        switch($unit) {
            case 'km':
                $distance = $degrees * 111.13384; // 1 degree = 111.13384 km, based on the average diameter of the Earth (12,735 km)
                break;
            case 'mi':
                $distance = $degrees * 69.05482; // 1 degree = 69.05482 miles, based on the average diameter of the Earth (7,913.1 miles)
                break;
            case 'nmi':
                $distance =  $degrees * 59.97662; // 1 degree = 59.97662 nautic miles, based on the average diameter of the Earth (6,876.3 nautical miles)
        }
        return round($distance, $decimals);
    }
}
