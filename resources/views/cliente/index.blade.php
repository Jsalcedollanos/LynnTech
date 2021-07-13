@extends('adminlte::page')

@section('title', 'LynnTech')

@section('content_header')
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <h1>LynnTech - Clientes</h1>
@stop

@section('content')
    
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Bloque de codigo de Buscar -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input name="busqueda" required maxlength="11" onkeypress='return validaNumericos(event)' class="form-control me-2" type="search" placeholder="ID Cliente" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
      <a href="/admin" class="btn btn-secondary" >Retroceder</a>
    </form>
  </div>
</nav>
<table class="table table-dark table-striped ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Cedula</th>
            <th scope="col">Primer Nombre</th>
            <th scope="col">Segundo Nombre</th>
            <th scope="col">Primer Apellido</th>
            <th scope="col">Segundo Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Fecha creacion</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->cedula}}</td>
                    <td>{{$cliente->primer_nombre}}</td>
                    <td>{{$cliente->segundo_nombre}}</td>
                    <td>{{$cliente->primer_apellido}}</td>
                    <td>{{$cliente->segundo_apellido}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td>{{$cliente->ciudad}}</td>
                    <td>{{$cliente->created_at}}</td>
                    <td>   
                        <form action="{{ route ('clientes.destroy',$cliente->id) }}" method="POST">
                            <a class="btn btn-info" href="/clientes/{{$cliente->id}}/edit">Facturas</a>
                            <a class="btn btn-info" href="/clientes/{{$cliente->id}}/edit">Editar</a>
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
<!-- Validacion solo numero -->
<script>
        function validaNumericos(event)
        {
            if(event.charCode >= 48 && event.charCode <= 57)
            {
              return true;
            }
            return false;        
        }
    </script>
<!-- Fin Validacion solo numero -->
@stop



