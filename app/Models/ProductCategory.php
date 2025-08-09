<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'name',
        'image',
        'status',
        'schedule_date',
        'schedule_time',
    ];

    public function products()
    {
        return $this->hasOne(Product::class,'category_id','id');
    }
}
