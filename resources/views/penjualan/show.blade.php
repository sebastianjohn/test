@extends('layouts.master')

@section('title', 'Transaksi')

@section('content')


<html>
<head><title>show</title>
<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
<link rel="stylesheet" type="text/css" href="/css/css.css">
    <script type = "text/javascript">
    function yeah()
    {
    var bayar=document.forms["myform"]["terbayar"].value;
    var total=document.forms["myform"]["total"].value;
    if(bayar >= total)
    {
      document.getElementById("status").value="Paid";
      return false;
    };
    if(bayar < total)
    {
      document.getElementById("status").value="Unpaid";
    };
    }
   </script>
</head>
<body>
<div class = "container">
<table class = "table table-bordered">
                
       <thead>
               <th colspan="4"><center><h4>{{ $customer->name}}
       </thead>
       <thead>
             <th>id_transaksi</th>
             <th>customer_id</th>
             <th><center>button</th>
       </thead>
         @if (count($customer) > 0)
       @foreach($customer->orders as $data)  
       <tbody>          
             <td>{{ $data->id }}</td>
             <td>{{ $data->user_id }}</td>
             <td><center><a href = "/customer/transaksi/{{ $data->id }}"><input type = "button" name = "detail" id = "detail" value = "detail" class = "btn btn-primary"></a>
             <a href = "/orders/{{ $data->id }}/delete"><input type = "button" name = "hapus" id = "hapus" value = "hapus" class = "btn btn-primary"></a></td>
       </tbody>
       @endforeach

       @else
       {{ $customer->name }} belum membeli apapun
       @endif
       <form id = "myform">
       <tr>
       <td colspan = "2">Total Transaksi Yang Dilakukan Oleh {{$customer->name}} : Rp.{{ $data->yeah() }},- 
       <input type = "text" name = "terbayar" id = "terbayar" value = "{{ $data->sick() }},-" readonly = "true" class = "gone"></td>
       <td rowspan = "3"><center><a href = "/payment/{{ $data->id }}"><input type = "button" name = "payment" id = "payment" value = "Lakukan Pembayaran" class = "btn btn-primary"></td>
       </tr>
       <tr>
              <td colspan = "2">Sisa Tunggakan {{$customer->name}} : Rp.{{$data->sisa()}},-</td>
       </tr>
       <tr>
            <td colspan = "2">Status {{$data->status()}} 
                              <input type = "text" name = "total" id = "total" value = "{{ $data->yeah () }}" readonly = "true" class = "gone"></td>
       </tr>
       </form>
       </table>
       </body>
       </div>
       </html>     
	        
	        @endsection
     
	        

