<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class orderMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $currentOrder;
    protected $restaurant;

    protected $foodItems;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $restaurant, $foodItems)
    {
        $this->currentOrder = $order;
        $this->restaurant = $restaurant;
        $this->foodItems = $foodItems;
    }
 

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('order confirmation')->view('mail.orderMail',['currentOrder' => $this->currentOrder, 'restaurant'=>$this->restaurant, 'foodItems'=>$this->foodItems]);
    }
}
