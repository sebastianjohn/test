@extends('layouts.master')

@section('title', 'Pembelian')

@section('content')
   <head>
   <meta charset = "utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name = "viewport" content="width=devide-width, initial-scale=1">
   <link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
   <link rel="stylesheet" type="text/css" href="/css/css.css">
   <script>
   function displayResult(frm){   
   var nama="";
   var alamat = "";
   var no_hp  = "";
   if (frm.check.checked){   
   nama += frm.check.value +"";
   alamat += frm.alamat.value +"{{Auth::user()->alamat}}";
   no_hp += frm.no_hp.value +"{{Auth::user()->no_hp}}";
  }
    document.getElementById("nama").value=nama;
    document.getElementById("alamat").value=alamat;
    document.getElementById("no_hp").value=no_hp;
   }
   </script>
   </head>
   <body>
   <div class = "container">
   <table class = "table table-hover table-bordered">
  


<h3>Beli Product</h3>
<hr>

<form action = "/uhome/by" method = "post">
 <img src = "{{ url('uploadgambar') }}/{{ $project->gambar }}"  width = "545" height = "300" class = "awe">
   
   <table class = "table table-bordered">
   <tr>
   <td>id product:</td>
   <td><input type = "text" name = "id_prd" value = "{{ $project->id }}"readonly="true">
   </td>
   <tr>
   <td>Nama Product :</td>
   <td><input type = "text" name = "nama_prd" value = "{{ $project->nama_prd }}" readonly="true">
   @if($errors->has('nama_prd'))  
   {{$errors->first('nama_prd')}}
   @endif</td>
   </tr>
   <tr>
   <td>Harga Product :</td>
   <td><input type = "text" name = "harga" value = "{{ $project->harga }}" readonly="true">
   @if($errors->has('harga'))  
   {{$errors->first('harga')}}
   @endif</td>
   </tr>
   <tr>

   
   <td>nama pelanggan :</td>
   <td><input type = "text" id = "nama" name = "nama" value = "">
       <input type = "checkbox" name = "check"  id = "check" onclick="displayResult(this.form)" value = " {{Auth::user()->name}} " >Use Your Account Information 
       </td>        
   </tr>
   <tr>
   <td>Alamat Pelanggan:</td>
   <td><input type = "text" value = "" name = "alamat" id = "alamat"></td>
   </tr>
   <tr>
   <td>no telephone pelanggan:</td>
   <td><input type = "text" value = ""name = "no_hp" id = "no_hp"></td>
   </tr>
   <tr>
   <td>jumlah bayar:</td>
   <td><input type = "text" value = "" name = "bayar"></td>
   </tr>
   <tr>
  <td><input type = "submit" name = "submit" value = "OK" class = "btn btn-primary">
      <input type = "reset" name = "reset" value = "reset" class = "btn btn-primary"></td>
  </tr>
  {{ csrf_field() }}
  </tr>
  </table>
</form>


@endsection


