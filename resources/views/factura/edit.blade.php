@extends('adminlte::page')
@section('title', 'LynnTech | Factura')

@section('content_header')
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <h1>Editar Factura</h1>
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
                <h3 class="card-title">Editar Factura</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/facturas/{{$factura->nfactura}}" method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">

                <label for="">Cedula</label>  
                <input value="{{$factura->cedula}}" required maxlength="11" onkeypress='return validaNumericos(event)' id="cedula" name="cedula" class="form-control form-control-lg" type="text" placeholder="" tabindex="1">
                <br>

                <label for="">Nombres</label>
                <input value="{{$factura->nombre}}" required maxlength="40" id="nombre" name="nombre" class="form-control form-control-lg" type="text" placeholder="" tabindex="2">
                <br>

                <label for="">Apellidos</label>
                <input value="{{$factura->apellido}}" required maxlength="40" id="apellido" name="apellido" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <br>

                <label for="">Telefono</label>
                <input value="{{$factura->telefono}}" required maxlength="10" id="telefono" name="telefono" class="form-control form-control-lg" type="text" placeholder="" tabindex="4">
                <br>

                <label for="">Direccion</label>
                <input value="{{$factura->direccion}}" required required maxlength="40" id="direccion" name="direccion" class="form-control form-control-lg" type="text" placeholder="" tabindex="5">
                <br>
                
                <label for="">Valor</label>
                <input value="{{$factura->valor}}" required maxlength="7" onkeypress='return validaNumericos(event)' id="valor" name="valor" class="form-control form-control-lg" type="text" placeholder="" tabindex="6">
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
