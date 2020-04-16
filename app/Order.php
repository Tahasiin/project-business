<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_id', 'customer_name', 'country', 'address', 'zip_code', 'phone', 'email', 'payment_method', 'how_found', 'message', 'time'];
}
