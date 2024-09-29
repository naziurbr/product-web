<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {

        
        
        return view("product.index",[
            "products"=> product::all()
        ]);
      
    }
    public function product(){
         return view('product.create');   
    }
    public function store(Request $request)
    {
       Product::create($request->input());

        return redirect()->route('product.index');
    }
}
