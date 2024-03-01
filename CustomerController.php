<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller{
   

    public function create1() {

        return view('forCustomer');
       
    }

    public function store(Request $request ){

       $cust = new Customer();
       $cust->name=$request->name;  
       $cust->age=$request->age;
       $cust->phone=$request->phone;
       $cust->Email=$request->Email;
       $cust->save();
       return $cust;


    }



}
