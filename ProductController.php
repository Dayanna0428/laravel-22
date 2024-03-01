<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   

    public function create() {

        return view('forProduct');
       
    }

    public function store(Request $request ){

       $producto = new Product();
       $producto->name=$request->name;  
       $producto->price=$request->price;
       $producto->save();
       return $producto;


    }



}