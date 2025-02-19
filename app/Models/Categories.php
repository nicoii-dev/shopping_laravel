<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Products;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
    ];

    public function categoryProducts()
    {
        return $this->hasMany(Products::class, 'categories_id', 'id');
    }
}
