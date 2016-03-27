<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Order;
use App\Item;

class OrderController extends Controller
{
    public function create(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'city' => 'max:255',
            'zip' => 'digits:5',
            'item' => 'required|exists:items,id',
            'amount' => 'required|digits_between:0,9999'
        ]);

        $order = new Order;

        $item = Item::where('id', $request->item)->get();

        $order->name = $request->name;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->zip = $request->zip;
        $order->phone = $request->phone;
        $order->item = $request->item;
        $order->amount = $request->amount;
        $order->sum = $item[0]->price * $request->amount;
        $order->instructions = $request->instructions;

        $order->save();

        return array(
            
        );
    }
}
