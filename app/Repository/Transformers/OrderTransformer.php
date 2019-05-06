<?php

namespace App\Repository\Transformers;

class OrderTransformer extends Transformer
{
    public function transform($item)
    {
        return [
            'id' => $item->id,
            'restaurant_id' => $item->restaurant_id,
            'customer_id' => $item->customer_id,
            'delivery_address' => $item->delivery_address,
            'delivery_cost' => $item->delivery_cost,
            'total' => $item->total,
            'amount_paid' => $item->amount_paid,
            'change' => $item->change,
            'created_at' => $item->created_at->toDateTimeString(),
            'updated_at' => $item->updated_at->toDateTimeString(),
        ];
    }

    public function transformer($item)
    {
        return [
            'id' => $item->id,
            'restaurant_id' => $item->restaurant_id,
            'customer_id' => $item->customer_id,
            'delivery_address' => $item->delivery_address,
            'delivery_cost' => $item->delivery_cost,
            'total' => $item->total,
            'amount_paid' => $item->amount_paid,
            'change' => $item->change,
            'created_at' => $item->created_at->toDateTimeString(),
            'updated_at' => $item->updated_at->toDateTimeString(),
            'order_details' => [
                'order_id' => $item->order_details['order_id'],
                'menu_id' => $item->order_details['menu_id'],
                'qty' => $item->order_details['qty'],
                'order_notes' => $item->order_details['order_notes'],
                'unit_price' => $item->order_details['unit_price'],
                'sub_total' => $item->order_details['sub_total'],
                'created_at' => $item->order_details['created_at->toDateTimeString()'],
                'updated_at' => $item->order_details['updated_at->toDateTimeString()'],

            ]
        ];
    }
}