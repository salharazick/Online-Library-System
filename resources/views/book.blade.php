@extends("master")

@section("content")
   
<head>
<script src="https://use.fontawesome.com/b217068119.js"></script>
</head>

  <div class="container book">

    <div class="row">

    <a href="/Project/Online-Library-System/public/genre"><b><h5>Go Back</h5></b></a><br>

    @foreach($books as $item)

    <div class="col-sm-4">
    <div class="card">
   
      <img src="{{$item->image}}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><a href="detail/{{$item->id}}">{{$item->title}}</a></h5>
        <p class="card-text"> Author: {{$item->author}}</p>
      </div>
      
    </div>

    </div>
    
    @endforeach

    </div>
</div>   

