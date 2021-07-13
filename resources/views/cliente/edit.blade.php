@extends('adminlte::page')
@section('title', 'LynnTech | Cliente')

@section('content_header')
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <h1>Editar Cliente</h1>
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
                <h3 class="card-title">Editar Cliente</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/clientes/{{$cliente->cedula}}" method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">

                <label for="">Cedula</label>  
                <input value="{{$cliente->cedula}}" readonly required maxlength="11" onkeypress='return validaNumericos(event)' id="cedula" name="cedula" class="form-control form-control-lg" type="text" placeholder="" tabindex="1">
                <br>

                <label for="">Primer nombre</label>
                <input value="{{$cliente->primer_nombre}}" required maxlength="15" id="primer_nombre" name="primer_nombre" class="form-control form-control-lg" type="text" placeholder="" tabindex="2">
                <br>

                <label for="">Segundo nombre</label>
                <input value="{{$cliente->segundo_nombre}}" required maxlength="15" id="segundo_nombre" name="segundo_nombre" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <br>

                <label for="">Primer apellido</label>
                <input value="{{$cliente->primer_apellido}}" required maxlength="15" id="primer_apellido" name="primer_apellido" class="form-control form-control-lg" type="text" placeholder="" tabindex="5">
                <br>

                <label for="">Segundo apellido</label>
                <input value="{{$cliente->segundo_apellido}}" required maxlength="15" id="segundo_apellido" name="segundo_apellido" class="form-control form-control-lg" type="text" placeholder="" tabindex="6">
                <br>

                <label for="">Telefono</label>
                <input value="{{$cliente->telefono}}" required maxlength="10" id="telefono" name="telefono" class="form-control form-control-lg" type="text" placeholder="" tabindex="7">
                <br>

                <label for="">Direccion</label>
                <input value="{{$cliente->direccion}}" required required maxlength="25" id="direccion" name="direccion" class="form-control form-control-lg" type="text" placeholder="" tabindex="8">
                <br>
                
                <label for="">Ciudad</label>
                <input value="{{$cliente->ciudad}}" required required maxlength="40" id="ciudad" name="ciudad" class="form-control form-control-lg" type="text" placeholder="" tabindex="9">
                <br>
                

                  </div>
     
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
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
