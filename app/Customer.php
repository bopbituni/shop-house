<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
    protected $fillable = [
        'date', 'time', 'name', 'phone', 'email', 'content'
    ];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'customer_product', 'customer_id', 'product_id');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
