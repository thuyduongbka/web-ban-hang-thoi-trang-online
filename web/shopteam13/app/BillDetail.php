<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "billdetail";
    protected $primaryKey = 'ID';
    protected $guarded = [];

    public function product(){
    	return $this->belongsTo('App\Product','ProductID','ID');
    }
    public function bills(){
    	return $this->belongsTo('App\Bill','BillID','ID');
    }
}
