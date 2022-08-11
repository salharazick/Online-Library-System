@extends("master")

@section("content")

<div class="custom-detail">

<div class="container">
    <div class="row">
        <div class="col-sm-4">
         
        <img src="{{$books->image}}" class="detail-img">


        </div>
        <div class="col-sm-6">
        <a href="/Project/Online-Library-System/public/genre">Go Back</a><br>
           <p>
            <h3 style="color:lightseagreen;">{{$books->title}}</h3><br>
            <h5>Author : {{$books->author}}</h5>
            <h5>Genre : {{$books->genre}}</h5>
            <h5>ISBN/BookID : {{$books->book_ID}}</h5>
            <h6>Description : {{$books->description}}</h6><br><br>
            <h5 style="color: red;">Price :$.{{$books->price}}</h5>
 
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