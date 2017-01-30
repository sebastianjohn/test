<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    
    public $timestamps = false;
    
    public function getname()
    {
    	 
      $product = product::where('id_product', $this->product_id)->first();
      if($product!=null)
    	{
    		return $product->nama;
    	}
    
    }
    public function getharga()
    {
    	$product = product::where('id_product', $this->product_id)->first();
    	if($product!=null)
    	{
    		return $product->harga;
    	}
    }
  


    public function order()
    {
    	return $this->belongsto('App\order');
    }
    public function product()
    {
    	return $this->hasMany('App\product', 'id_product');
    }
}
