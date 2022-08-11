@extends("master")

@section("content")

<div class="custom-bookshelf">

<div class="container">

<a class="btn btn-success" href="borrow">Borrow</a>
<br><br>
@foreach($books as $item)

  <div class="row cart-list-divider">
    <div class="col-sm-3">
    
    <img class="trending-image" src="{{$item->image}}"><br><br>
    </div>

    <div class="col-sm-4">
    <h3>{{$item->title}}</h3>
      <h6>{{$item->author}}</h6>
    </div>

    <div class="col">
    <h4>$.{{$item->price}}</h4>
      
    </div>

    <div class="col-sm-2">
    <a href="removeshelf/{{$item->shelf_id}}" class="btn btn-warning">Remove from Shelf</a>
    </div>

  </div>

  @endforeach

</div>
</div>
   
@endsection