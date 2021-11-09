@extends('adminlte::page')

@section('title', 'Productos | Lynda Polo')

@section('content_header')
      <!-- CSS PERSONALIZADO PARA ADMIN -->
      <link rel="stylesheet" href="/css/style-admin.css">
      <!-- FIN -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="/plugins/toastr/toastr.min.css">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <h1>Productos LyndaPolo.co</h1>
@stop


@section('content')

<!-- Boton para guardar productos -->
<div class="card-body">
  <svg type="button" id="add" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
  </svg>
  <br>
  <label for="" class="text-content">Agregar Producto</label>
</div>

<!-- Fin de guardar productos -->

<!-- Incluir Modal para Eliminar Producto -->
@include('producto.modalEliminar')
<!-- Fin de Modal eliminar Producto -->

<!-- Incluir Modal para agregar Productos -->
@include('producto.modalAddProducto')
<!-- Fin de Modal agregar Producto -->




<!-- Tabla de productos -->
<div class="table-responsive">
<table class="table table-bordered table-dark" id="productos">
  <thead>
    <tr>
      <th scope="col" >ID</th>
      <th scope="col">Codigo</th>
      <th scope="col">Producto</th>
      <th> <div class="descripcion">Descripcion</div> </th>
      <th scope="col">Etiqueta</th>
      <th scope="col">Categoria</th>
      <th scope="col">Color</th>
      <th scope="col">Catidad</th>
      <th scope="col">Valor</th>
      <th scope="col">Descuento</th>
      <th scope="col">Imagen</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
</table>
</div>
<!-- Fin de tabla de productos -->





<!-- Incluir Modal para editar Producto -->
@include('producto.modalEditarProducto')
<!-- Fin de modal para Editar -->



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




