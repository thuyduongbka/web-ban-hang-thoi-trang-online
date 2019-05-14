<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Slide;
use App\Banner;
use App\Product;
use App\TypeProduct;
use App\Color;
use App\Customer;
use App\Bills;
use App\BillDetail;
use App\Status;


class HomeController extends Controller
{
    public function getHome(){
    	$numCustomer = Customer::count();
    	$numProduct = Product::count();
    	$numType = TypeProduct::count();
    	$numOrder = Bills::count();
    	//dd($numCustomer);
    	return view('pageAdmin.trangchu',compact('numCustomer','numProduct','numType','numOrder'));    	
    }
    public function getLogout(){
    	Auth::logout();
    	return redirect()->intended('admin/login');
    }
    public function getCustomer(){
        $customer = Customer::All();
        return view('pageAdmin.danhsachkhachhang',compact('customer'));
    }
}
