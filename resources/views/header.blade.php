<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(Session::has('user')){
    $total=ProductController::cartItem();
  }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-Commerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>

        <form action="/search" class="d-flex float-right">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Cart
            <span class="badge badge-pill bg-primary cart-count">{{$total}}</span>
          </a>
        </li>
        @if(Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Session::get('user')['name']}}</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
        </li>
        @else
        <li><a href="/login">Login</a></li>
        @endif
      </ul>
        
    </div>
  </div>
</nav>