<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'ps_category'; 
    
    /**
    * Listas de campos
    *
    * @var array
    */
    protected $fillable = [
        'id_category',
        'id_parent',
        'id_shop_default', 
        'level_depth', 
        'active',
        'date_add', 
        'date_upd', 
        'position', 
        'is_root_category',
    ];
    
   

    public function categoryLang(){
        return $this->hasOne(CategoryLang::class,'id_category','id_category');
    }

    public function products()
    {
        return $this->belongsToMany(CategoryProduct::class, 'id_category');
    }
}
