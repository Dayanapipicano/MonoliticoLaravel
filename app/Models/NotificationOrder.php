<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationOrder extends Model
{
    use HasFactory;
    public function pedido(){
        return $this->belongsTo('App\Models\Order');
    }
}
