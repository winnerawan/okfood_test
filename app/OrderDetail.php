<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'order_id', 'menu_id', 'qty', 'order_notes', 'unit_price', 'sub_total',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
