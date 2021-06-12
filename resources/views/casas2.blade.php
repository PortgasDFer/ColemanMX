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
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN SUNDOME 3 PERSONAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN SUNDOME 3 PERSONAS</h5> <small>MODELO: 2000024580</small>
          <p class="card-text">
            <ul>
              <li>Casa de campaña para 3 personas.</li>
              <li>Sistema Weather Tec a prueba de cualquier clima.</li>
              <li>Sistema impermeable.</li>
              <li>Maleta para transportar.</li>
              <li>Toldo extra grande para una mayor resistencia al frio.</li>
              <li>Piso tipo tina para evitar filtraciones.</li>
              <li>Las ventanas laterales se pueden abrir y cerrar dependiendo del clima.</li>
              <li>Viene con bolsa para transportar.</li>
              <li>Peso: 3.7 Kg. Medidas:2.1x2.1x1.3 m.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN SUNDOME 2 PERSONAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN SUNDOME 2 PERSONAS</h5> <small>MODELO: 20000024579 2 PERSONAS</small>
          <p class="card-text">
            <ul>
              <li>Casa de campaña para 2 personas.</li>
              <li>Sistema Weather Tec a prueba de cualquier clima.</li>
              <li>Sistema impermeable.</li>
              <li>Maleta para transportar.</li>
              <li>Toldo extra grande para una mayor resistencia al frio.</li>
              <li>Piso tipo tina para evitar filtraciones.</li>
              <li>Las ventanas laterales se pueden abrir y cerrar dependiendo del clima.</li>
              <li>Viene con bolsa para transportar.</li>
              <li>Peso: 3.2 Kg.  Medidas: 2x1.2x1.2 m.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN DARK ROOM SCREEN 4 PERSONAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN DARK ROOM SCREEN 4 PERSONAS</h5> <small>MODELO: 2000024289</small>
          <p class="card-text">
            <ul>
              <li>La tecnología de cuarto oscuro bloquea el 97.5% de la luz solar para dormir o para acostarse temprano.</li>
              <li>Sala de pantalla con piso completo para descansar sin problemas y espacio adicional para dormir en noches cálidas y secas.</li>
              <li>Incluido rainfly para protección adicional contra el clima.</li>
              <li>Huella de 9 x 7 pies, con sala de pantalla de 9 x 4 pies. 4 pies 11 pulg. Centro de altura</li>
              <li>Garantía limitada de 1 año</li>
              <li> Líneas de conducción reflectantes Illumiline para una mayor visibilidad durante la noche.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
  </div>
  <nav aria-label="Page navigation example" class="nav justify-content-center mt-4">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="/casas-de-campaña-coleman" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="/casas-de-campaña-coleman">1</a></li>
      <li class="page-item"><a class="page-link" href="/casas-de-campaña-coleman/page-2">2</a></li>
      <li class="page-item">
        <a class="page-link" href="/casas-de-campaña-coleman/page-2" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
@endsection