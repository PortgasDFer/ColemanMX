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
            src="{{asset('/imgproductos/accesorios/ESTACAS DE ACERO.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">ESTACAS DE ACERO</h5><small>MODELO: M830B412T</small>
          <p class="card-text">
            <ul>
              <li>Estacas de metal plateado de uso rudo.</li>
              <li>Gran penetración en la tierra.</li>
              <li>4 piezas por empaque.</li>
              <li>Medidas: 30.5 x 2.1cm. Peso: 300 gr.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/accesorios/ESTACAS DE PLÁSTICO.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">ESTACAS DE PLÁSTICO COLEMAN</h5> <small>MODELO: 830D309T</small>
          <p class="card-text">
            <ul>
              <li>Prolipropileno resistente para amarrar los cordones.</li>
              <li>Alta durabilidad e inoxidable.</li>
              <li>6 piezas por empaque.</li>
              <li>Resistente a la humedad.</li>
              <li>Dimensiones 299 x 22 x 19 mm.</li>
              <li>Peso 20gr.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/accesorios/PALA PLEGABLE.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">PALA PLEGABLE</h5> <small>Modelo: M836A321T</small>
          <p class="card-text">
            <ul>
              <li>Borde de corte cerrado.</li>
              <li>Collar de enganche positivo.</li>
              <li>Hoja de acero forjado y templado.</li>
              <li>Doble función pala o sierra.</li>
              <li>Dimensiones 15.2 x 24.8 cm.</li>
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
            src="{{asset('/imgproductos/accesorios/PALA PLEGABLE CON PICO COLEMAN.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">PALA PLEGABLE CON PICO COLEMAN</h5><small>MODELO: 2000016390</small>
          <p class="card-text">
            <ul>
              <li>Puede utilizarse como pala, pico o sierra.</li>
              <li>Componentes de acero templado para larga vida.</li>
              <li>Fácil de doblar.</li>
              <li>Incluye bolsa para guardarla.</li>
              <li>Viene con un aro para mayor seguridad.</li>
              <li>Tamaño 58.4 cm abierta y 28.4 cm cerrada.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/accesorios/SILBATO COLEMAN DE SUPERVIVENCIA 5 EN 1.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">SILBATO COLEMAN DE SUPERVIVENCIA 5 EN 1</h5> <small>MODELO: 2000016442</small>
          <p class="card-text">
            <ul>
              <li>A prueba de agua.</li>
              <li>Compás luminoso.</li>
              <li>Señal de espejo.</li>
              <li>Iniciador de fuego.</li>
              <li>Peso: 50 gr.</li>
              <li>Medidas: 12x3 cm.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/accesorios/REGADERA PORTATIL COLEMAN DE 5 GALONES.webp')}}"
            class="img-fluid"
          />

          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">REGADERA PORTATIL COLEMAN DE 5 GALONES</h5> <small>Modelo: M 827A706T</small>
          <p class="card-text">
            <ul>
              <li>Se calienta con la luz del sol.</li>
              <li>Ideal para el camping.</li>
              <li>También sirve para lavar utensilios.</li>
              <li>Viene con sistema para abrir y cerrar el paso de agua.</li>
              <li>Asa resistente y duradera.</li>
              <li>Tiene suficiente capacidad para varios usos.</li>
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
            src="{{asset('/imgproductos/accesorios/HERRAMIENTAS COLEMAN DE MULTIUSOS 5 EN 1.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">HERRAMIENTAS COLEMAN DE MULTIUSOS 5 EN 1</h5><small>MODELO: M2000000995</small>
          <p class="card-text">
            <ul>
              <li>Tamaño ideal para llevar a cualquier lugar.</li>
              <li>Dimensiones del producto cerrado 99 x 32 x 16 mm.</li>
              <li>Contiene: pinzas con punta fina, pinzas estándar, cuchilla chica, abrelatas, cortador de alambre, desarmador de cruz, desarmador grande, mediano y chico, removedor de anzuelos, destapador y regla con medida.</li>
              <li>Agarradera ABS.</li>
              <li>Funda de nylon.</li>
              <li>Peso: 20 gr..</li>
              <li>Medidas: 16 x 7 cm.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/accesorios/ILUMINISTIC COLEMAN.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">ILUMINISTIC COLEMAN</h5> <small>MODELO: 2000001612</small>
          <p class="card-text">
            <ul>
              <li>Par de luces en color azul. <br>
                -Luz de emergencia Cyalume Iluministick Para Campismo M200001612 Coleman. <br>
                -Luz de baja intensidad. <br>
                -Genial para apagones y emergencias. <br>
                -No es toxico, a prueba de agua. <br>
                -2 varas por paquete. <br>
                -Luz confiable y resistente a la intemperie. <br>
                -Tiempo de resplandor de 6 horas a temperatura ambiente normal.
              </li>
              <li>Peso 10 gr.</li>
              <li>Medidas: 18 cm.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 d-flex">
      <div class="card flex-fill">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{asset('/imgproductos/accesorios/MOCHILA COLEMAN LATAM TOLIMA 60L.webp')}}"
            class="img-fluid"
          />

          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">MOCHILA COLEMAN LATAM TOLIMA 60L</h5> <small>Modelo: 2000028018</small>
          <p class="card-text">
            <ul>
              <li>Capacidad: 60 lts.</li>
              <li>Estructura interna de aluminio para mayor soporte y estabilidad.</li>
              <li>Compatible con sistemas de hidratación y puerto de acceso para la bolsa de hidratación.</li>
              <li>Correas y almohadillas en espalda y caderas respirantes y anatómicas.</li>
              <li>Correas para los hombros y cinturón de caderas ajustables para mayor comodidad.</li>
              <li>Correas de compresión y correas de esternón ajustables.</li>
              <li>Cierre frontal y bolsillos laterales con acceso a la parte interior</li>
              <li>Cuerdas Bungee elásticas para portar accesorios</li>
              <li>Compartimento interno con separación.</li>
              <li>Material poliéster Dobby 450D y Diamond Ristpo 420D.</li>
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
            src="{{asset('/imgproductos/accesorios/TRANSPORTADOR PARA TANQUES DE GAS PROPANO COLEMAN.webp')}}"
            class="img-fluid"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">TRANSPORTADOR PARA TANQUES DE GAS PROPANO COLEMAN</h5><small>MODELO: R9708A30C</small>
          <p class="card-text">
            <ul>
              <li>- Alternativa única hecha a la medida para transportar los tanques de propano. <br>
                - Capacidad de dos tanques de propano con capacidad de 16.4 Oz o (Se venden por separado).<br>
                - Conector en la caja para combinar la potencia de los dos tanques 42.000 BTU. <br>
                - Funciona con la parrilla Coleman RoadTrip por 2 horas, en intensidad alta. <br>
                - Se puede usar con otros productos Coleman que utilizan gas propano. <br>
                - Ya sea que este haciendo hamburguesas en su parrilla de tamaño completo en el patio trasero o alimentando un calentador catalítico, mantenga cerca  un portador de propano Coleman Gemini. <br>
                - Aproveche la fuerza de dos tanques de gas de 16.4 oz. <br>
                - Cilindros de propano para hasta 42,000 BTU de potencia durante dos horas. <br>
                - Agregue uno a la parrilla de su patio trasero o equipo de campamento, y otro a su equipo de emergencia. <br>
                - Largo: 29 cm. <br>
                - Alto: 30 cm. <br>
                - Ancho: 15 cm.
              </li>
              <li>Peso 1Kg.</li>
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
        <a class="page-link" href="/accesorios-coleman-camping" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="/accesorios-coleman-camping">1</a></li>
      <li class="page-item"><a class="page-link" href="/accesorios-coleman-camping/page-2">2</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
@endsection