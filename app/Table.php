<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public $timestamps = false;
    
    protected $table = 'tables';

    protected $fillable = [
        'name', 'user_id'
    ];

    public function bookedBy()
    {
        return $this->hasOne(User::class);
    }
}
