<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureValue extends Model
{
    use HasFactory;
    protected $table = 'ps_feature_value';
    protected $fillable = [
        'id_feature',
        'id_feature_value',
        'custom',

    ];
    public function feature()
    {
        return $this->belongsTo(Feature::class, 'id_feature');
    }

    
}
