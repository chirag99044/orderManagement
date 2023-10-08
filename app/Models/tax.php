<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tax extends Model
{
    protected $table = 'tax';

    public function item()
    {
        return $this->belongsTo(Item::class);
    }   
}
