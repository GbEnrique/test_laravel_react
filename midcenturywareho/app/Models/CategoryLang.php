<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLang extends Model
{
    use HasFactory;
    protected $table = 'ps_category_lang'; 

    protected $fillable = [
        'id_category',
        'id_shop',
        'id_lang',
        'name',
        'description',
        'link_rewrite',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'headingh1',
    ];

    /**
     * Relación con el modelo Category.
     */

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    
}
