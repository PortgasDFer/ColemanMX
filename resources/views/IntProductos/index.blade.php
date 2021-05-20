@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <a href="/regProductos">Productos.</a>
                    <hr>
                    <div class="table">
                    	<table>
                    		<thead class="thead-dark">
							    <tr>
							      <th scope="col">Nombre</th>
							      <th scope="col">Descripción</th>
							      <th scope="colspan-2">Acciones</th>
							    </tr>
							</thead>
							<tbody>
								@foreach($productos as $p)
									<tr>
										<td>{{$p->nombre}}</td>
										<td>{{$p->descripcion}}</td>
										<td><a href="/regProductos/{{$p->id}}/edit"><button class="btn btn-success">Edit</button></a></td>
										<td>
											<form method="POST" action="/regProductos/{{$p->id}}">
												@method('DELETE')
												@csrf
												<a href="/regProductos/{{$p->id}}"><button class="btn btn-danger">Eliminar</button></a>
											</form> 
										</td>
									</tr>
								@endforeach
							</tbody>
							{{ $productos->onEachSide(5)->links() }}	
                    	</table>
                    </div>		
                </div>
            </div>
        </div>
    </div>
</div>
@endsection