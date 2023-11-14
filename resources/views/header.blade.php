<?php

use App\Http\Controllers\ProductController;

$total = 0;
if (session()->has('user')) {
  $total = ProductController::cartItem();
}

?>
<nav class="navbar-default">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: white;" href="/">E-Comm</a>

    <ul class="nav navbar-nav">
      <li><a style="color: white;" href="/">Home</a></li>
      <li><a style="color: white;" href="/myorders">Orders</a></li>
    </ul>

    <form action="/search" class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" name="query" class="form-control search-box" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>

    <ul class="nav navbar-nav navbar-right">
      <li><a style="color: white;" href="/cartlist">cart({{$total}})</a></li>
      @if(session()->has('user'))
      <li class="dropdown">
        <a style="color: white;" class="dropdown-toggle" data-toggle="dropdown" href="#">{{session()->get('user')['name']}}
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Logout</a></li>
        </ul>
      </li>
      @else
      <li><a style="color: white;" href="/login">Login</a></li>
      <li><a style="color: white;" href="/register">Register</a></li>
      @endif
    </ul>
  </div>

</nav>