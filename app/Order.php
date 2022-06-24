<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['First_name', 'Last_name', 'Email', 'whatsapp_number', 'Message'];
}
