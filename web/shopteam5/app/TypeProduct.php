<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $table = "typeproduct";
    protected $primaryKey = 'ID';
    protected $guarded = [];

    public function product(){
    	return $this->hasMany('App\Product','TypeID','ID');
    }
}
