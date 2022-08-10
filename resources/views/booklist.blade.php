@extends("master")

@section("content")

<div class="custom-book">

<div class="container">
<h4>Books List</h4><br>

<br><br>
@foreach($books as $item)

  <div class="row cart-list-divider">
    <div class="col-sm-2">
    
    <img class="trending-image" src="{{$item->image}}"><br><br>
    </div>

    <div class="col-sm-5">
    <h3><a href="detail/{{$item->id}}">{{$item->title}}</a></h3>
    <h5>{{$item->author}}</h5>
    <h5>{{$item->genre}}</h5>
     
    </div>

    <div class="col-sm-3">
    <h4>{{$item->price}}</h4>
      
    </div>

    <div class="col-sm-2">

    <form action="{{ route('addtoshelf') }}" method="POST">
                @csrf
                <input type="hidden" name="book_id" value="{{$item->id}}">
           <button class="btn btn-primary">Add to Bookshelf</button>
           <button class="btn btn-success">Borrow</button>
            </form>
           <br><br>
    </div>
    

  </div>

  @endforeach

</div>
</div>
   
@endsection