<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureProduct extends Model
{
    use HasFactory;
    protected $table = 'ps_feature_product'; 

    protected $fillable = [
        'id_feature',
        'id_product',
        'id_feature_value'
    ];

    /**
     * Relaciones con otros modelos.
     */
    public function feature()
    {
        return $this->belongsTo(Feature::class, 'id_feature');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function featureValue()
    {
        return $this->belongsTo(FeatureValue::class, 'id_feature_value');
    }
}
