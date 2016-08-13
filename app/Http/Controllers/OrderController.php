<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\EmailController;

use App\Order;
use App\Item;

class OrderController extends Controller
{
    public function create(Request $request) {
        $item = Item::where('id', $request->item)->first();

        if ($item->free_sample != 1) {
            $this->validate($request, [
                'amount' => 'required|digits_between:0,9999'
            ]);
            $amount = $request->amount;
        } else {
            $amount = 1;
        }

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'city' => 'max:255',
            'zip' => 'digits:5',
            'item' => 'required|exists:items,id',
            'agree' => 'required'
        ]);

        $order = new Order;

        $order->name = $request->name;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->zip = $request->zip;
        $order->phone = $request->phone;
        $order->item = $request->item;
        $order->amount = $amount;
        $order->sum = $item->price * $amount;

        EmailController::sendOrder($order);
        
        $order->save();

        return array(
            
        );
    }
}
