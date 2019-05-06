<?php
 
namespace App\Repository\Transformers;
use URL; 
 
class GroupMenuTransformer extends Transformer{
 
    public function transform($group_menu){
 
        return [
            'id' => $group_menu->id,
            'name' => $group_menu->name,
            'icon' => URL::asset('images/'.$group_menu->icon),
        ];
 
    }
 
}