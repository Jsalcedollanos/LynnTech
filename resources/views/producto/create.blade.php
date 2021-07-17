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

                <label for="">Nombre</label>
                <input required id="nombre" name="nombre" class="form-control form-control-lg" type="text" placeholder="" tabindex="2">
                <br>

                  
                  <label for="">Categoria</label>
                  <select name="categoria" id="categoria" class="form-control form-control-lg" tabindex="3">
                  <option value="Vestido de lujo" >Vestido de lujo</option>
                  <option value="Vestido tematico" >Vestido tematico</option>
                  <option value="Vestido sencillo" >Vestido sencillo</option>
                  <option value="Vestido primera comunion" >Vestido primera comunion</option>
                  <option value="Tutu" >Tutu</option>
                  <option value="Conjunto" >Conjunto</option>
                  <option value="Batola" >Batola</option>
                  <option value="Batola Lisa" >Batola Lisa</option>
                  <option value="Batola Campana" >Batola Campana</option>
                  <option value="Lenceria infantil" >Lenceria infantil</option>
                  <option value="Muñecas" >Muñecas</option>
                  <option value="Calzado" >Calzado</option>
                  <option value="Accesorios" >Accesorios</option>
                  </select>
                  <br>

                <label for="">Color</label>
                <select name="color" id="color" class="form-control form-control-lg" tabindex="4">
                  <option value="Rojo" >Rojo</option>
                  <option value="Azul" >Azul</option>
                  <option value="Amarillo" >Amarillo</option>
                  <option value="Vinotinto" >Vinotinto</option>
                  <option value="Verde" >Verde</option>
                  <option value="Negro" >Negro</option>
                  <option value="Blanco" >CBlanco</option>
                  <option value="Naranja" >Naranja</option>
                  <option value="Rosado" >Rosado</option>
                  <option value="Morado" >Morado</option>
                  <option value="Rosado Pastel" >Rosado Pastel</option>
                  <option value="Morado Pastel" >Morado Pastel</option>
                  <option value="Azul Pastel" >Azul Pastel</option>
                  <option value="Amarillo" >Amarillo</option>
                  </select>
                  <br>


                <label for="">Cantidad</label>
                <input required maxlength="3" onkeypress="return valideKey(event);" id="cantidad" name="cantidad" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <br>
                
                <label for="">Valor</label>
                <input required maxlength="7" onkeypress="return valideKey(event);" id="valor" name="valor" class="form-control form-control-lg" type="text" placeholder="" tabindex="4">
                <br> 

                <label for="">Descripcion</label>
                <textarea required id="descripcion" name="descripcion" class="form-control form-control-lg" type="text" placeholder="" tabindex="5" maxlength="255"></textarea>
                <br>
                
                <label for="">Imagen Pequeña</label>
                <div class="input-group mb-3">
                <input type="file" name="imagen" id="imagen" accept="image/*" tabindex="6">
                </div>
                <span>Foto de perfil del producto en lo cart.</span> 
                <p>                  
                  Advertencia: Recuerda que las imagenes solo deben ser de dos tipos de 
                  formatos (PNG) y (JPG).
                  La medida estandar de la imagen es de 250px X 300px para una buena visualizacion.
                </p>

                <label for="">Imagen Grande</label>
                <div class="input-group mb-3">
                <input type="file" name="imagenGrande" id="imagenGrande" accept="image/*" tabindex="7">
                </div>
                <span>Foto para ver los detalles del producto.</span>
                <p>
                  Advertencia: Recuerda que las imagenes solo deben ser de dos tipos de 
                  formatos (PNG) y (JPG).
                  La medida estandar de la imagen es de 900px X 1024px para una buena visualizacion.
                </p>
               
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

