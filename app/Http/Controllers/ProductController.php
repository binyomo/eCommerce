<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index', [
            'products' => Product::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $cek_order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        if(empty($cek_order)){
            $order = new Order;
            $order->code = Str::random(8);
            $order->status = 0;
            $order->user_id = auth()->user()->id;
            $order->jumlah_harga = 0;
            $order->save();
        }

        // 
        // Buat OrderDetail 
        // 
        $add_order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $product = Product::where('id', $request->id)->first();
        $cek_orderdetail = OrderDetail::where('product_id', $product->id)->where('order_id', $add_order->id)->first();

        // Buat DetailOrder Baru Jika Tidak Ada Yang Sama
        if(empty($cek_orderdetail)){
            $order_detail = new OrderDetail;
            $order_detail->product_id = $product->id;
            $order_detail->order_id = $add_order->id;
            $order_detail->jumlah = $request->jumlah;
            $order_detail->jumlah_harga = $product->harga*$request->jumlah;
            $order_detail->save();
        }else{
            $order_detail = OrderDetail::where('product_id', $product->id)->where('order_id', $add_order->id)->first();
            $order_detail->jumlah = $order_detail->jumlah+$request->jumlah;

            $new_harga = $product->harga*$request->jumlah;
            $order_detail->jumlah_harga = $order_detail->jumlah_harga+$new_harga;
            $order_detail->update(); 
        }
        // Jika Tidak Ada OrderDetail Yang Sama (atas ^)

        // 
        // Update Harga Order
        // 
        $order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $order->jumlah_harga = $order->jumlah_harga+$product->harga*$request->jumlah;
        $order->update();

        return redirect('/product')->with('success', 'Tambah Order Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}