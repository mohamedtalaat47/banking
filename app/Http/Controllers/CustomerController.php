<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CustomerController extends Controller
{
    

    public function index(){

        $customers = Customer::all();

        return view('customers',compact('customers'));
    }

    public function show($id){

        $customer = Customer::findOrFail($id);
        $reciever = Customer::all()->except($customer->id);

        return view('customer',compact('customer','reciever'));
    }

    public function transfer_view($sender,$reciever){

        $sender = Customer::findOrFail($sender);
        $reciever = Customer::findOrFail($reciever);

        return view('transfer',compact('sender','reciever'));
    }

    public function transfer(request $request ,$sender,$reciever){

        $senderBalance = Customer::findOrFail($sender)->balance;
        $recieverBalance = Customer::findOrFail($reciever)->balance;
        
        $validated = $request->validate([
            'balance' => 'required|integer|max:' . $senderBalance,
        ]);

        
        $amount = $request->balance;

        $newSenderBalance = $senderBalance - $amount;
        $newRecieverBalance = $recieverBalance + $amount;

        $senderUpdated = Customer::findOrFail($sender);
        $senderUpdated->balance = $newSenderBalance;
        $senderUpdated->save();

        $recieverUpdated = Customer::findOrFail($reciever);
        $recieverUpdated->balance = $newRecieverBalance;
        $recieverUpdated->save();

        if(!$senderUpdated->balance == $newSenderBalance){
            return back()->with('error','Balance were not transfered!');
        }
            return back()->with('success','Balance were transfered successfuly!');
    }
}
