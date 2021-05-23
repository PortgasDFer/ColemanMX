@extends('layouts.site')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav__link_producto" href="#">Casas de campaña</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Sacos de dormir</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Hieleras y termos</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Hieleras y Termos</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Lamparas y Estufcas</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Accesorios</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Colchones</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Playa</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-4">
	<div class="m-auto">
		<button class="btn btn-lg btn-block btn-danger">HAZ TU PEDIDO</button>
	</div>
	<div class="row mt-4">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
			<figure class="figure">
			  <img src="https://i.linio.com/p/069f8ff60ad6aea9bc15d34a1ac3b20b-catalog.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
			  <figcaption class="figure-caption">A caption for the above image.</figcaption>
			</figure>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
			<figure class="figure">
			  <img src="https://i.linio.com/p/069f8ff60ad6aea9bc15d34a1ac3b20b-catalog.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
			  <figcaption class="figure-caption">A caption for the above image.</figcaption>
			</figure>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
			<figure class="figure">
			  <img src="https://i.linio.com/p/069f8ff60ad6aea9bc15d34a1ac3b20b-catalog.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
			  <figcaption class="figure-caption">A caption for the above image.</figcaption>
			</figure>
		</div>
	</div>
</div>
@endsection