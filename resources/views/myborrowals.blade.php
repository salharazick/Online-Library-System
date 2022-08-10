@extends("master")

@section("content")

<div class="custom-borrow">

<div class="container">
<h4></h4><br>

@foreach($borrowals as $item)

  <div class="row my-orders">

    <div class="col-sm-3">
    <img class="trending-image" src="{{$item->image}}"><br><br>
    </div>

    <div class="col-sm-4">
    <h3>Book : {{$item->title}}</h3>
    <h5>Status : {{$item->status}}</h5>

    <a href="return/{{$item->id}}" class="btn btn-warning">Return</a>
    <br><br>
    </div>

  </div>

  @endforeach

</div>
</div>
   
@endsection     
    