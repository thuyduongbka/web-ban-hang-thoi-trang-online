<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bills;
use App\BillDetail;
use App\Status;
use App\Customer;
use App\Product;
use App\Output;

class OrderController extends Controller
{
    public function getOrder(){
    	$bill1 = Bills::where('StatusID',1)->get();
    	$bill2 = Bills::where('StatusID',2)->get();
    	$bill3 = Bills::where('StatusID',3)->get();
    	$bill4 = Bills::where('StatusID',4)->get();
    	return view('pageAdmin.xemdonhang',compact('bill1','bill2','bill3','bill4'));
    }
    public function getOrderDetail($id){
    	$bills = Bills::find($id);
        $billdetail = BillDetail::where('BillID',$id)->get();
        $product = Product::All(); 
        $customer = Customer::find($bills->CustomerID);
        $status = Status::find($bills->StatusID);
        return view('pageAdmin.chitietdonhang',compact('bills','billdetail','product','customer','status'));        
    }
    public function getChangeOrder($id){
    	$bill = Bills::find($id);
    	
    	if ($bill->StatusID == 3){    		
    		$billdetail = BillDetail::where('BillID',$id)->get();
    		for ($i=0; $i<count($billdetail); $i++){
    			$bd = $billdetail[$i];
    			$product = Product::find($bd->ProductID);
    			$product->Quantity = $product->Quantity - $bd->Quantity;
    			$product->save();			// giao hang thanh cong thi xoa so luong mat hang dang co
    		}
            $output = new Output();
            $output->DateOut = date('Y-m-d');
            $output->Quantity = $bill->TotalQuantity;
            $output->BillID = $bill->ID;
            $output->TotalPrice = $bill->TotalPrice;
            $output->save();    		
    	}
    	if ($bill->StatusID < 4){    		
    		$bill->StatusID = $bill->StatusID +1;
    		$bill->save();
    	}
    	return back();
    }
}
