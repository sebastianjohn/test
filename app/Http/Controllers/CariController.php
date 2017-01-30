<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controllers;
use App\Cari;
use App\Orang;
use App\cpelanggan;
use App\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CariController extends Controller
{
   public function cari()
   {
   	return view('project/search');
   }
   public function getName(Request $request)
   {
   	   $input = input::get('cari');
         $name = \App\orang::where('nama_prd', 'like','%' . $input . '%' )->get();
   	   return view('project/result', compact('name'));
   }
      public function uhasil(Request $request)
   {
         $input = input::get('cari');
         $name = \App\orang::where('nama_prd', 'like','%' . $input . '%' )->get();
         return view('u/uresult', compact('name'));
   }
   public function getHasil(Request $request)
   {
         $input = input::get('cari');
         $name = \App\cpelanggan::where('nama', 'like','%' . $input . '%' )->get();
         return view('project/hasilcp', compact('name'));
   }
       public function destroypelanggan($id)
    {
        $pelanggan = pelanggan::find($id);
        $pelanggan->delete();
        return redirect('project/pelanggan');
    }
    public function hasilid()
    {
        $input = input::get('cari');
        $name = \App\cpelanggan::where('id', $input)->get();
        return view('project/resultid', compact('name'));
    }
}

