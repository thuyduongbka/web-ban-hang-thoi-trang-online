<?php

Route::get('/', 'FrontendController@getHome')->name("/");							// trang chu 
Route::group(['prefix'=>'product'],function(){							
	Route::get('/','FrontendController@getProduct');						// danh sach san pham 
	Route::get('detail/{id}','FrontendController@getProductDetail');		// chi tiet tung san pham 
});
Route::get('cart/{id}','FrontendController@getAddCart');				// them san pham vao gio hang 
Route::post('cart/{id}','FrontendController@postAddCart');

Route::get('delete/{id}','FrontendController@getDeleteCart');			// xoa tung san pham khoi gio hang 
Route::get('deleteall','FrontendController@getDeleteAll');					// xoa tat ca gio hang 		

Route::group(['prefix'=>'order'],function(){
	Route::get('/','FrontendController@getOrder');						// xem don hang 
	Route::post('/','FrontendController@postOrder');					// mua hang 
});
Route::get('billdetail/{id}','FrontendController@getOrderDetail');						// xem chi tiet don hang 
Route::get('deletebill/{id}','FrontendController@getDeleteBill');		// huy don hang 

Route::group(['prefix'=>'login'],function(){
	Route::get('/','FrontendController@getLogin')->name('login');						// dang nhap 
	Route::post('/','FrontendController@postLogin');	
});

Route::post('loginajax','AjaxController@postLogin')->name('loginajax'); // login ajax


Route::group(['prefix'=>'signin'],function(){
	Route::get('/','FrontendController@getSignin');						// dang ki 
	Route::post('/','FrontendController@postSignin');
});
Route::get('logout','FrontendController@getLogout');					// dang xuat 

Route::get('search','FrontendController@getSearch');					// tim kiem 

Route::get('contact','FrontendController@getContact');					// lien he 
Route::get('about','FrontendController@getAbout');						// gioi thieu 
Route::get('faqs','FrontendController@getFaqs');	

Route::get('profile','FrontendController@getProfile');
Route::get('profile/edit','FrontendController@getEditProfile');
Route::post('profile/edit/{id}','FrontendController@postEditProfile');
Route::get('profile/delete/{id}','FrontendController@getDeleteProfile');

Route::get('search/{content}','FrontendController@getSearch');				// tim kiem 
Route::get('sort/asc','FrontendController@getSortAsc');		
Route::get('sort/desc','FrontendController@getSortDesc');	
Route::get('search/color/{id}','FrontendController@getSearchColor')	;

Route::post('search/name', 'SearchAjaxController@getSearchAjax')->name('search'); // search ajax

// quen mat khau 

Route::get('forgotpw','FrontendController@getForgotPassword');
Route::post('forgotpwd','AjaxController@postForgotPassword')->name('forgotpwd');
/*---------------------------Controller cua Admin ------------------------------------------------*/

Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'admin/login','middleware'=>'CheckLogedIn'],function(){
			Route::get('/','LoginController@getLogin');
			Route::post('/','LoginController@postLogin');
		});
	Route::get('admin/logout','HomeController@getLogout');
	
	Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
		
		Route::get('home','HomeController@getHome');							// trang chu admin		

		Route::group(['prefix'=>'typeproduct'],function(){						// loai san pham 
			Route::get('/','TypeProductController@getType');
			Route::post('/','TypeProductController@postType');
			//
			Route::get('edit/{id}','TypeProductController@getEditType');
			Route::post('edit/{id}','TypeProductController@postEditType');
			//
			Route::get('delete/{id}','TypeProductController@getDeleteType');
		});
		Route::group(['prefix'=>'product'],function(){						// san pham 
			Route::get('/','ProductController@getProduct');
			//
			Route::get('add','ProductController@getAddProduct');
			Route::post('add','ProductController@postAddProduct');
			//
			Route::get('edit/{id}','ProductController@getEditProduct');
			Route::post('edit/{id}','ProductController@postEditProduct');
			//
			Route::get('delete/{id}','ProductController@getDeleteProduct');
		});
		Route::group(['prefix'=>'order'],function(){	
			Route::get('/','OrderController@getOrder');
			Route::get('detail/{id}','OrderController@getOrderDetail');
			Route::get('changestatus/{id}','OrderController@getChangeOrder');
		});
		Route::group(['prefix'=>'input'],function(){
			Route::get('/','InputController@getInput');
			Route::post('/','InputController@postInput');
		});
		Route::group(['prefix'=>'output'],function(){
			Route::get('/','OutputController@getOutput');
		});
		Route::group(['prefix'=>'customer'],function(){
			Route::get('/','HomeController@getCustomer');

		});
		Route::group(['prefix'=>'staff'],function(){
			Route::get('/','StaffController@getStaff');			
			Route::post('/add/','StaffController@postAddStaff');
			Route::get('/delete/{id}','StaffController@getDeleteStaff');		
		});


	});
});