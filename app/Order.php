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
        return $this->hasMany(Product::class);
    }
}
