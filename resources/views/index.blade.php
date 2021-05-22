@extends('layouts.site')
@section('content')
	<div class="row mt-4">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<h1>COLEMAN MÉXICO</h1>
			<h2>¿Por qué elegirnos?</h2>
			<p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, quia! Autem amet, aut quia corrupti, distinctio fugit iste laudantium, quidem asperiores, earum tempora pariatur dolorem dolorum molestias necessitatibus inventore. Mollitia.</p>
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
@endsection