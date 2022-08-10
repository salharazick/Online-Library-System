@extends("master")
@section("content")

<br><br>
 
<div class="custom-genre">

<div class="container">

    <div class="row">

    @foreach($genres as $item)

    <div class="col-sm-6">
    <div class="card">
      <img src="{{$item->image}}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><a href={{"genre/".$item['id']}}>{{$item->name}}</a></h5>
        <p class="card-text">{{$item->description}}</p>
        

      </div>
    </div>
    </div>

    @endforeach

    </div>
</div>
</div>

@endsection
