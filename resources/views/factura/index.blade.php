@extends('adminlte::page')

@section('title', 'LynnTech')

@section('content_header')
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <h1>LynnTech - Factura</h1>
@stop

@section('content')
    
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Bloque de codigo de Buscar -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input name="busqueda" required maxlength="11" onkeypress='return validaNumericos(event)' class="form-control me-2" type="search" placeholder="ID Factura" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
      <a href="/admin" class="btn btn-secondary" >Retroceder</a>
    </form>
  </div>
</nav>
<table class="table table-dark table-striped ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Numero Factura</th>
            <th scope="col">Cedula</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Valor</th>
            <th scope="col">Fecha creacion</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($facturas as $factura)
                <tr>
                    <td>{{$factura->id}}</td>
                    <td>{{$factura->nfactura}}</td>
                    <td>{{$factura->cedula}}</td>
                    <td>{{$factura->nombre}}</td>
                    <td>{{$factura->apellido}}</td>
                    <td>{{$factura->telefono}}</td>
                    <td>{{$factura->direccion}}</td>
                    <td>{{$factura->valor}}</td>
                    <td>{{$factura->created_at}}</td>
                    <td>   
                        <form action="{{ route ('facturas.destroy',$factura->id) }}" method="POST">

                            <a class="btn btn-info" href="/facturas/{{ $factura->id}}/edit">Editar</a>
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



