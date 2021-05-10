@extends('welcome')
	@section('contenido')

    <div id="user" class="container"> 
        <div class="row">
          <div class="col-2">
          Usuarios
          </div>
          <div class="col-10">
            <form class="form-inline my-2 my-lg-0 buscar " action="{{url('/')}}">
              <input class="form-control mr-sm-2 form-control-sm" type="search" placeholder="Buscar" name="search" id="search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0  btn-sm" type="submit">Buscar</button>
            </form>
          </div>
          
        </div>
        <a href="{{url('/create')}} "><div class="mt-3 btn btn-primary btn-crear">
        <i class="fas fa-plus mr-1"></i> Crear
        </div></a>
        <div class="tabla mt-3">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Telefono</th>
              <th scope="col">Email</th>
              <th scope="col" colspan="2">Acciones</th>

            </tr>
          </thead>
          <tbody>
          @if(count($usuarios) == 0)
            <tr>
              <td class="text-center py-3" colspan="6" >No hay datos para mostrar</td>
            </tr>
          @else
            @foreach ($usuarios as $usu)
              <tr>
                <th scope="row">{{$usu->nombre}}</th>
                <td>{{$usu->apellido}} </td>
                <td>{{$usu->telefono}} </td>
                <td>{{$usu->email}} </td>
                <td>
                  <a href="{{route('usuario.edit', $usu->id)}} " class="btn btn-light"> <i class="fas fa-edit"></i> Editar</a>
                </td>
                <td>
                  <form action="{{route('usuario.delete', $usu->id)}}" method="post">
                    @csrf
                    @method('DELETE')

                     <button type="submit" class="btn btn-danger btn-eliminar"><i class="fas fa-trash-alt"></i>  Eliminar </button>
                  </form>
                </td>
                
              </tr>
            @endforeach
          @endif
          </tbody>
        </table>
       
        </div>
    </div>