<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controllers;
use App\Cari;
use App\cpelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CariiController extends Controller
{
  public function cari()
  {
  	return view('project/cpelanggan');
  }
  public function Name(Request $request)
  {
  	$masukan = input::get('find');
  	$name = \App\cpelanggan::where('nama', 'like','%' . $masukan . '%')->get();
  	return view('project/hasilcp', compact('name'));
  }  
}
