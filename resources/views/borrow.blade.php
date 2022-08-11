@extends("master")

@section("content")

<div class="container custom-borrow">
<br><br>

  <div class="row">
    <div class="col-sm-4">
    <table class="table">

  <tbody>
    
    <tr>
      <th scope="col"><h2 style="color:darkblue;">Number of Books: {{$count}}</h2></th>
      
    </tr>

</tbody>

</table>
<br>
<div>

<form action="borrowplace" method="POST">
    
    @csrf

  <button type="submit" class="btn btn-danger">borrow</button>
    
</form>

</div>
</div>
  </div>
</div>

   
@endsection
