@extends('layouts.master')

@section('title', 'Gorengan')

@section('content')
   <head>
   <meta charset = "utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name = "viewport" content="width=devide-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="/css/css.css">
   </head>
   <body>



<div class = "container">
     
     <form action="/result" action="POST">
            <div class="form-group">
                    <label for="cari"><h3>Cari Gorengan</h3></label>
                       <input type = "text" class = "form-control" id = "cari" name = "cari" placeholder="cari" size = "20px">
            </div>
                         <input class = "btn btn-primary" type="submit" value = "Find Gorengan"></form>
                         <form action ="/filter" action="POST">
                         <div class = "filter"><input type = "submit" value = "filter" class = "btn btn-primary"></div>
                         <div class = "filter"><select name = "saring" id = "saring" class = "form-control">
                                <option value = "#">--Type--</option>
                                <option value = "cake">cake</option>
                                <option value = "gorengan">gorengan</option>
                                <option value = "minuman">minuman</option></select></div></form>
     
     
     <br><hr>                       
     @foreach ($product as $data)
        <div class = "col-md-3">
            <div class = "box">
            <img src = "{{ url('uploadgambar') }}/{{ $data->gambar }}" alt=""/>
            <div class = "desc">
                <h5> {{ $data->nama }} </h5>
                <p>{{ $data->tentang}}</p>
            </div>
            <div class = "social">
                <div class = "likes">
                      <a href = "/products/{{ $data->id_product }}/edit"><input type ="submit" name = "edit"  id = "edit" value = "Edit" class = "btn btn-primary"></a></div>
                <div class = "prize">
                      <a href = "/products/{{ $data->id_product }}/delete"><input type ="submit" name = "delete"  id = "delete"value = "delete" class = "btn btn-primary"></a></div>  
            </div>
            </div>
      </div>  
             
                  

            
    @endforeach
</div>    
<div class = "container"><?php echo str_replace('/?', '?', $product->render());?></div>

<script src = "http://code.jquery.com/jquery-latest.js"></script>
<script src = "/js/bootstrap.js"></script>
</body>
</html> 

@endsection           
