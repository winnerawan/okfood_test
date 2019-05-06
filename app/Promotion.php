<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
