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
        <a class="nav__link_producto" href="#">Bolsas de dormir</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Estufas</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Casas de campaña</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Hieleras</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Lnternas</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Mesas y camastros</a>
      </li>
      <li class="nav-item">
        <a class="nav__link_producto" href="#">Sillas</a>
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
            src="{{asset('/imgproductos/hieleras/Hielera Coleman de 28 Qt con ruedas  rojo.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN DE 28 QT </h5>
          <p class="card-text">
            <ul>
              <li>
                Olvídate de cargar con esta Hielera Coleman de 28 Qt con ruedas en color rojo, ve a la aventura y Coleman Camping te acompaña.
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
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN 30 QT AZUL.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN 30 QT AZUL</h5> <small>MODELO: 3000001842</small>
          <p class="card-text">
            <ul>
              <li>El interior es a prueba de moho.</li>
              <li>Conserva el hielo hasta 3 días en una temperatura de hasta 32º C.</li>
              <li>Superior retexturizado EZ-Clean.</li>
              <li>Base amplia para una mayor estabilidad.</li>
              <li>Asa tipo balde para una cómoda transportación.</li>
              <li>Tapa fija con portavasos.</li>
              <li>Capacidad de 38 latas + hielo.</li>
              <li>Peso: 2.6 Kg. Medidas: 39x43x31 cm.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN 40 QT CON RUEDAS.webp')}}"
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
              <li>Base amplia para una mayor estabilidad.</li>
              <li>Drenaje antioxidante y anti derrames.</li>
              <li>Asa retráctil para facilitar su transporte.</li>
              <li>Asas laterales moldeadas que mantienen estabilidad al cargar.</li>
              <li>Tapa fija con portavasos.</li>
              <li>Ruedas todo terreno.</li>
              <li>Capacidad de 59 latas.</li>
              <li>Peso: 4 Kg. Medidas: 42x58x36 cm.</li>
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
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN 48 QT EXCURSIÓN.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN 48 QT EXCURSIÓN</h5><small>MODELO: 03000000152</small>
          <p class="card-text">
            <ul>
              <li>El interior es a prueba de moho.</li>
              <li>Conserva el hielo hasta 3 días en una temperatura de hasta 32 C°.</li>
              <li>Base amplia para una mayor estabilidad.</li>
              <li>Superficie plana que sirve como asiento adicional.</li>
              <li>Asas bi-direccionales para cargar con mayor facilidad.</li>
              <li>Tapa fija, no se pierde ni se desprende.</li>
              <li>Capacidad de 65 latas + hielo.</li>
              <li>Drenaje antioxidante y anti derrames.</li>
              <li>Peso: 3 Kg. Medidas: 36x64x35 cm.</li>
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
          <h5 class="card-title">HIELERA COLEMAN 48 QT EXCURSIÓN ROJA</h5><small>MODELO: 03000000154</small>
          <p class="card-text">
            <ul>
              <li>El interior es a prueba de moho.</li>
              <li>Conserva el hielo hasta 3 días en una temperatura de hasta 32 C°.</li>
              <li>Base amplia para una mayor estabilidad.</li>
              <li>Superficie plana que sirve como asiento adicional.</li>
              <li>Asas bi-direccionales para cargar con mayor facilidad.</li>
              <li>Tapa fija, no se pierde ni se desprende.</li>
              <li>Capacidad de 65 latas + hielo.</li>
              <li>Drenaje antioxidante y anti derrames.</li>
              <li>Peso: 3 Kg. Medidas: 36x64x35 cm.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN 9 QT EXCURSIÓN AZUL.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN 9 QT EXCURSIÓN AZUL</h5> <small>MODELO: 03000001989</small>
          <p class="card-text">
            <ul>
              <li>El interior es a prueba de moho.</li>
              <li>Conserva el hielo hasta 3 días en una temperatura de hasta 32°C.</li>
              <li>Base amplia para una mayor estabilidad.</li>
              <li>Superficie plana que sirve como asiento adicional.</li>
              <li>Asa tipo balde para una cómoda transportación.</li>
              <li>Tapa fija, no se pierde ni se desprende.</li>
              <li>Capacidad para 10 latas + hielo.</li>
              <li>Peso: 1.3 Kg. Medidas: 29x30x22 cm.</li>
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
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN 5 QT PERSONAL.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN 5 QT PERSONAL</h5><small>MODELO: 5205-718</small>
          <p class="card-text">
            <ul>
              <li>El interior es a prueba de moho.</li>
              <li>Conserva el hielo hasta 3 días en una temperatura de hasta 32º C.</li>
              <li>Base amplia para una mayor estabilidad.</li>
              <li>Superficie plana que sirve como asiento adicional.</li>
              <li>Asa tipo balde para una cómoda transportación.</li>
              <li>La tapa flip-lid se mantiene sujeta y sirve como bandeja para servir.</li>
              <li>Capacidad de 6 latas + hielo.</li>
              <li>Peso: 800 gr.  Medidas: 25x18x18 cm.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN 5 QT PERSONAL ROJA.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN 5 QT PERSONAL</h5> <small>MODELO: 5205A753G</small>
          <p class="card-text">
            <ul>
              <li>El interior es a prueba de moho.</li>
              <li>Conserva el hielo hasta 3 días en una temperatura de hasta 32º C.</li>
              <li>Base amplia para una mayor estabilidad.</li>
              <li>Superficie plana que sirve como asiento adicional.</li>
              <li>Asa tipo balde para una cómoda transportación.</li>
              <li>La tapa flip-lid se mantiene sujeta y sirve como bandeja para servir.</li>
              <li>Capacidad de 6 latas + hielo</li>
              <li>Peso: 800 gr. Medidas: 25x18x18 cm.</li>

            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/hieleras/HIELERA 54 QT DE ACERO.webp')}}"
            class="img-fluid"
          />

          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA 54 QT DE ACERO</h5> <small>Modelo: M6154B720 - VERDE</small>
          <p class="card-text">
            <ul>
              <li>El interior es a prueba de moho.</li>
              <li>Conserva el hielo hasta 3 días en una temperatura de hasta 32º C.</li>
              <li>Estructura antibacterial.</li>
              <li>Cuerpo y tapa de acero inoxidable.</li>
              <li>Solido cierre de acero para mantener el contenido frio.</li>
              <li>Drenaje antioxidante y anti derrames.</li>
              <li>Asas grandes y fuertes de acero inoxidable con forro de goma para mayor comodidad.</li>
              <li>Tapa fija doble con seguro.</li>
              <li>Capacidad de 65 latas + hielo.</li>
              <li>Peso: 7.6 Kg. Medidas: 42x59x40 cm.</li>
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
            src="{{asset('/imgproductos/hieleras/HIELERA COLEMAN EXTREME 62 QT CON RUEDAS.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HIELERA COLEMAN EXTREME 62 QT CON RUEDAS</h5>
          <p class="card-text">
            <ul>
              <li>El interior es a prueba de moho.</li>
              <li>Conserva el hielo hasta 5 días en una temperatura de hasta 32º C.</li>
              <li>Estructura antibacterial.</li>
              <li>Base amplia para mayor estabilidad.</li>
              <li>Drenaje antioxidante y anti derrames.</li>
              <li>Superficie plana que sirve como asiento adicional.</li>
              <li>Asa grande y ergonómica para jalar la hielera con una sola mano.</li>
              <li>Asas bi-direccionales para cargar con mayor facilidad.</li>
              <li>Tapa fija con porta vasos diseñada para colocarle un cojín.</li>
              <li>Ruedas todo terreno.</li>
              <li>Capacidad 85 latas.</li>
              <li>Peso: 6 Kg. Medidas: 42x67x43 cm.</li> 
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