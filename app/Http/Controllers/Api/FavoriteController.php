<?php

namespace App\Http\Controllers\Api;

use App\Favorite;
use App\Customer;
use App\Category;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Response;
use App\Repository\Transformers\MenuTransformer;
use \Illuminate\Http\Response as Res;
use Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Input;

class FavoriteController extends ApiController
{
    protected $menuTransformer;

    public function __construct(MenuTransformer $menuTransformer)
    {
 
        $this->menuTransformer = $menuTransformer;
 
    }

    public function getFavoriteCustomer($id)
    {
        $limit = Input::get('limit') ?: 100;
 
        $menus = Menu::with('favorite')
                    ->join('favorites', 'menus.id', 'favorites.menu_id')
                    ->where('favorites.customer_id', $id)->paginate($limit);
 
        return $this->respondWithPagination($menus, [
            'menus' => $this->menuTransformer->transformCollection($menus->all())
        ], 'Records Found!');
    }

    public function favorite(Request $request)
    {
        $rules = array (

            'menu_id' => 'required',
            'customer_id' => 'required'
        );

        $favorite = Favorite::create([
                'menu_id' => $request['menu_id'],
                'customer_id' => $request['customer_id'],
            ]);

            return $this->respond([

                'error' => false,
                'status' => 'success',
                'status_code' => $this->getStatusCode(),
                'message' => 'Add favorite successful!',
            ]);
    }

}
