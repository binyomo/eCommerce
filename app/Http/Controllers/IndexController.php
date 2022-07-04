<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Order;
use App\Models\OrderDetail;

class IndexController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function cart()
    {
        $order_detail = [];
        $order = [];
        if (Auth::check()) {
            $order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
            if (!empty($order)) {
                $order_detail = OrderDetail::where('order_id', $order->id)->get();
            }
        }

    	return view('cart', [ 
    		'orderDetails' => $order_detail,
            'order' => $order
    	]);
    }

    public function cart_out(Request $request)
    {
        $order['status'] = $request->status;
        Order::where('id', $request->id)->update($order);

        return redirect('/cart')->with('success', 'Checkout Berhasil');
    }

    public function history()
    {
        $order = Order::where('user_id', auth()->user()->id)->where('status', 1)->get();
        
        return view('history', [
            'orders' => $order
        ]);        
    }
}
