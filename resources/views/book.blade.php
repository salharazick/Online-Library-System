@extends("master")

@section("content")
   

  <div class="container book">

    <div class="row">

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

