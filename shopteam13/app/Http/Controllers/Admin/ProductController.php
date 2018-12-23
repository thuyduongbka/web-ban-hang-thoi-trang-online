<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Product;
use App\TypeProduct;
use App\Color;
use DB;


class ProductController extends Controller
{
    public function getProduct(){
    	$data['product'] = DB::table('typeproduct')->join('product','product.TypeID','=','typeproduct.ID')->orderBy('product.ID','desc')->get();    	
       // dd($data);
    	return view('pageAdmin.danhsachsanpham',$data);
    }
    public function getAddProduct(){
    	$data1['color'] = Color::All();
    	$data2['typepro'] = TypeProduct::All();
    	return view('pageAdmin.themsanpham',$data2,$data1);
    }
    public function postAddProduct(AddProductRequest $request){
    	$product = new Product;
    	$product->Name = $request->name;
    	$product->Price = $request->price;   
        $product->Quantity = 0;    	
    		$fileimage = $request->image1[0]->getClientOriginalName();
    	$product->Image1 = $fileimage;
    		$fileimage = $request->image2[0]->getClientOriginalName();
    	$product->Image2 = $fileimage;
    		$fileimage = $request->image3[0]->getClientOriginalName();
    	$product->Image3 = $fileimage;
    	$product->Description = $request->description;    		
    	$product->TypeID = $request->type;
    	$product->ColorID = $request->color;

    	$product->save();
    	return redirect()->intended('admin/product');
    	
    }
    public function getEditProduct($id){
    //	$data1['color'] = Color::All();
    //	$data2['typepro'] = TypeProduct::All();
    	$data['product'] = Product::Find($id);
    	return view('pageAdmin.suasanpham',$data);
    }
    public function postEditProduct(Request $request,$id){
    	$product = Product::Find($id);
    	$product->Name = $request->name;
    	$product->Price = $request->price;
    	$product->Quantity = $request->quantity;
    	$product->Description = $request->description;    
    	$product->save();
    	return redirect()->intended('admin/product');		
    }
    public function getDeleteProduct($id){
    	Product::destroy($id);
    	return back();
    }
}
