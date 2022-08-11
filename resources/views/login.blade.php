
@extends("master")

@section("content")

<br><br>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>

</head>

<body id="body">
<div class="container custom-login">
  <div class="card" style="background-color:lightblue;width:30rem;"> 
    <div class="row">
        <div class="col-sm-10">

    <div class="card-body">


        <form action="login" method="POST" name="login">
            @csrf
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Email address:</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div><br>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Password:</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
    
        </div>
        </div>
    </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   <script>
    $(document).ready(function () {
    $('login').validate({ // initialize the plugin
        rules: {
            
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            }
        },

    });
});
</script>

</body>

@endsection