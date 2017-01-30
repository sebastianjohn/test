<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\customer;
use App\User;
use App\payment;

class order extends Model
{
    public $timestamps = false;


    public function getname()
    {
    	$user = user::where('id', $this->user_id)->first();
    	if($user!=null)
    	{
    		return $user->name;
    	}
    }
    public function yeah()
    {
        $yeah = order_detail::where('user_id', $this->user_id);
        if($yeah!=null)
        {
            return $yeah->sum('total_harga');
        }
    }
    public function yiah()
    {
        $yiah = payment::where('user_id', $this->user_id)->first();
        if($yiah!=null)
        {
            return $yiah->tunggakan;
        }
    }
    public function sick()
    {
        $sick = payment::where('user_id', $this->user_id)->first();
        if($sick!=null)
        {
            return $sick->pembayaran;
        }
    }
    public function sisa()
    {
        $sisa = payment::where('user_id', $this->user_id)->first();
        if($sisa!=null)
        {
            return $sisa->tunggakan;
        }
    }
    public function status()
    {
        $status = payment::where('user_id', $this->user_id)->first();
        if($status!=null)
        {
            return $status->status;
        }
    }
    public function getpoint()
    {
        $point = payment::where('user_id', $this->user_id)->first();
        if($point!=null)
        {
           return $point->tunggakan;
        }else{
            return $this->yeah();
        }
    }
    public function payment()
    {
        return $this->hasMany('App\payment', 'user_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function orderdetail()
    {
        return $this->hasMany('App\order_detail');
    }



}
