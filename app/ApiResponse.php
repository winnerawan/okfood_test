<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiResponse extends Model
{
    protected $fillable = [
        'error', 'message',
    ];
}
