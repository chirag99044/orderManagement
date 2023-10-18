<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'orderId'; 

    protected $fillable = ['orderNo', 'orderDate','IsDelete']; 
    protected $attributes = [
        'IsDelete' => false,
    ]; 
}
