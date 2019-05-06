<?php
namespace App\Http\Controllers\Api;

use App\GroupMenu;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Response;
use App\Repository\Transformers\GroupMenuTransformer;
use \Illuminate\Http\Response as Res;
use Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Input;

class GroupMenuController extends ApiController
{
    protected $groupTransformer;

    public function __construct(GroupMenuTransformer $groupTransformer)
    {
 
        $this->groupTransformer = $groupTransformer;
 
    }

    public function index(){
 
        $limit = Input::get('limit') ?: 100;
 
        //$types = Type::paginate($limit);
        $group_menus = GroupMenu::paginate($limit);
         
        return $this->respondWithPagination($group_menus, [
            'group_menus' => $this->groupTransformer->transformCollection($group_menus->all())
        ], 'Records Found!');
         
    }
}
