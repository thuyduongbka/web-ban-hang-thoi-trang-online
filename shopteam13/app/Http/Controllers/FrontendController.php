<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use App\Banner;
use App\Product;
use App\TypeProduct;
use App\Color;
use App\Customer;
use Cart,Hash,Auth;
use App\Http\Requests\UserSigninRequest;
use App\Http\Requests\EditProfileRequest;
use App\Bills;
use App\BillDetail;
use App\Status;

class FrontendController extends Controller
{
    public function getHome(){						// trang chu 
    	$slide = Slide::All();
    	$banner = Banner::All();
    	return view('pageUser.trangchu',compact('slide','banner'));
    }
    public function getProduct(){
    	$typepro = TypeProduct::All();				// danh sach san pham 
    	$product = Product::All();
        $color = Color::All();
    	return view('pageUser.danhsachsanpham',compact('typepro','product','color'));
    }	
    public function getProductDetail($id){			// chi tiet san pham 
    	$product = Product::find($id);									// lay thong tin san pham 
    	$typepro = TypeProduct::where('ID',$product->TypeID)->first();	// lay ra ten loai san pham 
    	$color = Color::where('ID',$product->ColorID)->first();			// lay ra ten mau cua san pham 
    	$relatepro = Product::where('TypeID',$product->TypeID)->get();         
        if (Cart::get($id) )  $productincart = Cart::get($id)->quantity;
        else $productincart = 0 ;
    	return view('pageUser.chitietsanpham',compact('product','typepro','color','relatepro','productincart'));
    }
    public function getContact(){					// lien he 
    	return view('pageUser.lienhe');
    }
     public function getFaqs(){						// lien he 
    	return view('pageUser.huongdan');
    }
    public function getAbout(){						// gioi thieu 
    	return view('pageUser.gioithieu');
    }                
    public function getSignin(){
    	return view('pageUser.dangki');				// dang ki 
    }
    public function postSignin(UserSigninRequest $request){     // dang ki
        $customer = new Customer();
        $customer->customername = $request->name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->Phone = $request->phone;
        $customer->Address = $request->address;
        $customer->Gender = $request->gender;
        $customer->save();
        return redirect()->back()->with('signinok','Tạo xong. Đăng nhập để mua hàng');
    }
    public function getLogin(){
        return view('pageUser.dangnhap');           // dang nhap 
    }
    public function postLogin(Request $request){    // dang nhap 
        $arr = ['email' => $request->email, 'password'=>$request->password];
        if (Auth::guard('customer')->attempt($arr)){
            return redirect()->intended('/');
          //  if (Auth::guard('customer')->check()) dd(Auth::guard('customer')->user()->customername);
          //  else dd("0");
            
        } else {
            return back()->withInput()->with('loginfail','Tài khoản hoặc mật khấu chưa đúng ');
        }
    }
    public function getLogout(){
        Auth::guard('customer')->logout();
        return redirect()->intended('/login');
    }
    public function getAddCart($id){				// them san pham vao gio hang 
    	$product = Product::find($id);
    	Cart::add(array(		  
		  array(
		      'id' => $product->ID,
		      'name' => $product->Name,
		      'price' => $product->Price,
		      'quantity' => 1,
		      'attributes' => array(
    	        'size' => 'L',
    	        'image' => $product->Image1    	       
		      )
		  )
		));
    	$items = Cart::getContent();
		return back();
	}
	public function postAddCart(Request $request,$id){				// them san pham co so luong vao gio hang 
        $product = Product::find($id);
        Cart::add(array(          
          array(
              'id' => $product->ID,
              'name' => $product->Name,
              'price' => $product->Price,
              'quantity' => $request->quantity,
              'attributes' => array(
                'size' => $request->size,
                'image' => $product->Image1               
              )
          )
        ));      
        return back();  

	}
	public function getDeleteCart($id){            // xoa 1 san pham trong gio hang 
        Cart::remove($id);
        return redirect()->back();
    }
    public function getDeleteAll(){                 // xoa tat ca san pham trong gio hang 
        Cart::clear();
        return redirect()->back();
    }
	public function getOrder(){						// xem don hang 
        if (Auth::guard('customer')->check() ){         // xem don hang khi da dang nhap 
            if (!Cart::isEmpty()){
                $cartTotalQuantity = Cart::getTotalQuantity(); //tong soluong
                $subTotal = Cart::getSubTotal(); // tong tien
                $cartCollection = Cart::getContent(); // cac gia tri
            }
            $id = Auth::guard('customer')->user()->id;
            $customer = Customer::find($id);  
            return view('pageUser.donhang',compact('cartCollection','subTotal','cartTotalQuantity','customer'));    
        } else{                                         // muon xem don hang phai dang nhap
            return redirect()->intended('/login');
        }
		
	}
    public function postOrder(Request $request){
        if (Cart::isEmpty()){
            return redirect()->intended('/product');
        }
        else{
            $id = Auth::guard('customer')->user()->id;
            $customer = Customer::find($id);  
            $customer->Address = $request->address;
            $customer->Note = $request->note;
            $customer->save();            
            //
            $bill = new Bills();
            $bill->CustomerID = $customer->id;
            $bill->DateOrder = date("Y-m-d");
            $bill->TotalPrice = Cart::getSubTotal();
            $bill->TotalQuantity = Cart::getTotalQuantity(); 
            $bill->StatusID = 1;
            $bill->save();
            //
            $items = Cart::getContent();
            foreach ($items as $item ) {
                $billdetail = new BillDetail();
                $billdetail->BillID = $bill->ID;
                $billdetail->ProductID = $item->id;
                $billdetail->Price = $item->getPriceSum();
                $billdetail->Quantity = $item->quantity;
                $billdetail->Size = $item->attributes['size'];
                $billdetail->save();              
            }
            //
             Cart::clear();
            return redirect()->intended('/profile');
        }        
    }
    public function getProfile(){                                          // xem trang ca nhan 
       $id = Auth::guard('customer')->user()->id;
       $customer = Customer::find($id);  
       $bills = Bills::where('CustomerID',$id)->get();
       $status = Status::All();
       return view('pageUser.trangcanhan',compact('customer','bills','status'));
    }
    public function getEditProfile(){                                       // hien thi trang edit profile
        $id = Auth::guard('customer')->user()->id;
        $customer = Customer::find($id);  
       return view('pageUser.suatrangcanhan',compact('customer'));
    }
    public function postEditProfile(EditProfileRequest $request,$id){        // sau trang ca nhan 
        $customer = Customer::find($id);  
        $customer->customername = $request->name;
        $customer->email = $request->email;       
        $customer->Phone = $request->phone;
        $customer->Address = $request->address;
        $customer->Gender = $request->gender;       
        $customer->update();     
        return redirect()->intended('/');
    }
    public function getDeleteProfile($id){
        Auth::guard('customer')->logout();
        
        $customer = Customer::find($id);
        $bills = Bills::where('CustomerID',$id)->get();
        foreach ($bills as $bill) {
            $billdetail = BillDetail::where('BillID',$bill->ID)->delete();
           Bills::destroy($bill->ID);
        }
        Customer::destroy($customer->id);
        return redirect()->intended('/login');    
    }
    public function getOrderDetail($id){
        $bill = Bills::find($id);
        $billdetail = BillDetail::where('BillID',$id)->get();
        $product = Product::All();   
        $status = Status::find($bill->StatusID);    
        return view('pageUser.chitietdonhang',compact('bill','billdetail','product','status'));        
    }
    public function getDeleteBill($id){
        $bill = Bills::find($id);
        //dd($bill);
        $billdetail = BillDetail::where('BillID',$id)->delete();        
        Bills::destroy($id);
        return redirect()->intended('/profile');
    }
    
    public function getSortAsc(){
        $typepro = TypeProduct::All();              // danh sach san pham 
        $product = Product::orderBy('Price')->get();
        $color = Color::All();
        return view('pageUser.danhsachsanpham',compact('typepro','product','color'));
    }   
    public function getSortDesc(){
        $typepro = TypeProduct::All();              // danh sach san pham 
         $product = Product::orderBy('Price','desc')->get();
         $color = Color::All();
        return view('pageUser.danhsachsanpham',compact('typepro','product','color'));
    }   
    public function getSearch(Request $request){
        $typepro = TypeProduct::All();              // danh sach san pham 
         $product = Product::where('Name','like','%'.$request->searchproduct.'%')->get();
         $color = Color::All();
        return view('pageUser.danhsachsanpham',compact('typepro','product','color'));
    }   
    public function getSearchColor($id){
        $typepro = TypeProduct::All();              // danh sach san pham 
         $product = Product::where('ColorID',$id)->get();
         $color = Color::All();
        return view('pageUser.danhsachsanpham',compact('typepro','product','color'));
    }

}
