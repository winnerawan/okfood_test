<?php
 
namespace App\Repository\Transformers;
use URL; 
 
class TypeTransformer extends Transformer{
 
    public function transform($type){
 
        return [
            'id' => $type->id,
            'name' => $type->name,
            'image' => URL::asset('images/'.$type->image),
            'created_at' => $type->created_at->toDateTimeString(),
            //'updated_at' => $type->updated_at->toDateTimeString(),
        ];
 
    }
 
}