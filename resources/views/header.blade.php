<?php

use App\Http\Controllers\ProductController;

$total = 0;
if (Session::has('user')) {
  $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"><img style="width:160px; height: 60px;" src="{{url('/images/1.png')}}" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Strona główna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/shop">Sklep</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cartlist">Koszyk({{$total}})</a>
      </li>
      <form action="/search" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Wpisz frazę" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Wyszukaj</button>
      </form>
    </ul>
    <ul class="navbar-nav">
      @if(Session::has('user'))
      <li class="nav-item dropdown" style="margin-right: 90px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Witaj {{Session::get('user')['name']}}!
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/myorders">Twoje zamówienia</a>
          <a class="dropdown-item" href="/myaccount">Twoje konto</a>
          <a class="dropdown-item" href="/logout">Wyloguj</a>
      </li>
      @else
      <a class="nav-link" href="/login">Zaloguj się</a>
      <a class="nav-link" href="/register">Zarejestruj się</a>
      @endif
    </ul>
  </div>
</nav>