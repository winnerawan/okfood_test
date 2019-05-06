<?php
 
namespace App\Repository\Transformers;
use URL; 
 
class CategoryTransformer extends Transformer{
 
    public function transform($category){
 
        return [
            'id'            => $category->id,
            'name'          => $category->name,
            'restaurant_id' => $category->restaurant_id,
            'created_at'    => $category->created_at->toDateTimeString(),
        ];
 
    }
 
}