<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        protected $fillable = [
            'order_date',
            'total_amount'
        ];
}
