<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopGroup extends Model
{
    use HasFactory;
    protected $table = 'ps_shop_group';

    /**
     * Los campos que se pueden modificar.
     *
     * @var array
     */
    protected $fillable = [
        'id_shop_group',
        'name',
        'share_customer',
        'share_order',
        'share_stock',
        'active',
        'deleted'

    ];
    public function shop()
    {
        return $this->hasOne(Shop::class, 'id_shop_group');
    }
}
