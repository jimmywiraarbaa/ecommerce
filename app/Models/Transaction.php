<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'amount'
    ];


    public function order(){
        return $this->hasOne(Order::class);
    }

    public function product(){
        return $this->hasOne(Product::class);
    }
}
