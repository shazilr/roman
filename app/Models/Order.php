<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
 protected $fillable = [
     'user_id',
     'method',
     'total_quantity',
     'total_paid_amount',
     'payment_status',
     'coupon_code',
     'coupon_discount',
     'reference_id'

 ];
}
