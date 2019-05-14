<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $primaryKey = 'ID';
    protected $guarded = [];
    public function productType(){
    	return $this->belongsTo('App\TypeProduct','TypeID','ID');
    }
    public function colorProduct(){
    	return $this->belongsTo('App\Color','ColorID','ID');
    }
    public function billDetail(){
    	return $this->hasMany('App\BillDetail','ProductID','ID');
    }    
    public function inputProduct(){
    	return $this->hasMany('App\Input','ProductID','ID');
    }

}
