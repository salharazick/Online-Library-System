<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIB!</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- Jquery -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>

{{View::make('header')}}

@yield('content')

{{View::make('footer')}}
    
<style>

    #body{

        background-image: url("");
        background-position: center;
        background-size: cover;
        
    }

    .custom-login{

        height: 500px;
        padding-top: 200px;
        
    }

    .custom-genre{

    padding-top: 50px;
    padding-bottom: 80px;
    padding-left: 100px;
    padding-right: 150px;
    margin: 2rem;  
    }

    .card{

    margin-top: 2rem;
    
    }

    .card-img-top{
    height: 350px;

    }

    .custom-book{
        background-color:white;
        height: 600px;
    }

    .trending-image{

        height: 100px;
    }

    .cart-list-divider{

    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
    }

    .book{

    padding-top: 50px;
    padding-bottom: 80px;
    padding-left: 100px;
    padding-right: 150px;
    margin: 2rem; 
    
    }

    .custom-borrow
    {
        padding-top: 50px;
    padding-bottom: 80px;
    padding-left: 100px;
    padding-right: 150px;
    margin: 2rem;  
    }
    
    .custom-detail
    {
        padding-top: 150px;
    padding-bottom: 100px;
    }

    .detail-img{
        
        height: 450px;
    }

</style>

</body>

</html>