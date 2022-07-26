<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;

class IndexController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    // 
    // CART
    // 
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

    	return view('user.cart.index', [ 
    		'orderDetails' => $order_detail,
            'order' => $order
    	]);
    }

    public function cartOut(Request $request)
    {
        $order['status'] = $request->status;
        Order::where('id', $request->id)->update($order);

        return redirect('/cart')->with('success', 'Checkout Berhasil');
    }

    // 
    // PRODUCT
    // 
    public function product(){
        return view('product.index', [
            'products' => Product::latest()->paginate(10)
        ]);
    }

    public function productDetail($id)
    {
        $product = Product::where('id', $id)->first();

        return view('product.show', [
            'product' => $product
        ]);
    }

    public function productTambah(Request $request)
    {
        // 
        // Check Auth
        // 
        if (!Auth::check()) {
            return redirect('/user/login')->with('success', 'Login Terlebih Dahulu');
        }

        // 
        // Buat Order Baru Jika Tidak Ada Order Dalam Status 0 Pada User Target
        // 
        $check_order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        if(empty($check_order)){
            $order = new Order;
            $order->code = Str::random(8);
            $order->status = 0;
            $order->user_id = auth()->user()->id;
            $order->grand_price = 0;
            $order->save();
        }

        // 
        // Buat OrderDetail 
        // 
        $add_order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $product = Product::where('id', $request->id)->first();
        $check_orderdetail = OrderDetail::where('product_id', $product->id)->where('order_id', $add_order->id)->first();

        // Buat DetailOrder Baru Jika Tidak Ada Yang Sama
        if(empty($check_orderdetail)){
            $order_detail = new OrderDetail;
            $order_detail->product_id = $product->id;
            $order_detail->order_id = $add_order->id;
            $order_detail->amount = $request->amount;
            $order_detail->product_grand_price = $product->price*$request->amount;
            $order_detail->save();
        }else{
            $order_detail = OrderDetail::where('product_id', $product->id)->where('order_id', $add_order->id)->first();
            $order_detail->amount = $order_detail->amount+$request->amount;

            $new_price = $product->price*$request->amount;
            $order_detail->product_grand_price = $order_detail->product_grand_price+$new_price;
            $order_detail->update(); 
        }
        // Jika Tidak Ada OrderDetail Yang Sama (atas ^)

        // 
        // Update Harga Order
        // 
        $order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $order->grand_price = $order->grand_price+$product->price*$request->amount;
        $order->update();

        return redirect('/product')->with('success', 'Tambah Order Berhasil!');
    }

    // 
    // HISTORY
    // 
    public function history(){
        $order = Order::where('user_id', auth()->user()->id)->where('status', 1)->get();
        
        return view('user.history.index', [
            'orders' => $order
        ]);
    }

    public function historyDetail($id){
        $order = Order::where('id', $id)->first();
        $order_detail = OrderDetail::where('order_id', $order->id)->get();

        return view('user.history.show', [
            'order' => $order,
            'orderDetails' => $order_detail
        ]);
    }
}
