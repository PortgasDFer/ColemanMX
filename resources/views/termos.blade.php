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
            src="{{asset('/imgproductos/termos/BOTELLA HIDRATACION 1 LT ALUMINIO.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">BOTELLA HIDRATACION 1 LT ALUMINIO</h5><small>MODELO:2000016358</small>
          <p class="card-text">
            <ul>
              <li>Botella de aluminio para hidratación.</li>
              <li>Innovadora tapa manos libres.</li>
              <li>De tamaño perfecto para cualquier tipo de portavasos.</li>
              <li>Boquilla ideal para cualquier tamaño de hielos.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/termos/BOTELLA ALUMINIO COLEMAN 16 OZ.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">BOTELLA ALUMINIO COLEMAN 16 OZ</h5> <small>MODELO: 2000016355</small>
          <p class="card-text">
            <ul>
              <li>Botella de aluminio ligera con arillo en la tapa para cargarla fácilmente.•</li>
              <li>Tamaño perfecto para la mochila.</li>
              <li>Sellado hermético.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/termos/TERMO COLEMAN 1 GALÓN AZUL.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TERMO COLEMAN 1 GALÓN AZUL</h5> <small>Modelo: 300000866</small>
          <p class="card-text">
            <ul>
              <li>Esta elaborado de polietileno, lo cual lo hace prácticamente indestructible.</li>
              <li>Tapas antiderramable con cuerda.</li>
              <li>Tapas anchas con cuerda para una mejor limpieza y llenado.</li>
              <li>Asa tipo balde para cargar fácilmente.</li>
              <li>Peso: 700 gr. Medidas: 30cm altura x 19cm diámetro.</li>
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
            src="{{asset('/imgproductos/termos/TERMO COLEMAN 1 LITRO ROJO.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TERMO COLEMAN 1 LITRO ROJO</h5><small>MODELO: 03000000865</small>
          <p class="card-text">
            <ul>
              <li>Esta elaborado de polietileno, lo cual lo hace prácticamente indestructible.</li>
              <li>Tapas antiderramable con cuerda.• Tapas anchas con cuerda para una mejor limpieza y llenado.</li>
              <li>Asa tipo balde para cargar fácilmente.</li>
              <li>Peso: 700 gr. Medidas: alto 30cm x diámetro 19cm.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/termos/TERMO COLEMAN 1 LITRO Ó 13 GALÓN AZUL.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TERMO COLEMAN 1 LITRO Ó 1/3 GALÓN AZUL</h5> <small>MODELO: 5542A703</small>
          <p class="card-text">
            <ul>
              <li>Esta elaborado de polietileno, lo cual lo hace prácticamente indestructible.</li>
              <li>Tapas antiderramable con cuerda.</li>
              <li>Tapas anchas con cuerda para una mejor limpieza y llenado.</li>
              <li>Asa tipo balde para cargar fácilmente.</li>
              <li>Peso: 250 gr. Medidas: 23cm altura x 13 cm diámetro.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/termos/TERMO COLEMAN  2 GALONES AZUL.webp')}}"
            class="img-fluid"
          />

          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TERMO COLEMAN 2 GALONES AZUL</h5> <small>Modelo: 5592C718G</small>
          <p class="card-text">
            <ul>
              <li>Diseñado especialmente para conservar bebidas frías y calientes.</li>
              <li>Grifo de flujo rápido con sistema instantáneo on/off patentado, elimina el goteo y refresca al momento.</li>
              <li>Construcción de polietileno casi indestructible.</li>
              <li>Boquilla Flip-top para beber y servir sin derramar.</li>
              <li>Fácil de limpiar.</li>
              <li>No conserva olores.</li>
              <li>Resistente a abolladuras, ralladuras.</li>
              <li>No pierde el color.</li>
              <li>Tapa ancha para fácil limpieza y llenado.</li>
              <li>Una manija superior de plástico que facilita su traslado.</li>
              <li>Peso: 1.2 Kg.  Medidas: 33x22</li>
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
            src="{{asset('/imgproductos/termos/TERMO DE 2 LITROS Ó MEDIO GALÓN AZUL.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TERMO DE 2 LITROS Ó ½ GALÓN AZUL</h5><small>MODELO: 5592A703</small>
          <p class="card-text">
            <ul>
              <li>Diseñado especialmente para conservar bebidas frías y calientes.</li>
              <li>Grifo de flujo rápido con sistema instantáneo on/off patentado, elimina el goteo y refresca al momento.</li>
              <li>Construcción de polietileno casi indestructible.</li>
              <li>Boquilla Flip-top para beber y servir sin derramar.</li>
              <li>Fácil de limpiar.</li>
              <li>No conserva olores.</li>
              <li>Resistente a abolladuras, ralladuras.</li>
              <li>No pierde el color.</li>
              <li>Tapa ancha para fácil limpieza y llenado.</li>
              <li>Una manija superior de plástico que facilita su traslado.</li>
              <li>Peso: 45 gr.</li>
              <li>Medidas : 27x14cm.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/termos/TERMO COLEMAN DE 5 GALONES AZUL.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TERMO COLEMAN DE 5 GALONES AZUL</h5> <small>MODELO: 2000033396</small>
          <p class="card-text">
            <ul>
              <li>Capacidad de 5 galones.</li>
              <li>Taparrosca para llenado fácil.</li>
              <li>El sello ajustado mantiene los contenidos fríos.</li>
              <li>Resiste goteos, removible, con pico que se puede meter al lavavajillas.</li>
              <li>Dos manijas para que levantarlo y llevarlo sea más confortable.</li>
              <li>Peso: 2.5 Kg.  Medidas: 47cm altura x 32cm. diámetro.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/termos/TERMO COLEMAN DE 2 GALONES CHAPARRO Azul.webp')}}"
            class="img-fluid"
          />

          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TERMO COLEMAN DE 2 GALONES CHAPARRO Azul</h5> <small>Modelo: 3000000736</small>
          <p class="card-text">
            <ul>
              <li>• Asas ergonómicas para fácil agarre.</li>
              <li>Encaje entre si.</li>
              <li>Fácil limpieza.</li>
              <li>Capacidad 8 litros.</li>
              <li>Colores: azul y rojo.</li>
              <li>Peso: 1.2 Kg.</li>
              <li>Medidas: 26cm altura x 26cm diámetro.</li>
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
            src="{{asset('/imgproductos/termos/TERMO COLEMAN DE 2 GALONES ROJO.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TERMO COLEMAN DE 2 GALONES ROJO</h5><small>MODELO: 5592C703G</small>
          <p class="card-text">
            <ul>
              <li>Diseñado especialmente para conservar bebidas frías y calientes.</li>
              <li>Grifo de flujo rápido con sistema instantáneo on/off patentado, elimina el goteo y refresca al momento.</li>
              <li>Construcción de polietileno casi indestructible.</li>
              <li>Boquilla Flip-top para beber y servir sin derramar.</li>
              <li>Fácil de limpiar.</li>
              <li>No conserva olores.</li>
              <li>Resistente a abolladuras, ralladuras.</li>
              <li>No pierde el color.</li>
              <li>Tapa ancha para fácil limpieza y llenado.</li>
              <li>Una manija superior de plástico que facilita su traslado.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
    </div>
  </div>
</div>
@endsection