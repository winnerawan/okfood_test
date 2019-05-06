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

    public function byGroup($id)
    {
        $limit = Input::get('limit') ?: 100;
        $restaurants = Restaurant::paginate(10)->where('group_menu_id', $id);
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
}
