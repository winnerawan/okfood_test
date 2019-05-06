<?php
 
namespace App\Repository\Transformers;
use URL; 
 
class MenuTransformer extends Transformer{
 
    public function transform($menu){
 
        return [
            'id'          => $menu->id,
            'name'        => $menu->name,
            'category_id' => $menu->category_id,
            'description' => $menu->description,
            'price'       => $menu->price,
            'image'       => URL::asset('images/'.$menu->image),
            'availability'=> $menu->availability,
            'rating'      => $menu->rating,
            'created_at'  => $menu->created_at->toDateTimeString(),
        ];
 
    }
 
}