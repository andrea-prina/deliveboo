<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $fillable = [
        'type_name',
        'icon_path'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
