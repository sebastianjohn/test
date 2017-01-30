@extends('layouts.master')

@section('title', 'Payment')

@section('content')
  <head>
   <meta charset = "utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name = "viewport" content="width=devide-width, initial-scale=1">
   <link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
   <link rel="stylesheet" type="text/css" href="/css/css.css">

   </head>

   <body>
 <div class = "container">
     <table class = "table table-hover table-bordered">
     <thead>
<h3>Pembayaran</h3>

<form action = "/project/pelanggan/{{$project->id}}/bayar/pro" method = "post" id="myform" class="form-horizontal" onSubmit = "return validasi()">
   <table class = "table">
 
   <tr>
   <td><h5>id :</td>
   <td><input type = "text" name = "id" value="{{ $project->id}}" readonly="true"></td><br>
   </tr>
   <tr>
   <td><h5>id_prd :</td>
   <td><input type = "text" name = "id_prd" value = "{{ $project->id_prd}}"readonly="true"></td><br>
   </tr>
   <tr>
   <td><h5>nama_product:</td>
   <td><input type = "text" name = "nama_product" value="{{ $project->nama_prd}}"readonly="true"></td>
   </tr>
      <tr>
   <td><h5>nama:</td>
   <td><input type = "text" name = "nama" value="{{ $project->nama}}"readonly="true"></td>
   </tr>
     <tr>
     <td><h5>Harga:</td>
   <td><input type = "text" name = "harga" value="{{ $project->harga}}"readonly="true"></td>
   </tr>
   
 
   <tr>
   <td><h5>tunggakan:</td>
   <td><input type = "text" name = "tunggakan" value="{{ $project->tunggakan}}"readonly="true" id = "tunggakan"></td>
   </tr>
   <tr>
   <td><h5>pembayaran:</td>
   <td><input type = "text" name = "bayar" value="" id = "bayar">
     @if($errors->has('bayar'))  
   {{$errors->first('bayar')}}
   @endif</td>
   <tr>
     <td><input type = "submit" name = "submit" value = "Bayar" class = "btn btn primary"><td>
   </tr>
       <tr>
     <td class = "gone"><h5>alamat:</td>
   <td class = "gone"><input type = "text" name = "alamat" value="{{ $project->alamat}}"></td>
   </tr>

     <tr>
   
   <td class = "gone"><h5>no_hp:</td>
   <td class = "gone"><input type = "text" name = "no_hp" value="{{ $project->no_hp}}"></td>
   </tr>
   </table>

  {{ csrf_field() }}
</form>
   <script type = "text/javascript">
    function validasi()
    {
    var bayar=document.forms["myform"]["bayar"].value;
    var tunggakan=document.forms["myform"]["tunggakan"].value;
    var numbers=/^[0-9]+$/;
    if(bayar > tunggakan)
    {
      alert("Anda Tidak Bisa Membayar Lebih Dari Tunggakan !");
      return false;
    };
    if(!bayar.match(numbers))
    {
      alert("Masukan Angka Yang Valid !");
      return false;
    };
   }

   </script>

@endsection
