<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'ps_product'; 
    
    protected $fillable = [
        'id_product',
        'id_shop_default',
        'id_tax_rules_group',
        'on_sale',
        'online_only',
        'ecotax',
        'quantity',
        'minimal_quantity',
        'low_stock_alert',
        'price',
        'wholesale_price',
        'unity',
        'unit_price_ratio',
        'additional_shipping_cost',
        'width',
        'height',
        'depth',
        'weight',
        'out_of_stock',
        'additional_delivery_times',
        'customizable',
        'uploadable_files',
        'text_fields',
        'active',
        'redirect_type',
        'id_type_redirected',
        'available_for_order',
        'show_condition',
        'condition',
        'show_price',
        'indexed',
        'visibility',
        'cache_is_pack',
        'cache_has_attachments',
        'is_virtual',
        'advanced_stock_management',
        'pack_stock_type',
        'state'
    ];
    
    public function categories()
    {
        return $this->belongsToMany(CategoryProduct::class, 'id_product');
    }

    public function features()
    {
        return $this->belongsToMany(FeatureProduct::class, 'id_product');
    }

    public function productLang(){
        return $this->hasOne(ProductLang::class,'id_product');
    }
}
