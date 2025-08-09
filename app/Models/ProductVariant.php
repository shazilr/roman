<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = [
        'product_id',
        'color',
        'quantity',
        'size',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

}
