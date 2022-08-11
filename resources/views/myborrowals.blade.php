@extends("master")

@section("content")

<div class="custom-myborrow">

<div class="container">
<h4></h4>

<a href="/Project/Online-Library-System/public/booklist">Go Back</a><br><br>

@foreach($borrowals as $item)

  <div class="row my-orders">

    <div class="col-sm-3">
    <img class="trending-image" src="{{$item->image}}"><br><br>
    </div>

    <div class="col-sm-4">
    <h5 style="color:darkblue;">Book : {{$item->title}}</h5>
    <h6>Status : {{$item->status}}</h6>

    <a href="return/{{$item->id}}" class="btn btn-warning">Return</a>
    <br><br>
    </div>

  </div>

  @endforeach

</div>
</div>
   
@endsection     
    