<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{

    public $table = "food_items";

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'image_path',
        'price',
        'availability'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

}