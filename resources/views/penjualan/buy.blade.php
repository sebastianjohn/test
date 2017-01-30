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
   var id="";
   if (frm.check.checked){   
   id += frm.check.value +"";
   }
    document.getElementById("customer_id").value=id;
   }
   </script>
   </head>
   <body>
   <div class = "container">
   <table class = "table table-hover table-bordered">
  


<h3>Beli Product</h3>
<hr>

<form action = "/by" method = "post">
   
   <tr>
         <td>Customer ID</td>
         <td><input type = "text" name = "customer_id" id = "customer_id">
         <input type = "checkbox" name = "check"  id = "check" onclick="displayResult(this.form)" value = " {{Auth::user()->id}} " >Use Your Account ID</td>
   </tr>
   <tr>
         <td>Gorengan ID</td>
         <td><input type = "text" name = "gorengan_id" id = "gorengan_id" value = "{{ $product->id_product }}" readonly="true"></td>
   </tr>
   <tr>
         <td>Harga Gorengan</td>
         <td><input type = "text" name = "harga_gorengan" id = "harga_gorengan" value = "{{ $product->harga }}" readonly="true"></td>
   <tr>
         <td>Jumlah Gorengan</td>
        <td><input type = "text" name = "jumlah_beli" id = "jumlah_beli" value = ""></td>
   <tr>
  <td><input type = "submit" name = "submit" value = "OK" class = "btn btn-primary">
      <input type = "reset" name = "reset" value = "reset" class = "btn btn-primary"></td>
  </tr>
  {{ csrf_field() }}
  </tr>
  </table>
</form>


@endsection
