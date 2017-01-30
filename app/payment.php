<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    public $timestamps = false;

    public function order()
    {
    	return $this->belongsto('App\order', 'user_id');
    }
    public function payment(Request $request, $id_user)
    {
    $payment = payment::where('user_id', $this->user_id)->first();
    if($payment==null){
    	$payment = new payment;
    	$payment->user_id    = $request->user_id;
    	$payment->tunggakan  = $request->tunggakan;
    	$payment->pembayaran = $request->jumlah_bayar; 
    	$payment->save();
    }else{
    	$payment = payment::find($user_id);
    	$payment->user_id   = $request->user_id;
    	$payment->tunggakan = $request->tunggakan;
    	$payment->pembayaran = $request->jumlah_bayar;
    	$payment->save();
    }
    }


}
