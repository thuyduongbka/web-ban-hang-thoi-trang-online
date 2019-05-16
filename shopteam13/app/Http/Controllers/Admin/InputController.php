<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Input;
use App\Product;
class InputController extends Controller
{
    public function getInput(){
    	$input = Input::orderby('ID','desc')->get(); 
    	$product = Product::All();
    	return view('pageAdmin.nhaphang',compact('input','product'));
    }
    public function postInput(Request $req){
    	$product = Product::find($req->id);
    	$input = new Input();
    	$input->DateIn = date("Y-m-d"); 
    	$input->Quantity = $req->quantity;
    	$input->ProductID = $req->id;
    	$product->Quantity = $product->Quantity + $req->quantity;
    	$input->save();
    	$product->save();
    	return back();
    }
}
