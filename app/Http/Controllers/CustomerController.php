<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    

    public function index(){

        $customers = Customer::all();

        return view('customers',compact('customers'));
    }

    public function show($id){

        $customer = Customer::findOrFail($id);

        return view('customer',compact('customer'));
    }
}
