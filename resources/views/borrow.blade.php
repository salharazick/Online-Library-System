@extends("master")

@section("content")

<div class="container custom-product">
<br><br>
    <div class="col-sm-6">
    <table class="table">

  <tbody>
    
    <tr>
      <th scope="col"><h1>Number of Books</h1></th>
      <td><h2>{{$count}}</h2></td>
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

   
@endsection
