<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected  $table = 'question';

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}