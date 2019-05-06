<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function category()
    {
        return $this->hasMany(Category::class, 'restaurant_id');
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }
    public function group_menu()
    {
        return $this->belongsTo(GroupMenu::class, 'restaurant_id');
    }
    public function order()
    {
        return $this->hasMany(Order::class, 'restaurant_id');
    }
}

