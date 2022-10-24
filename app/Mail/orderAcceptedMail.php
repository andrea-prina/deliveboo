<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class orderAcceptedMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $currentOrder;
    protected $foodItems;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($currentOrder, $foodItems)
    {
        //
        $this->currentOrder = $currentOrder;
        $this->foodItems = $foodItems;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('order confirmation')->view('mail.acceptedOrder',['currentOrder' => $this->currentOrder, 'foodItems'=>$this->foodItems]);
     
    }
}
