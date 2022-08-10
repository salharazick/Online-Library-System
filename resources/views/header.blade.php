<?php

Use App\Http\Controllers\booksController;

$total = 0;
if(session()->has('user'))
{
  $total = booksController::shelfbooks();
};

$count = 0;
if(session()->has('user'))
{
  $count = booksController::borrowbooks();
}

?>


<div class="fixed-top">

<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="category">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        
        @if(session()->has('user'))
        
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{session()->get('user')['name']}}</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="logout">Logout</a></li>
        </ul>
        </li>

        @else

        <li class="nav-item">
          <a class="nav-link" href="register">Register</a>
        </li>
      
        @endif

        

        <li class="nav-item">
          <a class="nav-link" href="shelflist">Shelf({{$total}})</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="myborrowals">Borrowed({{$count}})</a>
        </li>
        
       
       </ul>
      
      <form action="{{ route('search') }}" class="d-flex" role="search">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

</div>