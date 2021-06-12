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
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
    <h1>Distribuidor de productos Coleman</h1>
     <div class="card">
      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        <img
          src="{{asset('img/coleman.jpg')}}"
          class="img-fluid"
        />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body">
        <h5 class="card-title">¿Quieres ir a una aventura?</h5>
        <p class="card-text text-justify">
          Todo el equipo necesario para ir de campamento lo encuentras con nosotros. 
          Gran variedad de casas de campaña, estufas, hieleras, termos y todo para hacer de tu aventura
          la mejor experiencia de tu vida. 
        </p>
        <a href="/accesorios-coleman-camping" class="btn btn btn-outline-danger btn-block">DESCUBRE NUESTRA VARIEDAD DE PRODUCTOS</a>
      </div>
    </div>
   </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
      <h2>Envíos a todo México y Latino América</h2>
      <h3>Nos encontramos en CDMX</h3>
      <p>
        Contamos con los mejores accesorios para camping en México.
        <hr>
        Todo lo necesario para tu aventura lo encuentras aquí. 
        
      </p>
    </div>  
  </div>
</div>

@endsection