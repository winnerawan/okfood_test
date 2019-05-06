<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table = 'favorites';

 	protected $fillable = [
        'menu_id', 'customer_id',
    ];

    public function menu()
    {
    	return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function customer()
    {
    	return $this->belongsTo(Customer::class, 'customer_id');
    }
}
