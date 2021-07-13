@extends('adminlte::page')

@section('title', 'LynnTech | Factura')

@section('content_header')
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 

@stop

@section('content')

<h1>Registro de Factura</h1>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Agregar Factura</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/facturas" method="POST">
                @csrf
              <div class="card-body">
              
              <?php
                  $caracteres = "1234567890";
                  $desordenada = str_shuffle($caracteres);
                  $CH = substr($desordenada, 1, 4);
              ?>
              
                <label for="">Factura</label>
                <input value="<?php echo $CH ?>" readonly id="nfactura" name="nfactura" class="form-control form-control-lg" type="number" min="0" placeholder="" tabindex="1">
                <br>
                
                <label for="">Cedula</label>
                    
                <input required maxlength="11" onkeypress='return validaNumericos(event)' id="cedula" name="cedula" class="form-control form-control-lg" type="text" min="0" placeholder="" tabindex="2">
                <br>

                <label for="">Nombres</label>
                <input required maxlength="20" id="nombre" name="nombre" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <br>

                <label for="">apellidos</label>
                <input required maxlength="25" id="apellido" name="apellido" class="form-control form-control-lg" type="text" placeholder="" tabindex="4">
                <br>

                <label for="">telefono</label>
                <input required maxlength="10" onkeypress='return validaNumericos(event)' required id="telefono" name="telefono" class="form-control form-control-lg" type="text" min="0" placeholder="" tabindex="5">
                <br>

                <label for="">direccion</label>
                <input required required maxlength="40" id="direccion" name="direccion" class="form-control form-control-lg" type="text" placeholder="" tabindex="6">
                <br>

                <label for="">valor</label>
                <input required maxlength="7" onkeypress="return valideKey(event);" id="valor" name="valor" class="form-control form-control-lg" type="text" placeholder="" tabindex="7">
                <br>

                  </div>
     
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
                  <a href="/admin" class="btn btn-secondary" tabindex="9">Cancelar</a>
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

