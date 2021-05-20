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
                    <a href="/home">Volver al inicio.</a>
                    <hr>
                    <form action="/regProductos/{{$producto->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre del producto</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" required autocomplete="nombre" autofocus value="{{$producto->nombre}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Descripción</label>
                            <div class="col-md-6">
                                <textarea id="descripcion" type="text" class="form-control" name="descripcion" required autocomplete="descripcion" autofocus cols="30" rows="10" value="">{{$producto->descripcion}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Imagen del producto</label>
                            <div class="col-md-6">
                                <input type="file" id="img" type="text" class="form-control" name="img">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Categoria</label>
                            <div class="col-md-6">
                                <select class="form-control" name="categoria">
                                  <option value="{{$producto->id_categoria}}">No mover categoria</option>
                                  @foreach($categorias as $c)
                                    <option value="{{$c->id}}">{{$c->nombre}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Registrar</label>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection