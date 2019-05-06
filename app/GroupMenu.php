<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupMenu extends Model
{
    public function restaurants()
    {
        return $this->hasMany(Restaurant::class, 'restaurant_id');
    }
}
