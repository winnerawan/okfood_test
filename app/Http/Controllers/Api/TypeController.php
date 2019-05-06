<?php
namespace App\Http\Controllers\Api;

use App\Type;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Response;
use App\Repository\Transformers\TypeTransformer;
use \Illuminate\Http\Response as Res;
use Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Input;

class TypeController extends ApiController
{
    protected $typeTransformer;

    public function __construct(TypeTransformer $typeTransformer)
    {
 
        $this->typeTransformer = $typeTransformer;
 
    }

    public function index(){
 
        $limit = Input::get('limit') ?: 100;
 
        //$types = Type::paginate($limit);
        $types = Type::paginate($limit);
         
        return $this->respondWithPagination($types, [
            'types' => $this->typeTransformer->transformCollection($types->all())
        ], 'Records Found!');
         
    }
}
