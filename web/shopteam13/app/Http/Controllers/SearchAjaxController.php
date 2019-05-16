<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchAjaxController extends Controller
{
    public function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');            
            $data = Product::where('Name','like','%'.$query.'%')->get();            
            $output = '<ul>';
            foreach($data as $product)
            {
               $output .= '
               <li style="padding: 14px 25px;"><a style="color:black; text-decoration: none; font-family: Poppins-Regular; background-color: while; border-left :5px solid grey; padding: 10px 20px;" href="http://localhost/shopteam13/public/product/detail/'. $product->ID .'">'.$product->ID.'. '.$product->Name.'</a></li>
               ';
           }
           $output .= '</ul>';
           echo $output;
       } 
    }
    
}

