@extends('adminlte::page')

@section('title', 'LynnTech')

@section('content_header')
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="/plugins/toastr/toastr.min.css">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <h1>LynnTech - Factura</h1>
@stop

@section('content')
    
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Bloque de codigo de Buscar -->

<table class="table table-bordered" id="facturas">
    <thead>
        <tr class="table-danger">
            <th scope="col">ID</th>
            <th scope="col">Numero Factura</th>
            <th scope="col">Cedula</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Valor</th>
            <th scope="col">Fecha creacion</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
       </table>
          
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <script src="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
@stop

@section('css')
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


<script> 
/* Pedicion AJAX para mostrar productos en datable */
$(document).ready( function () { 
    
   var table = $('#facturas').DataTable({ 

        "processing": true, 

        "serverSide": true, 

        "ajax": "{{route('factura.index')}}", 

        "columns": [ 
  
            {data:'id'},

            {data:'nfactura'},

            {data:'cedula'},

            {data:'nombres'}, 

            {data:'apellidos'},            

            {data:'telefono'},

            {data:'direccion'},

            {data:'valor'},

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

<!-- /* Fin de peticion AJAX listar productos en tabla */ -->
@stop



