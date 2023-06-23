<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['user_id','product_id','product_name', 'quantity', 'total_price','updated_at', 'created_at', 'product_image'];
}