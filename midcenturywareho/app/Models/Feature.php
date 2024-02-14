<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $table = 'ps_feature';

    protected $fillable = [
        'id_feature',
        'position'
    ];
   
    public function featureLang(){
        return $this->hasOne(FeatureLang::class,'id_feature');
    }

    public function products()
    {
        return $this->belongsToMany(FeatureProduct::class, 'id_feature');
    }
}
