@extends('adminlte::page')

@section('title', 'LynnTech | Factura')

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
                <h3 class="card-title">Agregar Cliente</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/clientes" method="POST">
                @csrf
              <div class="card-body">
              
              <?php
                  $caracteres = "1234567890";
                  $desordenada = str_shuffle($caracteres);
                  $CH = substr($desordenada, 1, 4);
              ?>
                              
                <label for="">Cedula</label>
                <input required maxlength="11" onkeypress='return validaNumericos(event)' id="cedula" name="cedula" class="form-control form-control-lg" type="text" min="0" placeholder="" tabindex="2">
                <br>
                
                <label for="">Primer nombre</label>
                <input required maxlength="15" id="primer_nombre" name="primer_nombre" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <br>

                <label for="">Segundo nombre</label>
                <input required maxlength="15" id="segundo_nombre" name="segundo_nombre" class="form-control form-control-lg" type="text" placeholder="" tabindex="4">
                <br>

                <label for="">Primer apellido</label>
                <input required maxlength="15" id="primer_apellidos" name="primer_apellido" class="form-control form-control-lg" type="text" placeholder="" tabindex="5">
                <br>

                <label for="">Segundo apellido</label>
                <input required maxlength="15" id="segundo_apellidos" name="segundo_apellido" class="form-control form-control-lg" type="text" placeholder="" tabindex="6">
                <br>

                <label for="">Telefono</label>
                <input required maxlength="11" onkeypress='return validaNumericos(event)' required id="telefono" name="telefono" class="form-control form-control-lg" type="text" min="0" placeholder="" tabindex="7">
                <br>

                <label for="">Direccion</label>
                <input required required maxlength="20" id="direccion" name="direccion" class="form-control form-control-lg" type="text" placeholder="" tabindex="8">
                <br>


                <label for="">Ciudad</label>
                <select required class="form-control form-control-lg" aria-label=".form-select-lg example" id="ciudad" name="ciudad" tabindex="9">
                    <option selected></option>
                    <option value="Barranquilla">Barranquilla</option>
                    <option value="Bogota">Bogota</option>
                    <option value="Medellin">Medellin</option>
                    <option value="Cali">Cali</option>
                    <option value="Pereira">Pereira</option>
                    <option value="Medellin">Medellin</option>
                </select>


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

