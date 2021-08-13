@extends('adminlte::page')

@section('title', 'Productos | Lynda Polo')

@section('content_header')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="/plugins/toastr/toastr.min.css">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <h1>Productos LyndaPolo.co</h1>
@stop


@section('content')
<!-- Incluir Modal para Eliminar Producto -->
@include('producto.modalEliminar')
<!-- Fin de Modal eliminar Producto -->
<div class="card-body">
<button class="btn btn-success me-md-2" type="button" data-toggle="modal" data-target="#addModal">Agregar Producto</button>
<button class="btn btn-success me-md-2" type="button" id="actualizar" name="actualizar">Recargar Pagina</button>
</div>

<!-- Tabla de productos -->
<table class="table table-bordered" id="productos">
  <thead>
    <tr class="table-danger">
      <th scope="col" >ID</th>
      <th scope="col">Codigo</th>
      <th scope="col">Producto</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Categoria</th>
      <th scope="col">Color</th>
      <th scope="col">Catidad</th>
      <th scope="col">Valor</th>
      <th scope="col">Imagen</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
</table>
<!-- Fin de tabla de productos -->



<!-- Incluir Modal para agregar Productos -->
@include('producto.modalAddProducto')
<!-- Fin de Modal agregar Producto -->

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

            {data:'categoria'},            

            {data:'color'},

            {data:'cantidad'},

            {data:'valor'},

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

/* Peticion AJAX Eliminar registro */
         var id_producto;
         $(document).on('click','.eliminar', function(){
         id_producto = $(this).attr('id');
         $('#eliminarModal').modal('show');
    });
    $('#btnEliminar').click(function(){
        $.ajax({
            url:"eliminar/"+id_producto,
            beforeSend:function(){
                $('#btnEliminar').text('Eliminando...');
            },            
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
      /* var imagenP = $('#editImagen').val();
      var imagenGrandeP = $('#editImagenGrande').val(); */
      /* var _token2 = $('#input[name=_token]').val(); */
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
          }
      })
   }); 
});
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


<!-- Actualizar -->
<script>

</script>



@stop