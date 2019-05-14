<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cart;
use View;
use App\Product;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       view()->composer('pageUser.header',function($view){
            if (!Cart::isEmpty()){
                $cartTotalQuantity = Cart::getTotalQuantity(); //tong soluong
                $subTotal = Cart::getSubTotal(); // tong tien
                $cartCollection = Cart::getContent(); // cac gia tri              
                $view->with(['product_cart'=>$cartCollection,'totalPrice'=>$subTotal, 'totalQty'=>$cartTotalQuantity]) ;
            }
             
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