<script> 
/* Pedicion AJAX para mostrar productos en datable */
$(document).ready( function () { 
    
   var table = $('#productos').DataTable({ 

        "processing": true, 

        "serverSide": true, 

        "ajax": "{{route('producto.index')}}", 

        "columns": [ 
  
            {data:'id'},

            {data:'codigo'},

            {data:'nombre'},

            {data:'descripcion'},

            {data:'etiqueta'}, 

            {data:'categoria'},            

            {data:'color'},

            {data:'cantidad'},

            {data:'valor'},

            {data:'descuento'},

            {data:'imagen',
                name:'imagen',
                render:function(data,type,full,meta){
                    return "<img src=\"/" + data + "\" height=\"100\"/>";
                }
            },
            
            {data:'id', "render": function (data) {
            return "<button id=\"" + data + "\" type=\"button\" name=\"btnEditar\" class=\"btnEditar btn btn-warning botonEditar\"><span class=\"material-icons\">edit</span></button>";
            }},

            {data:'id', "render": function (data) {
                var ide = data;
            return "<button  id=\"" + data + "\" type=\"button\" name=\"eliminar\"  class=\"eliminar btn btn-warning\"> <span class=\"material-icons\">delete</span></button>";
            }},
            
            ]
            
  });
 
/* Fin de peticion AJAX listar productos en tabla */

   /* Bloque de Guardar producto */
   $('#add').on('click',function(){
    /* resetear campos al abrir modal nuevamente */
      /* $('#codigo').val(""); */
      $('#nombre').val("");
      $('#cantidad').val("");
      $('#valor').val("");
      $('#descripcion').val("");
      $('#etiqueta').val("");
      $('#descuento').val("");
      $('#color').val("");
      $('#imagenPequeña').val("");
      $('#imagenGrande').val("");
      $('#nombreError').text("");
      $('#cantidadError').text("");
      $('#valorError').text("");
      $('#descripcionError').text("");
      $('#imagenError').text("");
      $('#imagenGrandeError').text("");
    /* fin de este bloque */
    $('#addModal').modal('show');
      $('#addProducto').submit(function(e){
          e.preventDefault(); 
          $.ajax({               
            url: '{{route("producto.create")}}',
            type: "POST",
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },   
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
         
            success:function(data){
              
                setTimeout(function(){
                  $('#addModal').modal('hide');
                  
                  toastr.success('El producto se ha guardado satifactoriamente', 'Guardado!', {timeOut: 5000});
                  table.ajax.reload();                 
                }, 20);  
            },
            error:function(response){
              toastr.error('Opps Algunos errores no permiten guardar tu producto, Corrigelos!', 'Atencion', {timeOut: 10000});
              $('#nombreError').text(response.responseJSON.errors.nombre);
              $('#cantidadError').text(response.responseJSON.errors.cantidad);
              $('#descuentoError').text(response.responseJSON.errors.descuento);
              $('#valorError').text(response.responseJSON.errors.valor);
              $('#descripcionError').text(response.responseJSON.errors.descripcion);
              $('#imagenError').text(response.responseJSON.errors.imagen);
              $('#imagenGrandeError').text(response.responseJSON.errors.imagenGrande);   
            }
        })
    });
});    
    

/* Peticion AJAX Eliminar registro */
    var id_producto;
    $(document).on('click','.eliminar', function(){
         id_producto = $(this).attr('id');
         $('#eliminarModal').modal('show');
    });
    $('#btnEliminar').click(function(){
        $.ajax({
            url:"eliminar/"+id_producto,          
            success:function(data){
                setTimeout(function(){

                  toastr.success('El producto se ha eliminado satifactoriamente', 'Atencion!', {timeOut: 5000});
                    $('#eliminarModal').modal('hide');
                    table.ajax.reload();
                }, 500);
            }
        });
    }); 
/* Fin de peticion AJAX eliminar producto */

/* Peticion AJAX Editar Producto */
    $('#editProducto').submit(function(e){    
      e.preventDefault();
      var idP = $('#id').val();
      var nombreP = $('#editNombre').val();
      var categoriaP = $('#editCategoria').val();
      var descripcionP = $('#editDescripcion').val();
      var colorP = $('#editColor').val();
      var valorP = $('#editValor').val();
      var cantidadP = $('#editCantidad').val();
    $.ajax({ 
        url : "update/"+idP,
        type : 'PUT',
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        typedata: 'json',
        data: {
          id:idP,
          nombre:nombreP,
          categoria:categoriaP,
          descripcion:descripcionP,
          color:colorP,
          valor:valorP,          
          cantidad:cantidadP,          
         },
         success:function(data){
                setTimeout(function(){
                  $('#editModal').modal('hide');
                  toastr.success('El producto se ha actualizado satifactoriamente', 'Atencion!', {timeOut: 5000});
                  table.ajax.reload();
                }, 200);
          },
          error:function(response){
            toastr.error('Opps Algunos errores no permiten guardar tu producto, Corrigelos!', {timeOut: 5000});
            $('#editNombreError').text(response.responseJSON.errors.nombre); 
            $('#editCantidadError').text(response.responseJSON.errors.cantidad); 
            $('#editValorError').text(response.responseJSON.errors.valor); 
            $('#editDescripcionError').text(response.responseJSON.errors.descripcion); 
          }
      })
  });
   

  
});

</script>

<script>
  
</script>

<!-- Editar, Listar Producto en modal -->
<script>
  var id;
  $(document).ready(function(){
    $(document).on('click','.btnEditar',function(){
            id = $(this).attr('id');
            $.ajax({
              url:"edit/"+id,
              type: "get",
              success:function(data){
                $('#id').val(data.id),
                $('#editNombre').val(data.nombre),
                $('#editCategoria').val(data.categoria),
                $('#editColor').val(data.color),
                $('#editCantidad').val(data.cantidad),
                $('#editValor').val(data.valor),
                $('#editDescripcion').val(data.descripcion),
                $('#editModal').modal('show');
			        }
            });
      });
  });
      
  
</script>
<!-- Fin de editar Modal -->

<!-- FIN DE GUARDAR -->
@stop