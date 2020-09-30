<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Order;
class Orderdetail extends Model
{
    protected $guarded = [];

    public function Product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function Order()
    {
    	return $this->belongsTo(Order::class);
    }
}
