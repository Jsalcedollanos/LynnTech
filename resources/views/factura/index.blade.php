@extends('adminlte::page')

@section('title', 'LynnTech')

@section('content_header')
<!-- CSS DE ADMIEN -->
<link rel="stylesheet" href="/css/style-admin.css">
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

<!-- Boton para guardar Facturas -->
<div class="card-body">
  <svg type="button"  class="btnGuardar" id="btnGuardar" name="btnGuardar" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
  </svg>
  <br>
  <label for="" class="text-content">Agregar Factura</label>
</div>

<!-- Fin de guardar Facturas -->

<!-- MODAL DE AGREGAR FACTURA -->
@include('factura.modalAddFactura')
<!-- FIN DE MODAL -->

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

<script>
/* Agregar factura via AJAX */
$(document).on('click','.btnGuardar',function(){
    
    $('#form-factura').submit(function(e){
        e.preventDefault();    
        $.ajax({
         /*    
            url: '{{route("factura.create")}}',
            type: "POST",
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            $('#form-factura').serialize(),
            data: {
            data:nfactura,
            data:cedula,
            data:nombres,
            data:apellidos,
            data:telefono,
            data:direccion,
            data:valor,
          }, */
            success:function(){
                $('#facturaModal').modal('show');
               /*  setTimeout(function(){
                  $('#facturaModal').modal('hide');
                  toastr.success('La factura se ha guardado satifactoriamente', 'Guardado!', {timeOut: 5000});
                }, 200); */
            } 
        });   
    });
});
/* FIN de intruccion AJAX */

</script>

@stop



