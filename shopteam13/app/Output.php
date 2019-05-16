<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
	protected $table = "output";
	protected $primaryKey = 'ID';
    protected $guarded = [];
     public function outputBill(){
        return $this->belongsTo('App\Bills','BillID','ID');
    }
}
