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
        <img class="d-block hero header" src="img/background-coleman.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block hero header" src="img/background-coleman-2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block hero header" src="img/background-coleman-3.jpg" alt="Third slide">
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
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-sm-12 col-md-6">
						<label for="">Correo</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<label for="">Número de teléfono</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-xs-12 col-md-12">
						<label for="">Mensaje</label>
						<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
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
						Av.Morelos N°20 Col. Las peñas <br>
						Alcaldía Iztapalapa C.P. 09750
						<hr>
						ventas@colemanmx.com.mx
						<hr>
						Teléfono:
						55 5037 6191 / 55 6797 6684 <br>
						<button type="button" class="btn btn-outline-light"><i class="fa fa-whatsapp" aria-hidden="true"></i></button>
						<button type="button" class="btn btn-outline-light"><i class="fa fa-facebook" aria-hidden="true"></i></button>
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