<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'sku',
        'name',
        'description',
        'image',
        'price',
        'old_price',
        'status',
        'schedule_date',
        'schedule_time',
        'tags',
        'stock',
        'url',
        'coupon',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function variant()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
