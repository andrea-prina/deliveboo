<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_dateTime',
        'customer_firstName',
        'customer_lastName',
        'customer_address',
        'customer_email',
        'customer_phoneNumber',
        'additional_notes'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function food_items(){
        return $this->belongsToMany(FoodItem::class)->withPivot('food_quantity');
    }
}
