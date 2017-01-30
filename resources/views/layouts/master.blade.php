<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>@yield('title')</title>
    <link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
 </head>
 <body>
   <header class = "navbar fixed-header">
         <div class = "container">
            <div class = "navbar-inverse">
                <div class = "navbar-logo">
                 <img src = "/css/logo-ngemil.png">
                <div>
                <ul class = "navbar-right">

        @if (Auth::user()->admin == '1')
        <li><a href="{{URL::to('admin')}}">Products</a></li>
        <li><a href="{{URL::to('customers')}}">Pelanggan</a></li>
        <li><a href="{{URL::to('#')}}">Pembayaran</a></li>
        <li><a href="{{URL::to('/newproduct')}}"> New Gorengan</a></li>
        @else
        <li><a href="{{URL::to('products')}}">Gorengan</a></li> 
        <li><a href = "{{URL::to('cart')}}">Keranjang Mu</a></li>
        <li><a href = "{{URL::to('/contactus')}}">Contact Us</a></li>
        @endif

          

    
          

         

          <li><a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout 
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                         </form>
                                           </li>

                </ul>
            </div>

 
</div>
</header>


   @yield('content')
 
   </body>
   </html> 