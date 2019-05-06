<?php

namespace App\Repository\Transformers;

class OrderDetailTransformer extends Transformer

{
    public function transform($item)
    {
        return [
            'id' => $item->id,
            'order_id' => $item->order_id,
            'menu_id' => $item->menu_id,
            'qty' => $item->qty,
            'order_notes' => $item->order_notes,
            'unit_price' => $item->unit_price,
            'sub_total' => $item->sub_total,
            'created_at' => $item->created_at->toDateTimeString(),
            'updated_at' => $item->updated_at->toDateTimeString(),
        ];
    }
}