<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Shop extends Model
{
    /**
     * La tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'ps_shop';

    /**
     * Los campos que se pueden modificar.
     *
     * @var array
     */
    protected $fillable = [
        'id_shop',
        'id_shop_group',
        'name',
        'theme_name',
        'active',
    ];

    /**
     * Relaciones con otros modelos.
     */

    public function productLang()
    {
        return $this->hasOne(ProductLang::class, 'id_shop');
    }
    public function shopGroup()
    {
        return $this->belongsTo(ShopGroup::class, 'id_shop_group');
    }
}
