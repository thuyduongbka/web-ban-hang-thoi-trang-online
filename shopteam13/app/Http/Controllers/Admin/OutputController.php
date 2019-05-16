<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Output;


class OutputController extends Controller
{
    public function getOutput(){
    	$output = Output::ALL();
    	return view('pageAdmin.xuathang',compact('output'));
    }
}
