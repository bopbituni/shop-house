<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
