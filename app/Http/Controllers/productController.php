<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    //

    public function showproduct(){
        return view('/product/addproduct');
    }


    public function storeproduct(Request $request){
      
        $formFields = $request->validate([
            'name' => 'required|min:6',
            'price' => 'required|regex:/^\d+(\.\d{1,3})?$/',
            'details' => 'required|max:100'
        ]);
        $product = Product::create($formFields);
        return redirect('/listproducts')-> with('message','product added successfully!!');
    }

    public function getproductlist(){

        $productlist = Product::all();

        return view('/product/listproducts',['productlist'=>$productlist]);
    }

}

