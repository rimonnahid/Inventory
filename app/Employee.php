<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Advancesalary;
use App\Attendence;

class Employee extends Model
{
    protected $guarded = [];

    public function Advancesalary()
    {
    	return $this->hasMany(Advancesalary::class);
    }

    public function Attendence()
    {
    	return $this->hasMany(Attendence::class);
    }

}
