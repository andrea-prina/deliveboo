<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'order_dateTime',
        'customer_firstName',
        'customer_lastName',
        'customer_address',
        'customer_phoneNumber',
        'order_price',
        'additional_notes'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
