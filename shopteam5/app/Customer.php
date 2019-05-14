<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function bills(){
    	return $this->hasMany('App\Bills','CustomerID','id');
    }
}
