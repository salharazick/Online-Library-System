@extends("master")

@section("content")

<br><br>

<body id="reg">

<div class="container custom-register">
<div class="card" style="background-color:lavenderblush;width:30rem;">
    <div class="row">
        <div class="col-sm-9">
<div class="card-body">


        <form action="register" method="POST" name="register">
            @csrf
  <div class="mb-3">
    <label for="username" class="form-label">Username:</label>
    <input type="text" name="username" class="form-control" id="username">
   </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address:</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password:</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Register</button><br><br>
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
    $('register').validate({ // initialize the plugin
        rules: {
            
          username: "required",
      
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
     
      username: "Please enter your username",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(register) {
      form.submit();
    }
  });
});
</script>

</body>

@endsection