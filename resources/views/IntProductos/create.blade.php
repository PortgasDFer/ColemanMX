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
                    <form action="/regProductos" method="POST" enctype="">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre del producto</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Descripción</label>
                            <div class="col-md-6">
                                <textarea id="descripcion" type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion" autofocus cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Imagen del producto</label>
                            <div class="col-md-6">
                                <input type="file" id="img" type="text" class="form-control" name="img" value="{{ old('img') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Categoria</label>
                            <div class="col-md-6">
                                <select class="form-control">
                                  <option>Default select</option>
                                  @foreach($categorias as $c)
                                    <option value="{{$c->id}}">{{$c->nombre}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection