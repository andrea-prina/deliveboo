<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Food extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'image_path',
        'price',
        'availability'
    ];

    public function users(){
        return $this->BelongsTo('app\User');
    }

}
