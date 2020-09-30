<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
class Customer extends Model
{
   protected $guarded = [];

   public function Order()
   {
   	return $this->hasMany(Order::class);
   }
}
