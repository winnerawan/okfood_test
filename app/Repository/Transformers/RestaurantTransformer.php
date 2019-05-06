<?php
 
namespace App\Repository\Transformers;
use URL; 
 
class RestaurantTransformer extends Transformer
{
    public function transform($restaurant){
 
        return [
            'id'          => $restaurant->id,
            'name'        => $restaurant->name,
            'type_id'     => $restaurant->type_id,
            'merchant_id' => $restaurant->merchant_id,
            'group_menu_id' => $restaurant->group_menu_id,
            'description' => $restaurant->description,
            'city'        => $restaurant->city,
            'district'    => $restaurant->district,
            'street'      => $restaurant->street,
            'contact'     => $restaurant->contact,
            'image'       => URL::asset('images/'.$restaurant->image),
            'latitude'    => $restaurant->latitude,
            'longitude'   => $restaurant->longitude,
            'rating'      => $restaurant->rating,
            'is_active'   => $restaurant->is_active,
            'priority'    => $restaurant->priority,
            'open'        => $restaurant->open,
            'close'       => $restaurant->close,
        ];
 
    }

}