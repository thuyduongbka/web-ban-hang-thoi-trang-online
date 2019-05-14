<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "status";
    protected $primaryKey = 'ID';
    protected $guarded = [];
    public function statusBills(){
    	return $this->hasMany('App\Bills','StatusID','ID');
    }
}
