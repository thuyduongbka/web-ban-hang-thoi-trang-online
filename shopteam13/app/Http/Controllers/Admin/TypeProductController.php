<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddTypeRequest;
use App\Http\Requests\EditTypeRequest;
use App\TypeProduct;
use App\Product;

class TypeProductController extends Controller
{
    public function getType(){
    	$data['typeList'] = TypeProduct::all();
    	return view('pageAdmin.danhsachloaisanpham',$data);
    }
    public function postType(AddTypeRequest $request){
    	$typeProduct = new TypeProduct;
    	$typeProduct->TypeName = $request->name;
    	$typeProduct->save();
    	return back();
    }
    public function getEditType($id){
    	$data['typepro'] = TypeProduct::find($id);
    	return view('pageAdmin.sualoaisanpham',$data);
    }
    public function postEditType(EditTypeRequest $request, $id){    
    	$typeProduct = TypeProduct::find($id);
    	$typeProduct->TypeName = $request->name;           
    	$typeProduct->save();   
    	return redirect()->intended('admin/typeproduct'); 

    }
    public function getDeleteType($id){
        $product = Product::where('TypeID',$id)->delete();
    	TypeProduct::destroy($id);
    	return back();
    }
}
