<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureLang extends Model
{
    use HasFactory;
    protected $table = 'ps_feature_lang'; 

    protected $fillable = [
        'id_feature',
        'name'
    ];
    public function feature()
    {
        return $this->belongsTo(Feature::class, 'id_feature');
    }
}
