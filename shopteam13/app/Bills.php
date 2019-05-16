<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table = "bills";
    protected $primaryKey = 'ID';
    protected $guarded = [];
    public function billdetail(){
    	return $this->hasMany('App\BillDetail','BillID','ID');
    }
    public function outputBill(){
        return $this->hasMany('App\Ouput','BillID','ID');
    }
    public function customer(){
    	return $this->belongsTo('App\Customer','CustomerID','id');
    }
    public function status(){
    	return $this->belongsTo('App\Status','StatusID','ID');
    }
}
