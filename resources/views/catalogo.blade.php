@extends('layouts.site')
@section('header')
<div class="header-productos">
  <header class="header_productos">    
  
  
  </header>
</div>
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-danger sticky-top">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
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
        <a class="nav__link_producto" href="#">Casas de campaña</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Hieleras</a>
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
        <a class="nav__link_producto" href="#">Termos</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Toldos</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-4">
	<div class="m-auto">
		<button class="btn btn-lg btn-block btn-danger">HAZ TU PEDIDO</button>
	</div>
	<div class="row mt-4">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
			<div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/Saco-de-dormir-coleman-island-go-azul.jpg')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">SACO DE DORMIR COLEMAN ISLAND GO AZUL</h5><small>MODELO: 2000022162</small>
          <p class="card-text">
            <ul>
              <li>Temperaturas de 12º C.</li>
              <li>Lavable en máquina.</li>
              <li>Forro exterior: poliéster.</li>
              <li>Forro interior: poliéster.</li>
              <li>Peso: 900 gr.</li>
              <li>Medidas: 71x188 cm.</li>
            </ul>
          </p>
        </div>
      </div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
			<div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/SACO DE DORMIR COLEMAN PALMETTO VINO.jpg')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">SACO DE DORMIR COLEMAN PALMETTO VINO</h5> <small>MODELO: 2000004418</small>
          <p class="card-text">
            <ul>
              <li>Temperaturas de 12° C.</li>
              <li>Lavable a máquina.</li>
              <li>Tipo rectangular.</li>
              <li>Forro exterior: poliéster cepillado.</li>
              <li>Forro interior: fibras suaves de poliéster</li>
              <li>Peso 1.6 Kg. Medidas: 1x2.5m.</li>
            </ul>
          </p>
        </div>
      </div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
			<div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/SACO DE DORMIR COLEMAN SILVERTON NARANJA.jpg')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">SACO DE DORMIR COLEMAN SILVERTON NARANJA</h5> <small>Modelo: 2000015768</small>
          <p class="card-text">
            <ul>
              <li>Tamaño 81.28 x 208.3 cm.</li>
              <li>Temperaturas de -3.89º C. a 1.67º C.</li>
              <li>Peso: 1.8 Kg.</li>
              <li>Tipo momia.</li>
              <li>Tecnología Thermolock.</li>
              <li>Zip – Plow.</li>
              <li>Capucha semi-sculpted ayuda a mantener el calor.</li>
              <li>Lavable en maquina.</li>
              <li>Forro exterior: poliéster.</li>
              <li>Forro interior: poliéster.</li>
            </ul>
          </p>
        </div>
      </div>
		</div>
	</div>
</div>

@endsection