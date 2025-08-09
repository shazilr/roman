<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'content',
    ];

    protected $casts = [
        'content' => 'array', // Cast the content to an array
    ];
}
