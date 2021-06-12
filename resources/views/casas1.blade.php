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
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN LX  PARA 4 PERSONAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN LX  PARA 4 PERSONAS </h5> <small>MODELO: 2000026154</small>
          <p class="card-text">
            <ul>
              <li>Casa de campaña para 2 Y 4 personas.</li>
              <li>Cuenta con dos puertas, una delantera y otra trasera tipo D con malla mosquitero.</li>
              <li>Costura invertida en piso para evitar filtraciones de agua.</li>
              <li>Techo en malla para optima ventilación.</li>
              <li>Bolsas de almacenaje separadas para la carpa, tubos y estacas.</li>
              <li>Peso: 5 Kg. Medidas: 2.8x2.4x1.4 m.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN WEATHER MASTER 10 PERSONAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN WEATHER MASTER 10 PERSONAS</h5> <small>MODELO: 2000028058</small>
          <p class="card-text">
            <ul>
              <li>Tienda de campaña de gran capacidad, con la mayor seguridad contra clima y facilidad de armado.</li>
              <li>Ideal para todo tipo de uso externo: campamentos, excursiones, tropas de scouts y salidas a acampar.</li>
              <li>Cuenta con 2 habitaciones.</li>
              <li>Uniones selladas como protección contra el agua.</li>
              <li>Puerta en D.</li>
              <li>Se arma y desarma en solo 20 minutos.</li>
              <li>Incluye bolsa para transportación.</li>
              <li>Piso tipo tina de polietileno.</li>
              <li>Capacidad 10 personas con dos habitaciones.</li>
              <li>Sistema WeatherTec que te garantiza protección contra todo tipo de clima.</li>
              <li>Diseño de una sola pieza para evitar pérdidas de partes de la misma.</li>
              <li>Peso: 15 Kg.  Medidas: 5.2x2.7.2 m.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN XT 4 SEASON PARA 6 PERSONAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN XT 4 SEASON PARA 6 PERSONAS</h5> <small>MODELO:2000026164</small>
          <p class="card-text">
            <ul>
              <li>Casa de campaña para 6 personas.</li>
              <li>Sistema Weather Tec a prueba de cualquier clima.</li>
              <li>Sistema impermeable.</li>
              <li>Maleta para transportar.</li>
              <li>Toldo extra grande para una mayor resistencia al frio.</li>
              <li>Piso tipo tina para evitar filtraciones.</li>
              <li>Las ventanas laterales se pueden abrir y cerrar dependiendo del clima.</li>
              <li>Viene con bolsa para transportar.</li>
              <li>Peso: 8 Kg.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN XT 4 SEASON PARA 4 PERSONAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN XT 4 SEASON PARA 4 PERSONAS</h5><small>MODELO: 2000026163</small>
          <p class="card-text">
            <ul>
              <li>Casa de campaña para 4 personas.</li>
              <li>Sistema Weather Tec a prueba de cualquier clima</li>
              <li>Sistema impermeable.</li>
              <li>Malata para transportar.</li>
              <li>Toldo extra grande para una mayor resistencia al frio.</li>
              <li>Piso tipo tina para evitar filtraciones.</li>
              <li>Las ventanas laterales se pueden abrir y cerrar dependiendo del clima.</li>
              <li>Viene con bolsa para transportar.</li>
              <li>Peso: 5.2 Kg. Medidas: 2X2.4X1.4</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN XT 4 SEASON PARA 2 PERSONAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN XT 4 SEASON PARA 2 PERSONAS</h5><small>MODELO: 2000026162</small>
          <p class="card-text">
            <ul>
              <li>Casa de campaña para 2 personas.</li>
              <li>Sistema Weather Tec a prueba de cualquier clima.</li>
              <li>Sistema impermeable.</li>
              <li>Malata para transportar.</li>
              <li>Toldo extra grande para una mayor resistencia al frio.</li>
              <li>Piso tipo tina para evitar filtraciones.</li>
              <li>Las ventanas laterales se pueden abrir y cerrar dependiendo del clima.</li>
              <li>Viene con bolsa para transportar.</li>
              <li>Peso: 3.5 Kg. Medidas: 2x1.2x2 m.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN ADVENTURE 2 PERSONAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN ADVENTURE 2 PERSONAS</h5> <small>MODELO: 200023105 2 PERSONAS</small>
          <p class="card-text">
            <ul>
              <li>Casa de campaña para 2 personas.</li>
              <li>Puerta tipo D.</li>
              <li>Costura invertida en piso para evitar filtraciones de agua.</li>
              <li>Bolsas de almacenaje separadas para la carpa, tubos y estacas.</li>
              <li>Viene con bolsa para transportar.</li>
              <li>Peso: 1.5 Kg. Medidas 2 x 1.20 x 1 m</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN CORAL REEF 6 PERSONAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN CORAL REEF 6 PERSONAS</h5><small>MODELO: 2000026161 6 PERSONAS</small>
          <p class="card-text">
            <ul>
              <li>Casa de campaña para 6 personas.</li>
              <li>Puerta tipo D.</li>
              <li>Costura invertida en piso para evitar filtraciones de agua.</li>
              <li>Techo en malla para optima ventilación.</li>
              <li>Bolsas de almacenaje separadas para la carpa, tubos y estacas.</li>
              <li>Peso: 3 Kg. Medidas: 3x3x1.65</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/casas/CASA INSTANTANEA COLEMAN PARA 6 PERSONAS..webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA INSTANTANEA COLEMAN PARA 6 PERSONAS</h5> <small>MODELO: 5205A753G</small>
          <p class="card-text">
            <ul>
              <li>Armado y desarmado en 1 minuto.</li>
              <li>Las estacas ya están sujetas a la casa de campaña.</li>
              <li>Capacidad 6 personas.</li>
              <li>La casa no necesita toldo viene completamente sellada.</li>
              <li>Casa dos veces mas resistente a una casa convencional.</li>
              <li>Estructura de acero.</li>
              <li>Peso: 10 Kg. Medidas: 3x2.74 m.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN SUNDOME 6 PERSONAS.webp')}}"
            class="img-fluid"
          />

          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN SUNDOME 6 PERSONAS</h5> <small>Modelo: 2000024583</small>
          <p class="card-text">
            <ul>
              <li>Casa de campaña para 4 personas</li>
              <li>Sistema Weather Tec a prueba de cualquier clima.</li>
              <li>Sistema impermeable.</li>
              <li>Maleta para transportar.</li>
              <li>Toldo extra grande para una mayor resistencia al frio.</li>
              <li>Piso tipo tina para evitar filtraciones.</li>
              <li>Las ventanas laterales se pueden abrir y cerrar dependiendo del clima.</li>
              <li>Viene con bolsa para transportar.</li>
              <li>Medidas: 3x3x1.65 m</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/casas/CASA DE CAMPAÑA COLEMAN SUNDOME 4 PERSONAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CASA DE CAMPAÑA COLEMAN SUNDOME 4 PERSONAS</h5> <small>MODELO: 2000024582</small>
          <p class="card-text">
            <ul>
              <li>Casa de campaña para 4 personas.</li>
              <li>Sistema Weather Tec a prueba de cualquier clima.</li> 
              <li>Sistema impermeable.</li>
              <li>Maleta para transportar.</li>
              <li>Toldo extra grande para una mayor resistencia al frio.</li>
              <li>Piso tipo tina para evitar filtraciones.</li>
              <li>Las ventanas laterales se pueden abrir y cerrar dependiendo del clima.</li>
              <li>Viene con bolsa para transportar.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
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