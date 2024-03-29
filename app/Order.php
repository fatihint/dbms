<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $fillable = [
        'price'
    ];

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('amount');
    }

    public function status()
    {
        return $this->hasOne('App\Status');
    }
}
