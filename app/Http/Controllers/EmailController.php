<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

use App\Order;
use App\Item;

class EmailController extends Controller
{
    public static function sendOrder(Order $order) {
        $item = Item::where('id', $order->item)->first();

        Mail::send('emails.order', ['order' => $order, 'item' => $item], function ($message)
        {

            $message->from('order@pellcompany.fi', 'PellCompany');
            $message->to('order@pellcompany.fi');
            $message->subject('New order on ' . date('d.m.Y H:i'));

        });
    }
}
