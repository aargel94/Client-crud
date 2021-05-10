@extends('welcome')
	@section('contenido')
    <div id="user" actiom="{{ route('usuario.update', $usuario->id)}}" class="container">
    <form class="row g-3"  method="POST">
    @csrf
    @method('PUT')
        <div class="col-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$usuario->nombre}}" />
        </div>
        <div class="col-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="{{$usuario->apellido}}" />
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$usuario->email}}" />
        </div>
        <div class="col-12">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{$usuario->telefono}}" />
        </div>
        <div class="col-12">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" placeholder="Foto" value="{{$usuario->foto}}" />
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
        </form>
    </div>