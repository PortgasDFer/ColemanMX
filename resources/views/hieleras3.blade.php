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
            src="{{asset('/imgproductos/hieleras/HIELERA GRIS EXURSION.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA GRIS EXCURSION</h5>
          <p class="card-text">
            <ul>
              <li>
                Hilera elegante para hacer tu camping, color negro y tapa gris, amplia por dentro y practica para transportar. vamos a la aventura que Coleman Camping te acompaña.
              </li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN TERMOELÉCTRICA.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN TERMOELÉCTRICA</h5> <small>MODELO: 3000001495</small>
          <p class="card-text">
            <ul>
              <li>Contiene adaptador para usar en casa y en auto.</li>
              <li>Se puede usar horizontalmente o verticalmente.</li>
              <li>Puerta ajustable para abrir a la derecha o izquierda.</li>
              <li>Bandeja separadora.</li>
              <li>Motor eléctrico no requiere de gas el enfriamiento es por inversión.</li>
              <li>Mantiene una temperatura interna 5 °C. (enfría de 25 ° a 28 °C. por debajo de la temperatura ambiente).</li>
              <li>Capacidad para 58 latas.</li>
              <li>Peso: 7.5 Kg. Medidas: 43x59x38 cm.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN MARINA XTREME 120 QT. BLANCA.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN 40 QT CON RUEDAS</h5> <small>MODELO: 6240A718B</small>
          <p class="card-text">
            <ul>
              <li>El interior es a prueba de moho.</li>
              <li>Conserva el hielo hasta 5 días en una temperatura de hasta 32 C°.</li>
              <li>Estructura antibacterial.</li>
              <li>Color blanco que refleja los rayos UV/IR.</li>
              <li>Base amplia para una mayor estabilidad.</li>
              <li>Drenaje antioxidante y anti derrames.</li>
              <li>Superficie plana que sirve como asiento adicional.</li>
              <li>Asas laterales para cargar con mayor facilidad.</li>
              <li>Tapa fija con partavasos.</li>
              <li>Capacidad de 204 latas + hielo.</li>
              <li>Peso: 8.7 Kg. Medidas: 48x92x48 cm.</li>
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
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN 40 LATAS CON RUEDAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body"><h5>HIELERA COLEMAN 40 LATAS CON RUEDAS</h5>  
          <small>MODELO: 3000001842</small>
          <p class="card-text">
            <ul>
              <li>Hielera felxible con ruedas resistentes para transportarla.</li>
              <li>Teminado satinado con acabado de primera y material resistente.</li> 
              <li>Capacidad para 40 latas.</li>
              <li>Peso: 2.6 Kg. Medidas: 38x47x31 cm.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN 48 QT EXCURSION.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN FLEXIBLE 10 LATAS</h5><small>MODELO: 2000013750</small>
          <p class="card-text">
            <ul>
              <li>Robusta nevera portátil para el almuerzo.</li>
              <li>Capacidad para 10 latas.</li>
              <li>A prueba de fugas.</li>
              <li>Fácil de limpiar.</li>
              <li>Bolsillos adicionales en el frente y los costados.</li>
              <li>Costuras fusionadas térmicamente.</li>
              <li>El exterior e interior.</li>
              <li>Peso: 350 gr. Medidas: 17x27x22 cm.</li> 
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN FLEXIBLE MESSENGER.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN FLEXIBLE MESSENGER</h5> <small>MODELO: 2000013731 VERDE</small>
          <p class="card-text">
            <ul>
              <li>Ligera y fácil de transportar.</li>
              <li>Fácil limpieza.</li>
              <li>Protección antibacterial.</li>
              <li>Espuma de polietileno.</li>
              <li>Almacenamiento con cierre.</li>
              <li>Correa ajustable al hombro.</li>
              <li>Multibolsillos.</li>
              <li>Capacidad para 9 latas.</li>
              <li>Peso: 350 gr. Medidas: 26x28x13 cm.</li>
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
            src="{{asset('/imgproductos/hieleras/HIELERA FLEXIBLE 12 LATAS GO.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA FLEXIBLE 12 LATAS GO</h5><small>MODELO: 5205-718</small>
          <p class="card-text">
            <ul>
              <li>Con capacidad para 8.8 litros.</li>
              <li>Cuenta con bolsa frontal.</li>
              <li>Asa de hule.</li>
              <li>Para un mejor traslado cuenta también con un asa para bicicleta.</li>
              <li>Elaborado en material de poliéster y nylon.</li>
              <li>Práctica y sencilla.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN FLEXIBLE 6 LATAS ISLAND GO AZUL.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN FLEXIBLE 6 LATAS ISLAND GO AZULL</h5> <small>MODELO: 2000003068</small>
          <p class="card-text">
            <ul>
              <li>Hielera flexible con capacidad de 6 latas.</li>
              <li>Material: Poliéster Tafetán 68D.</li>
              <li>Forro Interior con antimicrobial.</li>
              <li>Incluye correa para fácil traslado.</li>
              <li>Medidas:21 cm. de largo x 14 cm. de ancho x 13 cm. de alto. Peso: 0,15 gr.</li> 
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN FLEXIBLE 6 LATAS.webp')}}"
            class="img-fluid"
          />

          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN FLEXIBLE 6 LATAS</h5> <small>Modelo: 20003068</small>
          <p class="card-text">
            <ul>
              <li>Ligera y fácil de transportar.</li>
              <li>Fácil limpieza.</li>
              <li>Protección antibacterial.</li>
              <li>Espuma de polietileno.</li>
              <li>Almacenamiento con cierre.</li>
              <li>Correa ajustable al hombro.</li>
              <li>Peso: 150 gr. Medidas: 14x24x13 cm.</li>
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
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN FLEXIBLE KINDER GO.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN FLEXIBLE KINDER GO</h5><small> MODELO: 2000003280</small>
          <p class="card-text">
            <ul>
              <li>Ligera y fácil de transportar.</li>
              <li>Fácil limpieza.</li>
              <li>Protección antibacterial.</li>
              <li>Espuma de polietileno.</li>
              <li>Almacenamiento con cierre.</li>
              <li>Correa ajustable al hombro.</li>
              <li>Peso: 150 gr. Medidas: 24 cm diametro x 9cm alto.</li> 
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
        <a class="page-link" href="/hieleras-coleman" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="/hieleras-coleman">1</a></li>
      <li class="page-item"><a class="page-link" href="/hieleras-coleman/page-2">2</a></li>
      <li class="page-item"><a class="page-link" href="/hieleras-coleman/page-3">3</a></li>
      <li class="page-item">
        <a class="page-link" href="/hieleras-coleman/page-3" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
@endsection