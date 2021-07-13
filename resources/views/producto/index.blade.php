@extends('adminlte::page')

@section('title', 'LynnTech | Productos')

@section('content_header')
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <h1>LynnTech - Productos</h1>
@stop

@section('content')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Bloque de codigo de Buscar -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Plublicidad" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>   
<!-- FIN Bloque de codigo de Buscar -->

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<table class="table table-dark table-striped ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Valor</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Valoracion</th>
            <th scope="col">Imagen</th>
            
        </tr>
    </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->titulo}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>{{$producto->valor}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->Valoracion}}</td>
                    <td><img src="{{asset($producto->imagen)}}" alt="" class="img-fluid img-thumbnail" width="100"></td>
                    <td>   
                    <form action="{{ route ('productos.destroy',$producto->id) }}" method="POST">

                        <a class="btn btn-info" href="/productos/{{ $producto->id}}/edit">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Borrar</button>


                    </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
</table>
          
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

@stop



