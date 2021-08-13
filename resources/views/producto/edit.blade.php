@extends('adminlte::page')

@section('title', 'Lyndapolo.co')

@section('content_header')
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <h1>Lyndapolo.co</h1>
@stop

@section('content')
  
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar Producto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="UpdateProducto" name="UpdateProducto" action="{{route('producto.update')}}" method="POST">
                @csrf
              <div class="card-body">

                <label for="">Nombre</label>  
                <input  id="nombre" name="nombre" class="form-control form-control-lg" type="text" placeholder="" tabindex="1">
                <br>

                <label for="">Cantidad</label>
                <input  required id="cantidad" name="cantidad" class="form-control form-control-lg" type="text" placeholder="" tabindex="2">
                <br>

                <label for="">Valor</label>
                <input  required id="valor" name="valor" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <br>

                <label for="">Descripcion</label>
                <textarea  id="descripcion" name="descripcion" class="form-control form-control-lg" type="text" placeholder="" tabindex="4" maxlength="255"></textarea>
                <br>
                

                <label for="">Imagen Pequeña</label>
                <div class="input-group mb-3">
                <input type="file" name="imagen" id="imagen" accept="image/*">
                <p>
                Foto de perfil del producto en lo cart <br>
                Advertencia: Recuerda que las imagenes solo deben ser de dos tipos de 
                  formatos (PNG) y (JPG).
                  La medida estandar de la imagen es de 250px X 300px para una buena visualizacion.
                </p>

                <label for="">Imagen Grande</label>
                <div class="input-group mb-3">
                <input type="file" name="imagenGrande" id="imagenGrande" accept="image/*" tabindex="7">
                </div>
                <p>
                Foto para ver los detalles del producto  <br>
                Advertencia: Recuerda que las imagenes solo deben ser de dos tipos de 
                  formatos (PNG) y (JPG).
                  La medida estandar de la imagen es de 900px X 1024px para una buena visualizacion.
                </p>
                </div>
                  </div>
     
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" tabindex="7">Actualizar</button>
                  <a href="/admin" class="btn btn-secondary" tabindex="8">Cancelar</a>
                </div>
                
              </form>
            </div>
            <!-- /.card -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="/js/validacionNumero.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>



<script>
  $(document).ready(function(){
    $('body').on('click', '.btnEdit', function () {
      var producto_id = $(this).attr('data-id');
      $.get('producto/' + data.id +'/edit', function (data) {
         /*  $('#editProducto-modal').modal('show'); */
          $('#UpdateProducto #id').val(data.id);
          $('#UpdateProducto #nombre').val(data.nombre);
          $('#UpdateProducto #descripcion').val(data.descripcion);
          $('#UpdateProducto #valor').val(data.valor);
          $('#UpdateProducto #cantidad').val(data.cantidad);
          $('#UpdateProducto #color').val(data.color);
          $('#UpdateProducto #categoria').val(data.categoria);
      })      
  });
      $("#UpdateProducto").validate({
      rules: {
        id: "required",
        nombre: "required",
        descripcion: "required",
        color: "required",
        valor: "required",
        categoria: "required"
      },
      messages: {
      },
      submitHandler: function(form) {
        var form_action = $("#UpdateProducto").attr("action");
        $.ajax({
        data: $('#UpdateProducto').serialize(),
        url: form_action,
        type: "POST",
        dataType: 'json',
        success: function (data) {
        var producto = '<td>' + data.id + '</td>';
        producto += '<td>' + data.nombre + '</td>';
        producto += '<td>' + data.descripcion + '</td>';
        producto += '<td>' + data.categoria + '</td>';
        producto += '<td>' + data.color + '</td>';
        producto += '<td>' + data.cantidad + '</td>';
        producto += '<td>' + valor + '</td>';
        producto += '<td><a data-id="' + data.id + '" class="btn btn-primary btnEdit">Edit</a>&nbsp;&nbsp;<a data-id="' + data.id + '" class="btn btn-danger btnDelete">Delete</a></td>';
        },
        error: function (data) {
        }
        });
      }
      });


});
  
</script>
@stop
