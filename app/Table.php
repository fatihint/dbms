<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{

    protected $table = 'tables';

    protected $fillable = [
        'name', 'user_id'
    ];

    public function bookedBy()
    {
        return $this->hasOne(User::class);
    }
}
