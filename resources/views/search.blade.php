@extends("master")

@section("content")


<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>

<div class="container">
    <div class="row">
    <div class="col-sm-4">
    <div class="trending-wrapper">
  <h4>Result for Books</h4><br>

  @foreach($books as $item)

  <div class="searched-item">
    <a href="detail/{{$item['id']}}">
    <img class="trending-image" src="{{$item['image']}}"><br><br>
    <div class="">
      <h3>{{$item['title']}}</h3>
      <h6>{{$item['author']}}</h6>
    </div>
    </a>
  </div>
  @endforeach
  
    </div>
    </div>
    </div>
</div>
    </div>
</div>



@endsection