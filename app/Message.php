<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name','country', 'phone', 'email', 'customer_type', 'priority_level', 'query_type', 'message', 'time'];
}
