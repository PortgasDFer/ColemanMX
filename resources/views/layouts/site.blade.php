<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {!! SEO::generate() !!}
    @yield('seo')
</head>
<body>
	<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <img src="{{asset('img/logocoleman.png')}}" alt="coleman logo" >
      <a class="navbar-brand" href="#" style="color:white;"></a>
      <button class="navbar-toggler nav__link" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-auto">
        </ul>
        <div class="navbar-nav my-2 my-lg-0">
            <li class="nav-item">
        			<a class="nav__link" href="/">Inicio</a>
        		</li>
        		<li class="nav-item">
        			<a class="nav__link" href="/catalogo">Catalogo</a>
        		</li>
        		<li class="nav-item">
        			<a class="nav__link" href="tel:525549716065"><i class="fa fa-phone" aria-hidden="true"></i> 525549716065 </a>
        		</li>
        </div>
    </nav>
    @yield('header')
  </header>
    	@yield('content')
      <!-- Footer -->
      <footer class="page-footer font-small teal pt-4">
        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left">
        </div>
        <!-- Footer Text -->
        <!-- Copyright -->
        <div class="footer-copyright bg-danger mr-auto ml-auto py-3 text-white">
          © 2021 Copyright: COLEMANMX
          DISTRIBUIDOR A TODO MÉXICO Y LATINOAMERICA
        </div>
        <!-- Copyright -->
      </footer>
<!-- Footer -->
  <div class="btn-whatsapp">
		<a href="https://wa.me/525549716065" target="_blank">
			<img src="{{asset('img/btn_whatsapp.png')}}" alt="">
		</a>
	</div>
  <div class="btn-messenger">
    <a href="https://wa.me/525549716065" target="_blank">
      <img src="{{asset('img/btn_msn.png')}}" alt="">
    </a>
  </div>
  @include('sweetalert::alert')
  @yield('scripts')
</body>
</html>