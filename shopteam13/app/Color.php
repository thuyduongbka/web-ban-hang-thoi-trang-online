<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = "color";
    protected $primaryKey = 'ID';
    protected $guarded = [];
    public function colorProduct(){
    	return $this->hasMany('App\Product','ColorID','ID');
    }
}
