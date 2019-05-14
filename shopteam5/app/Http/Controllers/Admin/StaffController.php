<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Hash;

class StaffController extends Controller
{
    public function getStaff(){
    	$admin = Admin::all();
    	return view('pageAdmin.danhsachnhanvien',compact('admin'));
    }    
    public function postAddStaff(Request $req){
    	$admin = new Admin();
    	$admin->name = $req->name;
    	$admin->email = $req->email;
    	$admin->password = Hash::make($req->password);
    	$admin->save();
    	return back();
    }
    public function getDeleteStaff($id){
    	$admin = Admin::find($id);
    	Admin::destroy($admin->id);
    	return back();
    }
}
