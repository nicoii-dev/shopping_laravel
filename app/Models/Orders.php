<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Orders extends Model
{

    protected $fillable = [
        'user_id',
        'sub_total',
        'discount',
        'shipping_fee',
        'tax',
        'total_amount',
        'order_status',
        'billing_address',
        'shipping_address',
        'payment_type'
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'id', 'order_id');
    }

}
