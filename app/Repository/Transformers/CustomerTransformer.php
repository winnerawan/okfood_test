<?php

namespace App\Repository\Transformers;
use App\Customer;

class CustomerTransformer extends Transformer{

    public function transform($customer)
    {
        return [
        'id'          => $customer->id,
        'name'        => $customer->name,
        'email'       => $customer->email,
        'api_token'   => $customer->api_token,
        'phone'       => $customer->phone,
        'fcm_id'      => $customer->fcm_id,
        'created_at'  => $customer->created_at->toDateTimeString(),
    ];

    }

}