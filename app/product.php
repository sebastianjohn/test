<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    
    public $timestamps = false;

    protected $primaryKey = "id_product";
    protected $fillable = ['gambar'];

    public function order()
    {
    	return $this->belongsto('App\order');
    }
    public function orderdetail()
    {
    	return $this->belongsto('App\order_detail' , 'id_product');
    }
}
