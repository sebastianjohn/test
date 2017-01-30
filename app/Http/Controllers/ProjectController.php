<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\project;
use App\pelanggan;
use App\epelanggan;

class ProjectController extends Controller
{
    public function index()
    {

       $project = \App\Project::paginate(10);
       return view('project/home', compact('project'));
       //project::withTrashed()->restore();
        //original
        //$project = project::all();
        //return view('project/home', ['project' => $project]);
    }

    public function show($id)
    {
    	//$users = DB::table('user')->where('nama', 'like', '%j%')->get();

    	 //insert
         //DB::table('user')->insert([
            //['id_user' => 'testing', 'nama' => 'testing',
            //'password' => 'testing', 'status' => 'Admin']

            //]);
        //update
        //DB::table('user')->where('nama', 'john')->update([
                 //'nama' => 'testing2'

            //]);

         //delete
         //DB::table('user')->where('nama', 'operator')->delete();


        $project = project::find($id);

    	return view('project/single', ['project' => $project]);
    }

    public function create()
    {
      return view('project/create');
    }

      public function store(Request $request)
    {
        $this->validate($request, [
               'nama_prd'    => 'required',
               'spek'        => 'required|min:5',
               'harga'       => 'required',
               'gambar'      => 'required|image',
            ]);

        $project = new project;
        $project->nama_prd = $request->nama_prd;
        $project->spek     = $request->spek;
        $project->harga    = $request->harga;
        $gambar            = $request->file('gambar');
        $namaFile          = $gambar->getClientOriginalName();
        $request           ->file('gambar')->move('uploadgambar',$namaFile);
        $project->gambar   = $namaFile;
        $project->save();

        return redirect('project');
    }


    public function edit($id)
    {
       $project = project::find($id);
       return view('project/edit', ['project' => $project]);
    }
    public function update(Request $request, $id)
    {
        $project = project::find($id);
        $project->nama_prd = $request->nama_prd;
        $project ->spek    = $request->spek;
        $project->harga    = $request->harga;
        $gambar            = $request->file('gambar');
        $namaFile          = $gambar->getClientOriginalName();
        $request           ->file('gambar')->move('uploadgambar',$namaFile);
        $project->gambar   = $namaFile;
        $project->save();
        return redirect('project/' . $id);
    }
    public function bayarpelanggan($id)
    {
      $project = pelanggan::find($id);
      return view('/project/bayarpelanggan', ['project' => $project]);
    }
    public function probayarpelanggan(Request $request, $id)
    {
       $this->validate($request, [
               'bayar'        => 'required|integer|',
               
            ]);


      $pelanggan = pelanggan::find($id);
      $pelanggan->id        = $request->id ;
      $pelanggan->id_prd    = $request->id_prd ;
      $pelanggan->nama_prd  = $request->nama_product ;
      $pelanggan->harga     = $request->harga ;
      $pelanggan->nama      = $request->nama ;
      $pelanggan->alamat    = $request->alamat ;
      $pelanggan->no_hp     = $request->no_hp ;
      $pelanggan->bayar     = $request->bayar ;
      $pelanggan->tunggakan = ($request->tunggakan)-($request->bayar);
      $pelanggan->save();
      return redirect('project');

    }
    public function destroy($id)
    {
        $project = project::find($id);
        $project->delete();
         return redirect('project');
    }
    public function destroypelanggan($id)
    {
      $project = pelanggan::find($id);
      $project->delete();
       return redirect('/project/pelanggan');
    }
    public function buy($id)
    {


       $project = project::find($id);
       return view('project/buy', ['project' => $project]);
    }
    public function buystore(Request $request)
    {
        
       $this->validate($request, [
               'bayar'        => 'required|integer|',
               
            ]);
        $project = new pelanggan;
        $project->id_prd = $request->id_prd;
        $project->nama_prd = $request->nama_prd;
        $project->harga = $request->harga;
        $project->nama   = $request->nama;
        $project->alamat  = $request->alamat;
        $project->no_hp  = $request->no_hp;
        $project->bayar  = $request->bayar;
        $project->tunggakan = ($request->harga)-($request->bayar);


        $project->save();
        return redirect('/uhome');
    }
    public function pembayaran()
    {
      return view('project/cariid');
    }

    public function pelanggan()
     {

        //$pelanggan = pelanggan::all();

        //return view('project/pelanggan', ['pelanggan' => $pelanggan]);
         $pelanggan = \App\pelanggan::paginate(10);
       return view('project/pelanggan', compact('pelanggan'));

     }

    public function view($id)
    {
    $pelanggan = pelanggan::find($id);
    return view('project/showpelanggan', ['pelanggan' => $pelanggan]);
    }
        public function uhome()
    {

       $project = \App\Project::paginate(5);
       return view('u/uhome', compact('project'));
       //project::withTrashed()->restore();
        //original
        //$project = project::all();
        //return view('project/home', ['project' => $project]);
    }
    public function only()
    {
      return view('project/onlyadmin');
    }
        public function index2()
    {

       $project = \App\Project::paginate(10);
       return view('project/admin_home2', compact('project'));

    }





}
