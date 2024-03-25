<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   function addProduct() {
       return view('bend.products.addProduct');
   }
   function storeProduct(Request $request){
      dd($request->all());
   }
}
