<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'perfume_products';

    protected $fillable = ['perfume_name', 'perfume_desc', 'perfume_price', 'stocks', 'perfume_image'];
}
