@extends('welcome')
	@section('contenido')
    <div id="user" class="container">
    @if($errors->any())
        <p>errors</p>
    @endif
    <form class="row g-3" action="{{url('/')}}" method="POST">
    @csrf
        <div class="col-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="col-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required >
        </div>
        <div class="col-12">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="telefono" required>
        </div>
        <div class="col-12">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" placeholder="Foto">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
        </form>
    </div>