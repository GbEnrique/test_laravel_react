<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;
    protected $table = 'ps_category_product'; 

    protected $fillable = [
        'position',
        'id_category',
        'id_product'
    ];
     /**
     * Relaciones con otros modelos.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
