<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saring;
use App\Cari;
use App\product;
use Illuminate\Support\Facades\Input;

class FindController extends Controller
{
    public function find()
     {
      $product = input::get('cari');
      $name = product::where('nama', 'like', '%' .$product. '%')->get();
      return view('/penjualan/result', compact('name'));
     }

     public function saring()
     {
      $saring = input::get('saring');
      $type = product::where('type', 'like', '%' .$saring. '%')->get();
      return view('/penjualan/filter', compact('type'));
     }
     
}
