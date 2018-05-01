<link rel="stylesheet" href="/css/navbar.css">


<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand col-md-2">Cycle Me Back</a>
  <form class="form-inline col-md-5">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">Register</a>
    </li>

  </ul>
</nav>