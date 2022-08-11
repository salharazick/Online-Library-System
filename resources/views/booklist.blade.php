@extends("master")

@section("content")

<div class="custom-booklist">

<div class="container">

@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('status')}}

<button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times; </span>
</button>
</div>
@endif

<br><br>
@foreach($books as $item)

  <div class="row shelf-list-divider">
    <div class="col-sm-2">
    
    <img class="trending-image" src="{{$item->image}}"><br><br>
    </div>

    <div class="col-sm-5">
    <h5><a href="detail/{{$item->id}}">{{$item->title}}</a></h5><br>
  <h6>
    <b> Author:{{$item->author}}</b><br>
    <b> Genre:{{$item->genre}}</b> 
  </h6>
     
    </div>

    <div class="col-sm-3 price">
  <h5><b>price:${{$item->price}}</b></h5>
      
    </div>

    <div class="col-sm-2">

    <form action="{{ route('addtoshelf') }}" method="POST">
                @csrf
                <input type="hidden" name="book_id" value="{{$item->id}}">
           <button class="btn btn-primary">Add to Bookshelf</button><br><br>
           <button class="btn btn-warning">Borrow</button>
            </form>
           <br><br>
    </div>
    

  </div>

  @endforeach
<div class="d-flex justify-content-center">
  <span>
  {{$books->links()}}
</span>

<style>
  .w-5{
    display: none;
  }
  
</style>
</div>
</div>
</div>
   

@endsection