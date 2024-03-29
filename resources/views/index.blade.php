@section('seo')


@endsection

@extends('layouts.site')
@section('content')
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img data-src="img/background-coleman.jpg" class="d-block hero header lazyLoad" alt="First slide">
      </div>
      <div class="carousel-item">
        <img data-src="img/background-coleman-2.jpg" class="d-block hero header lazyLoad" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img data-src="img/background-coleman-3.jpg" class="d-block hero header lazyLoad" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="container">
	<div class="row mt-4">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="d-grid gap-2 d-md-block">
				<h1>COLEMAN MÉXICO</h1>
				<h2>¿Por qué elegirnos?</h2>
				<p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, quia! Autem amet, aut quia corrupti, distinctio fugit iste laudantium, quidem asperiores, earum tempora pariatur dolorem dolorum molestias necessitatibus inventore. Mollitia.</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<form action="">
				@csrf
				<div class="form-group row">
					<div class="col-xs-12 col-md-12">
						<label for="Nombre">Nombre</label>
						<input type="text" class="form-control" name="name">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-sm-12 col-md-6">
						<label for="">Correo</label>
						<input type="text" class="form-control" name="email">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<label for="">Número de teléfono</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-md-12">
						<label for="">Mensaje</label>
						<textarea name="" id="" cols="30" rows="10" class="form-control" name="message"></textarea>
					</div>
				</div>
				<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
					{!! NoCaptcha::renderJs() !!}
            <label class="col-md-4 control-label">Captcha</label>
            <div class="col-md-6">
                {!! app('captcha')->display() !!}
                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                @endif
            </div>
        </div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-4">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
			<div class="embed-responsive embed-responsive-4by3">
				<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1882.3397221627013!2d-99.0599108!3d19.3397114!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0283ba2c6ba7%3A0xd6cdb096bbc9af42!2sColeman%20Camping%20M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1622775157519!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
			<div class="card bg-danger">
				<div class="card-body text-center text-white">
					<h4>Contactanos</h4>
						AV. 5 de Mayo Mz 12 Lt 1. Col. Francisco Villa<br>
						Alcaldía Iztapalapa C.P. 09720 CDMX
						<hr>
						ventas@colemanmx.com.mx <br>
						Teléfono:
						55 5037 6191 / 55 4971 6065 <br>
						<a href="https://www.instagram.com/colemancampingmexico"><button type="button" class="btn btn-outline-light"><i class="fa fa-instagram" aria-hidden="true"></i></button></a>						<a href="https://www.facebook.com/ColemanCampingMexico/"><button type="button" class="btn btn-outline-light"><i class="fa fa-facebook" aria-hidden="true"></i></button></a>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
			<div class="embed-responsive embed-responsive-4by3">
				<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/xuJZEryQvks" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
function onScrollEvent(entries, observer) {
    entries.forEach(function(entry) {
        if (entry.isIntersecting) {
            var attributes = entry.target.attributes;
            var src = attributes['data-src'].textContent;
            entry.target.src = src;
            entry.target.classList.add('visible');
        }
    });
}

// Utilizamos como objetivos todos los
// elementos que tengan la clase lazyLoad,
// que vimos en el HTML de ejemplo.
var targets = document.querySelectorAll('.lazyLoad');

// Instanciamos un nuevo observador.
var observer = new IntersectionObserver(onScrollEvent);

// Y se lo aplicamos a cada una de las
// imágenes.
targets.forEach(function(entry) {
    observer.observe(entry);
});
</script>
@endsection
