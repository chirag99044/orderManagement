<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'item';

    public function order()
    {
        return $this->belongsTo(order::class);
    }
    
    public function taxes()
    {
        return $this->hasMany(tax::class);
    }
    
}
