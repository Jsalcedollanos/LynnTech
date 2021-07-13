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
                <h3 class="card-title">Editar Publicidad</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/productos/{{$producto->id}}" method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">

                <label for="">Titulo</label>  
                <input value="{{$producto->titulo}}" id="titulo" name="titulo" class="form-control form-control-lg" type="text" placeholder="" tabindex="1">
                <br>

                <label for="">Cantidad</label>
                <input value="{{$producto->cantidad}}" required id="cantidad" name="cantidad" class="form-control form-control-lg" type="text" placeholder="" tabindex="2">
                <br>

                <label for="">Valor</label>
                <input value="{{$producto->valor}}" required id="valor" name="valor" class="form-control form-control-lg" type="text" placeholder="" tabindex="2">
                <br>

                <label for="">Descripcion</label>
                <input value="{{$producto->descripcion}}" required id="descripcion" name="descripcion" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <br>

               
                  </div>
     
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" tabindex="7">Actualizar</button>
                  <a href="/publicidades" class="btn btn-secondary" tabindex="8">Cancelar</a>
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

@stop
