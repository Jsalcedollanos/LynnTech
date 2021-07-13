@extends('adminlte::page')

@section('title', 'LynnTech | Productos')

@section('content_header')
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

 

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
                <h3 class="card-title">Agregar Producto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/productos" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
              <?php
                  $caracteres = "1234567890";
                  $desordenada = str_shuffle($caracteres);
                  $CH = substr($desordenada, 1, 4);
              ?>
                <label for="">Codigo</label>
                <input value="<?php echo $CH ?>" readonly id="codigo" name="codigo" class="form-control form-control-lg" type="number" placeholder="" tabindex="1">
                <br>

                <label for="">Titulo</label>
                <input required id="titulo" name="titulo" class="form-control form-control-lg" type="text" placeholder="" tabindex="1">
                <br>

                <label for="">Cantidad</label>
                <input required maxlength="3" onkeypress="return valideKey(event);" id="cantidad" name="cantidad" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <br>
                
                <label for="">Valor</label>
                <input required maxlength="7" onkeypress="return valideKey(event);" id="valor" name="valor" class="form-control form-control-lg" type="text" placeholder="" tabindex="2">
                <br> 

                <label for="">Descripcion</label>
                <textarea required id="descripcion" name="descripcion" class="form-control form-control-lg" type="text" placeholder="" tabindex="3" maxlength="255"></textarea>
                <br>


                <!-- <label for="">Cargar Imagen</label>
                <input id="imagen" name="imagen" class="form-control form-control-lg" type="text" placeholder="" tabindex="4">
                <br> -->
                
                <label for="">Imagen Publicitaria</label>
                <div class="input-group mb-3">
                <input type="file" name="imagen" id="imagen" accept="image/*">
                </div>
               
               
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
                  <a href="/productos" class="btn btn-secondary" tabindex="6">Cancelar</a>
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
    <script> console.log('Hi!'); </script>
    <script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

@stop

