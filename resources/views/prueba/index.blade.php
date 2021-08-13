
@extends('adminlte::page')

@section('title', 'LynnTech | Productos')

@section('content_header')
<script src="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <h1>Productos</h1>
@stop

@section('content')


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Bloque de codigo de Buscar -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Producto 'Nombre'" name="busqueda" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>   
<!-- FIN Bloque de codigo de Buscar -->

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<table class="table table-dark table-striped " id="productos">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
            <th scope="col">Color</th>
            <th scope="col">Cantidad</th>          
            <th scope="col">Valor</th>        
        </tr>
    </thead>
</table>
          
@stop

@section('css')
    <script src="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css"></script>
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#productos').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{route('prueba.index')}}",
        "columns": [
            {data: 'id'},
            {data: 'nombre'},
            {data: 'descripcion'},
            {data: 'categoria'},
            {data: 'color'},
            {data: 'cantidad'},
            {data: 'valor'},
        ]
    });
});
</script>
@stop



