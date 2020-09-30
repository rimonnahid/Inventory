<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Supplier;
use App\Category;
use App\Orderdetail;

class Product extends Model
{
    protected $guarded = [];
    
    public function Supplier()
    {
    	return $this->belongsTo(Supplier::class);
    }
    
    public function Category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function Orderdetail()
    {
    	return $this->hasMany(Orderdetail::class);
    }
}
