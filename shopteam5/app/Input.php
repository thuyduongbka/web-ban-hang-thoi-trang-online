<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    protected $table = "input";
    protected $primaryKey = 'ID';
    protected $guarded = [];
    public function inputProduct(){
    	return $this->belongsTo('App\Product','ProductID','ID');
    }
}
