<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        'name','area','status','price','title','content','type_id','image'
    ];

    public function customers()
    {
        return $this->belongsToMany('App\Customer', 'customer_product', 'product_id', 'customer_id');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
