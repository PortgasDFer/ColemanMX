@extends('layouts.site')
@section('header')
<div class="header-productos">
  <header class="header_productos">    
  
  
  </header>
</div>
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="color: white;"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarText">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav__link_producto" href="/accesorios-coleman-camping">Accesorios</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="/bolsas-de-dormir-coleman">Bolsas de dormir</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="/estufas-coleman">Estufas</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="/casas-de-campaña-coleman">Casas de campaña</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="/hieleras-coleman">Hieleras</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="/linternas-coleman">Linternas</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="/mesa-y-camastro-coleman">Mesas y camastros</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="/sillas-coleman">Sillas</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="/termos-coleman">Termos</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="/toldos-coleman">Toldos</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-4">
  <div class="m-auto">
    <a href="https://www.naggabrands.com/collections/all"><button class="btn btn-lg btn-block btn-danger">HAZ TU PEDIDO</button></a>
  </div>
	<div class="row mt-4">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
			<div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/sillas/SILLA COLEMAN EXTRA GRANDE CON HIELERA.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">SILLA COLEMAN EXTRA GRANDE CON HIELERA</h5><small>MODELO: 2000032009</small>
          <p class="card-text">
            <ul>
              <li>Ideal para cualquier actividad al aire libre.</li>
              <li>Viene con portavasos.</li>
              <li>Estructura acero reforzada para mayor estabilidad.</li>
              <li>Soportes de uso rudo en el asiento para mayor durabilidad.</li>
              <li>Para interiores y exteriores.</li>
              <li>Bolsa para transportar.</li>
              <li>Soporta hasta 136.1 kg.</li>
              <li>Peso 3.7 kg.</li>
              <li>Silla tamaño regular: 51 cm ancho x 51 cm fondo x 100 cm de alto.</li>
            </ul>
          </p>
        </div>
      </div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
			<div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/sillas/SILLA COLEMAN SENCILLA GO ROJA.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">SILLA COLEMAN SENCILLA GO ROJA</h5> <small>MODELO:2000013882</small>
          <p class="card-text">
            <ul>
              <li>Hecha de poliéster.</li>
              <li>Liviana y fácil de transportar.</li>
              <li>Incluye bolsa transportadora.</li>
              <li>Estructura de 13 mm.</li>
              <li>Silla sin brazos.</li>
              <li>Con malla para activar el flujo de aire.</li>
              <li>Tamaño 50 x 48.5 x 74 cm.</li>
            </ul>
          </p>
        </div>
      </div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
			<div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/sillas/SILLA COLEMAN CON BRAZOS GO ROJA.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">SILLA COLEMAN CON BRAZOS GO ROJA</h5> <small>Modelo: 2000013881</small>
          <p class="card-text">
            <ul>
              <li>Hecha de poliéster.</li>
              <li>Liviana y fácil de transportar.</li>
              <li>Incluye bolsa transportadora.</li>
              <li>Estructura de 16 mm.</li>
              <li>Silla con brazos y portavasos.</li>
              <li>Con malla para activar el flujo de aire.</li>
              <li>Tamaño 46 x 46 x 79 cm. Peso: 2.60 Kg</li>
            </ul>
          </p>
        </div>
      </div>
		</div>
	</div>
</div>

@endsection