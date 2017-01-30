@extends('layouts.master')

@section('title', 'Your Cart')

@section('content')


<html>
<head><title>show</title>
<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
<link rel="stylesheet" type="text/css" href="/css/css.css">
</head>
<body>

<div class = "container">
       <h4>
       <!-- Panel -->
       <div class = "panel">
              <div class = "panel-heading"> {{Auth::user()->name}}'s Cart</div>
              @if (count($cart_content) > 0)
              <table class = "table table-striped m-b-none text-sm">
        <thead>
           <tr>
             <th width = "8">no</th>
             <th width = "300">Product name</th>
             <th width = "100">quantity</th>
             <th>harga gorengan @ 1</th>
             <th width = "200">action</th>
           </tr>
        </thead> 
        <tbody>

        <?php $i = 1; ?>
        @foreach($cart_content as $cart)
           <tr>
                   <td>{{ $i }}</td>
                   <td>{{ $cart->name}}</td>
                   <td>{{ $cart->qty}}</td>
                   <td>{{ $cart->price}}</td>
                   <td><a href ="{{ url('cart/delete/' .$cart->rowId) }}"><input type = "image" name = "delete" src = "/css/remove.png" width = "60px" height = "60px"></a></td>
           </tr>
        <?php $i++; ?>
        @endforeach
        </tbody>
      </table>
      <div class = "panel-footer">
       <a href = "/products" class = "btn btn-info">continue shopping</a>
       <a href = "/checkout" class = "btn btn-info">checkout</a>
      </div>
      @else
      <h2>kamu belum belanja :'(</h2>
      <div class = "panel-footer">
      <a href = "/products" class = "btn btn-info">belanja now !</a>
       </div>
      @endif
      
       
        </div>
      <!-- / panel -->
      </div>   

    </body>
    </html>
    @endsection               
