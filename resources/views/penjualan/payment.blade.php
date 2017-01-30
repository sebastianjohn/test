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
  


<h3>Payments</h3>
<hr>

<form action = "/payment/{{ $order->user_id }}/pro" method = "post" id= "myform"  onSubmit = "return validasi()">
   
   <tr>
         <td>Customer ID</td>
         <td><input type = "text" name = "user_id" id = "user_id" value = " {{ $order->user_id }} " readonly = "true"></td>
   </tr>
   <tr>
         <td>Total Tunggakan</td>
         <td>
             <input type = "text" name = "tunggakan" id = "tunggakan" value = "{{ $order->getpoint() }}" readonly="true">
             </td>
   </tr>
   <tr>
         <td>Jumlah Bayar</td>
         <td><input type = "text" name = "jumlah_bayar" id = "jumlah_bayar" value = ""></td>
  </tr>
  <tr>
  <td><input type = "submit" name = "submit" id = "submit" value = "OK" class = "btn btn-primary"></td>
  </tr>
  {{ csrf_field() }}
  </tr>
  </table>
</form>
<script type = "text/javascript">
    function validasi()
    {
    var jumlah_bayar=document.forms["myform"]["jumlah_bayar"].value;
    var tunggakan=document.forms["myform"]["tunggakan"].value;
    var numbers=/^[0-9]+$/;
    if(jumlah_bayar > {{$order->getpoint()}})
    {
      alert("Orang Kaya :V !");
      return false;
    };
    if(!jumlah_bayar.match(numbers))
    {
      alert("Masukan Angka Yang Valid !");
      return false;
    };
   }

   </script>


@endsection
