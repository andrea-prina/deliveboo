<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'restaurant_name',
        'vat_number',
        'email',
        'password',
        'address',
        'delivery_fee',
        'free_delivery',
        'image_path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function types()
    {
        return $this->belongsToMany('App\Models\Type');
    }

    public function foods(){
        return $this->hasMany(FoodItem::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
