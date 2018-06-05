
@extends('layouts.main')
@section ('content')
@include('layouts.navbar')

  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
  }
  </style>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{URL::asset('/images/pppBanner1.png')}}" alt="Los Angeles" height="350">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{URL::asset('/images/pppBanner2.jpg')}}" alt="Chicago"  height="350">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{URL::asset('/images/pppBanner3.jpg')}}" alt="New York" height="350">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container py-3">
  <h2 class="py-3" >Site News</h2>
  <div class="row">
  <div class="col-sm-3">
      <div class="card" >
        <img class="card-img-top" src="{{URL::asset('/images/img_avatar1.png')}}" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card" >
        <img class="card-img-top" src="{{URL::asset('/images/img_avatar1.png')}}" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card" >
        <img class="card-img-top" src="{{URL::asset('/images/img_avatar1.png')}}" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card" >
        <img class="card-img-top" src="{{URL::asset('/images/img_avatar1.png')}}" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
        </div>
      </div>
    </div>

  </div>

  <p class="pt-3"style="text-align:right">more news...<p>
</div>

<hr/>


<div class="row py-3  ">
  <div class="col-sm-1">

  </div>

  <div class="jumbotron col-sm-5 "> 
    <h2>Seach your Item to be recycled..</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <div class="input-group py-3">
      <input class="form-control py-2" type="search" value="search" id="example-search-input">
      <span class="input-group-append">
      <button class="btn btn-outline-secondary" type="button">
      <i class="fa fa-search"></i>
      </button>
      </span>
    </div>
    <div class="row no-gutters ">
      <div class="col-sm-3 rounded bg-success text-center " style="border:1px solid;" >
        <img class="rounded" src="{{URL::asset('/images/ElectricalItems.jpg')}}" alt="Card image" style="Width:100%">
        <small >Electrical Items</small>

      </div>
      <div class="col-sm-3 rounded bg-success text-center" style="border:1px solid ;" >
        <img class="rounded" src="{{URL::asset('/images/ElectricalItems.jpg')}}" alt="Card image" style="Width:100%">
        <small >Electrical Items</small>
      </div>
      <div class="col-sm-3 rounded bg-success text-center" style="border:1px solid;" >
        <img class="rounded" src="{{URL::asset('/images/ElectricalItems.jpg')}}" alt="Card image" style="Width:100%">
        <small >Electrical Items</small>
      </div>
      <div class="col-sm-3 rounded bg-success text-center" style="border:1px solid;" >
        <img class="rounded" src="{{URL::asset('/images/ElectricalItems.jpg')}}" alt="Card image" style="Width:100%">
        <small >Electrical Items</small>
      </div>
    </div>   

    <div class="row no-gutters ">
      <div class="col-sm-3 rounded bg-success text-center " style="border:1px solid ;" >
        <img class="rounded" src="{{URL::asset('/images/ElectricalItems.jpg')}}" alt="Card image" style="Width:100%">
        <small >Electrical Items</small>

      </div>
      <div class="col-sm-3 rounded bg-success text-center" style="border:1px solid ;" >
        <img class="rounded" src="{{URL::asset('/images/ElectricalItems.jpg')}}" alt="Card image" style="Width:100%">
        <small >Electrical Items</small>
      </div>
      <div class="col-sm-3 rounded bg-success text-center" style="border:1px solid ;" >
        <img class="rounded" src="{{URL::asset('/images/ElectricalItems.jpg')}}" alt="Card image" style="Width:100%">
        <small >Electrical Items</small>
      </div>
      <div class="col-sm-3 rounded bg-success text-center" style="border:1px solid ;" >
        <img class="rounded" src="{{URL::asset('/images/ElectricalItems.jpg')}}" alt="Card image" style="Width:100%">
        <small >Electrical Items</small>
      </div>
    </div>  
  </div>

  <div class="col-sm-1 "></div>

  <div class="jumbotron col-sm-4 ">
    <h2>What do we do?</h2>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  </div>
 

  <div class=" col-sm-1 "></div>

</div>




