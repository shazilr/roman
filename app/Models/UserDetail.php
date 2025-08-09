<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
   protected $fillable = [
       'user_id',
       'first_name',
       'last_name',
       'phone',
       'password',
       'address',
       'country',
       'city',
       'zip',
       'state',
       'type',
   ];
}
