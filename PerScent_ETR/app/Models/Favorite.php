<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table = 'favorites';
    protected $fillable = ['product_id','product_name', 'product_desc', 'product_image', 'created_at','updated_at', 'user_id', 'price'];
}

?>