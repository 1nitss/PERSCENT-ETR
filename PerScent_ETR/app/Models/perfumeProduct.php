<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerfumeProduct extends Model
{
    protected $table = 'perfume_products';

    // Define any relationships with other models
    // For example, if a perfume product belongs to a brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Additional functionality or logic specific to the PerfumeProduct model can be defined here
}

?>