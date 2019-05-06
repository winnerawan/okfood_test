<?php
namespace App\Http\Controllers\Api;

use App\Category;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Response;
use App\Repository\Transformers\CategoryTransformer;
use \Illuminate\Http\Response as Res;
use Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Input;

class CategoryController extends ApiController
{
    protected $categoryTransformer;

    public function __construct(CategoryTransformer $categoryTransformer)
    {
 
        $this->categoryTransformer = $categoryTransformer;
 
    }

    public function getAllCategoryByRestaurant($id)
    {
        //$categories = Category::all()->where('restaurant_id', $id);
 
        //if(!$categories){
        $limit = Input::get('limit') ?: 100;
 
        //$types = Type::paginate($limit);
        $categories = Category::where('restaurant_id', $id)->paginate($limit);
        //$categories = Category::all()->where('restaurant_id', $id);
 
        return $this->respondWithPagination($categories, [
            'categories' => $this->categoryTransformer->transformCollection($categories->all())
        ], 'Records Found!');
    }
}
