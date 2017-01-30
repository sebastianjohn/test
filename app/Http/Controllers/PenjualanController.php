<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\order;
use App\customer;
use App\product;
use App\order_detail;
use App\User;
use Auth;
use Cart;
use App\payment;
use Input;

class PenjualanController extends Controller
{
       public function index()
       {

           $orders = order::all();
           return View('/penjualan/order')->with('orders', $orders);
      
        }
       public function customer()
       {
      
           $user = user::where('admin', 2)->get();
           return view('/penjualan/customer', compact('user'));
    
        }

       public function show($id)
       {
           $user = user::find($id);
           return view('penjualan/show', ['customer' => $user]);    		
        
        }
       public function home()
       {
           
           $product = product::paginate(8);
           return view('penjualan/home', compact('product'));
        
        }

       public function product()
       {

      $product = \App\product::paginate(8);
       return view('penjualan/product', compact('product'));
        } 

    public function buy($id)
    {
          
       $product = product::find($id);
       return view('penjualan/buy', ['product' => $product]);
    
    } 
    public function buystore(Request $request)
    {

        $order = new order;
        $order->user_id = $request->customer_id;
        $order->save();
        $lain = new order_detail;
        $lain->product_id = $request->gorengan_id;
        $lain->order_id = $order->id;
        $lain->harga_gorengan = $request->harga_gorengan;
        $lain->jumlah_beli = $request->jumlah_beli;
        $lain->total_harga = ($lain->harga_gorengan)*($lain->jumlah_beli);
        $lain->save();

        return redirect('products');
        
       
    } 

    public function detail($id)
    {
       $detail = order_detail::find($id);
       return view('penjualan/transdetail', ['detail' => $detail]);
     }

     public function shown()
     {
      return view('penjualan/ncustomer');
     }

    public function ncustomer(Request $request)
    {
       $customer = new customer;
       $customer->name = $request->nama;
       $customer->alamat = $request->alamat;
       $customer->save();
      
      return redirect('customers');
    } 

    public function showp()
    {
      return view('penjualan/nproduct');
    }
    public function nproduct(Request $request)
    {
              $this->validate($request, [
               'gambar'      => 'required|image',
            ]);

      $product = new product;
      $product->nama      = $request->nama_product;
      $product->tentang   = $request->tentang;
      $product->harga     = $request->harga_product;
      $gambar             = $request->file('gambar');
      $namaFile           = $gambar->getClientOriginalName();
      $request            ->file('gambar')->move('uploadgambar',$namaFile);
      $product->gambar    = $namaFile;
      $product->save();

        return redirect('admin');
    }

    public function edit($id)
    {
       $product = product::find($id);
       return view('penjualan/edit', ['product' => $product]);
    }
    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $product->nama      = $request->nama_product;
        $product->tentang   = $request->tentang;
        $product->harga     = $request->harga_product;
        $gambar             = $request->file('gambar');
        $namaFile           = $gambar->getClientOriginalName();
        $request            ->file('gambar')->move('uploadgambar',$namaFile);
        $product->gambar    = $namaFile;
        $product->save();
        return redirect('admin');
    }
    public function delete($id)
    {
      $product = product::find($id);
      $product->delete();
      return redirect('admin');
    }
    public function destroyorder($id)
     {  
       $order = order::find($id);
       $order->delete();
       $order_detail = order_detail::find($id);
       $order_detail->delete();
       return redirect('customers');
     }
     public function checkout(Request $request)
     {

            

            $cart_content = Cart::content(1);
            
            foreach($cart_content as $cart){


            $order = new order;
            $order->user_id = Auth::user()->id;
            $order->save();  
            
            $product = new order_detail();
            
            $produk = product::find($cart->id);
            
            $product->order_id   = $order->id;
            $product->product_id = $cart->id;
            $product->user_id    = Auth::user()->id;
            $product->harga_gorengan = $cart->price;
            $product->jumlah_beli = $cart->qty;
            $product->total_harga = $cart->price * $cart->qty;

            $product->save(); 
            }

           Cart::destroy();

           return redirect('thanks');
     }

     public function showpayment($id)
     {
      $order = order::find($id);
      return view('penjualan/payment', ['order' => $order]);
     }

     public function saring()
     {
      $saring = input::get('saring');
      $type = product::where('type', 'like', '%' .$saring. '%')->get();
      return view('/penjualan/filter', compact('type'));
     }
      
      public function propayment(Request $request, $user_id)
    {
      $payment = payment::where('user_id', $user_id)->first();
     if($payment==null){
      $payment = new payment;
      $payment->user_id    = $request->user_id;
      $payment->tunggakan  = ($request->tunggakan)-($request->jumlah_bayar);
      $payment->pembayaran = $request->jumlah_bayar; 
      if($payment->tunggakan == 0)
      {
      $payment->status = "Lunas";
      }else{
        $payment->status = "Belum Lunas";
      }
      $payment->save();
      return redirect('customers');
    }else{
      $payment->user_id   = $request->user_id;
      $tunggakan = $payment->tunggakan;
      $bayar   = $payment->pembayaran;
      $payment->tunggakan = ($tunggakan)-($request->jumlah_bayar);      
      $payment->pembayaran = ($request->jumlah_bayar)+($bayar);
      if($payment->tunggakan == 0)
      {
      $payment->status = "Lunas";
      }else{
        $payment->status = "Belum Lunas";
      }
      $payment->update();

      return redirect('customers');
    }
    }

    public function contactus()
    {
      return view('/penjualan/contactus');
    }
    public function thanks()
    {
      return view('/penjualan/thanks');
    }
    
    
    



    
}
