<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>@yield('title')</title>
   <link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet">
 </head>
 <body>
    <header>
      <nav>
         <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class='fa fa-linux'></i></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('/project')}}"></i> Home</a></li>
        <li><a href = "{{URL::to('#')}}"></i>Tas Belanja</a></li>
          <li><a href="{{URL::to('/project')}}"></i> Contact Us</a></li>
      </ul>
    </div>
  </div>

      </nav>
    </header>
    <br>    
   @yield('content')
   <br>
   <footer>
    
      &copy; 3.5 leravaL 
    
    </footer>
   </body>
   </html> 