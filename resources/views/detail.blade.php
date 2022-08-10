@extends("master")

@section("content")

<div class="custom-detail">

<div class="container">
    <div class="row">
        <div class="col-sm-4">
         
        <img src="{{$books->image}}" class="detail-img">


        </div>
        <div class="col-sm-6">
            
           <p>
            <h3>Title:{{$books->title}}</h3><br>
            <h6>Author : {{$books->author}}</h6>
            <h6>Genre : {{$books->genre}}</h6>
            <h6>ISBN/BookID : {{$books->book_ID}}</h6>
            <h6>Description : {{$books->description}}</h6>
            <h5>Price :$.{{$books->price}}</h5>
 
           </p>

           <br><br>
            <form action="{{ route('addtoshelf') }}" method="POST">
                @csrf
                <input type="hidden" name="book_id" value="{{$books->id}}">
           <button class="btn btn-primary">Add to Bookshelf</button>
           <button class="btn btn-success">Borrow</button>
            </form>
           <br><br>
          

 
        </div>
    </div>

</div>

@endsection

</div>