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
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex">
			<div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/mesaycamastro/Mesa.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">MESA PLEGABLE COLEMAN PACK AWAY</h5><small>MODELO: 2000020278</small>
          <p class="card-text">
            <ul>
              <li>Comodidad superior, colchon con espuma espesa y muelle de suspension.</li>
              <li>Estructura de acero de alta resistencia.</li>
              <li>Tamaño: 175.3 x 63.5 x 38.1 cm.</li>
              <li>Para personas de hasta 1.90 m de altura.</li>
              <li>Dimensiones plegado: 87 x 64.5 x 14 cm.</li>
              <li>Soporta hasta 124.74 kg.</li>
            </ul>
          </p>
        </div>
      </div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex">
			<div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/mesaycamastro/Camastro.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CATRE CONFORTSMART COLEMAN</h5> <small>MODELO:2000020271</small>
          <p class="card-text">
            <ul>
              <li>Comodidad superior, colchón con espuma espesa y muelle de suspensión.</li>
              <li>Estructura de acero de alta resistencia.</li>
              <li>Tamaño: 175 cm x 63.5 cm x 38 cm.</li>
              <li>Para personas de hasta 1.90 m de altura.</li>
              <li>Dimensiones plegado: 87 cm x 64.5 cm x 14 cm.</li>
              <li>Soporta hasta 124.74 kg.</li>
              <li>Peso: 7.5 Kg</li>
            </ul>
          </p>
        </div>
      </div>
		</div>
	</div>
</div>

@endsection