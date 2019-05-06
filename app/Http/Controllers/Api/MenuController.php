<?php

namespace App\Http\Controllers\Api;

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

class MenuController extends ApiController
{
    protected $menuTransformer;

    public function __construct(MenuTransformer $menuTransformer)
    {
 
        $this->menuTransformer = $menuTransformer;
 
    }

    public function getMenusByCategory($id)
    {
        $limit = Input::get('limit') ?: 100;
 
        $menus = Menu::where('category_id', $id)->where('availability', 1)->paginate($limit);
 
        return $this->respondWithPagination($menus, [
            'menus' => $this->menuTransformer->transformCollection($menus->all())
        ], 'Records Found!');
    }

    public function getMenuByCategory($id)
    {
        // $menu = Menu::all()->where('category_id', $id);
        // $response = fractal()->collection($menu)
        //             ->transformWith(new MenuTransformer)
        //             ->toArray();

        // return response()->json($response, 200);
    }
}
