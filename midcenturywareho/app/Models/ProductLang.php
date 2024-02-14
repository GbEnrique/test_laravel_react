<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLang extends Model
{
    use HasFactory;
    protected $table = 'ps_product_lang';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_shop',
        'id_lang',
        'description',
        'description_short',
        'link_rewrite',
        'meta_description',
        'meta_keywords',
        'meta_title',
        'name',
        'available_now',
        'available_later',
        'delivery_in_stock',
        'delivery_out_stock',
    ];

    /**
     * Relationship with the Product model.
     */

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'id_shop');
    }
}
