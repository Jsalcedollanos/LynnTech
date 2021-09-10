@extends('adminlte::page')

@section('title', 'Roles de usuarios | Lynda Polo')

@section('content_header')
<!-- CSS PERSONALIZADO PARA ADMIN -->
<link rel="stylesheet" href="/css/style-admin.css">
      <!-- FIN -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="/plugins/toastr/toastr.min.css">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <h1>Roles</h1>
@stop

@section('content')
    <p>Cuentas de usuarios.</p>

    <!-- Boton para guardar productos -->
<div class="card-body">
  <svg type="button" id="add" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
  </svg>
  <br>
  <label for="" class="text-content">Agregar Usuario</label>
</div>
<!-- Fin de guardar productos -->

<!-- Tabla de productos -->
<table class="table table-dark table-striped" id="users">
  <thead>
    <tr>
      <th scope="col" >ID</th>
      <th scope="col" >Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Roll</th>
      <th scope="col">Fecha de creacion</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
</table>

<!-- Fin de tabla de productos -->



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <script src="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
@stop

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Boostrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Fin Boostrap 5 -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


<script> 
/* Pedicion AJAX para mostrar productos en datable */
$(document).ready( function () { 
    
   var table = $('#users').DataTable({ 

        "processing": true, 

        "serverSide": true, 

        "ajax": "{{route('roles.index')}}", 

        "columns": [ 
  
            {data:'id'},

            {data:'name'},

            {data:'email'},

            {data:'role'}, 

            {data:'created_at'},            
        
            {data:'id', "render": function (data) {
            return "<button id=\"" + data + "\" type=\"button\" name=\"btnEditar\" class=\"btnEditar btn btn-warning botonEditar\"><span class=\"material-icons\">edit</span></button>";
            }},

            {data:'id', "render": function (data) {
                var ide = data;
            return "<button  id=\"" + data + "\" type=\"button\" name=\"eliminar\"  class=\"eliminar btn btn-warning\"> <span class=\"material-icons\">delete</span></button>";
            }},
            ]
    });
  });
</script>
@stop