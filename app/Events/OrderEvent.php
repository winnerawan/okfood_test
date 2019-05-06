<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Customer;
use App\Restaurant;
use App\Order;

class OrderEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $orderId;
    public $message;
    public $restaurantName;
    public $merchantEmail;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
        $order = Order::find($orderId)->first();
        $customer = $order->customer;
        $restaurant = $order->restaurant;
        $this->merchantEmail = $restaurant->merchant->email;
        $this->message = "Theres a new order from {$customer->name}";
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        //dd($this->merchantEmail);
        //return new PrivateChannel('order');
        return [$this->merchantEmail];
    }
}
