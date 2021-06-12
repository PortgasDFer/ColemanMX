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
            src="{{asset('/imgproductos/toldos/Toldo Coleman Pirámide Island Go .webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Toldo Coleman Pirámide Island Go</h5><small>MODELO: 2000019736</small>
          <p class="card-text">
            <ul>
              <li>Un toldo ligero, con buena amplitud de sombra que brinda y con colores alegres para esos momentos de fiesta o tranquilidad que te hará quedar bien con los invitados. el toldo Coleman va contigo!</li>
              <li>Peso: 7.2 Kg.  Medidas: 3x3x2.8M</li>
            </ul>
          </p>
        </div>
      </div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
			<div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/toldos/TOLDO COLEMAN PORTÁTIL PARA PLAYA.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TOLDO COLEMAN PORTÁTIL PARA PLAYA </h5> <small>2000019402 ESMERALDA</small>
          <p class="card-text">
            <ul>
              <li>Ligero para transportar.</li>
              <li>El piso de la entrada se convierte en una pared para mayor privacidad.</li>
              <li>Ventana trasera para mayor circulación de aire y malla para protección.</li>
              <li>Incluye tecnología Quick Camp.</li>
              <li>Protección WeatherTec.</li>
              <li>Bolsa para almacenaje.</li>
              <li>Peso: 3.1 Kg. Medidas 2.28 x 1.33 x 1.44</li>
            </ul>
          </p>
        </div>
      </div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
			<div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/toldos/TOLDO INTANTANEO COLEMAN.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TOLDO INTANTANEO COLEMAN</h5> <small>Modelo: 2000023970 – 3X3 m</small>
          <p class="card-text">
            <ul>
              <li>Altura central 2.84 m.</li>
              <li>Varillas: acero; vienen con botón para armar y desarmar con rapidez.</li>
              <li>El marco viene en una sola pieza.</li>
              <li>Poliéster con protección de rayos UV.</li>
              <li>Clavijas de acero.</li>
              <li>Fácil de instalar en menos de 3 minutos.</li>
              <li>Peso: 20.8 Kg. Dimensiones 3.66 x 3.66 m.</li>
            </ul>
          </p>
        </div>
      </div>
		</div>
	</div>
</div>

@endsection