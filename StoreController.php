<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
   

    public function create() {

        return view('forStore');
       
    }

    public function store(Request $request ){

       $st = new Store ();
       $st->name=$request->name;  
       $st->description=$request->description;
       $st->city=$request->city;
       $st->save();
       return $st;


    }



}