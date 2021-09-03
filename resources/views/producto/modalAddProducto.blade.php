<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <title>Agregar Producto</title>
</head>
<body>
<!-- MODAL DE AGREGAR PRODUCTO -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
                  $caracteres = "1234567890";
                  $desordenada = str_shuffle($caracteres);
                  $CH = substr($desordenada, 1, 4);
              ?>
        
        <form enctype="multipart/form-data" id="addProducto" name="addProducto" method="post">
        @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Codigo:</label>
            <input readonly type="text" value="<?php echo $CH?>" class="form-control" id="codigo" name="codigo" tabindex="1">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" tabindex="2">
            <span class="text-danger" id="nombreError"></span><br>
          </div>
          <div class="mb-3">
          <label for="">Categoria:</label>
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
                  <span class="text-danger" id="categoriaError"></span><br>
          </div>
          <div class="mb-3">
            <label for="">Color:</label>
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
                  <span class="text-danger" id="colorError"></span><br>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Cantidad:</label>
            <input  maxlength="3" onkeypress="return valideKey(event);" id="cantidad" name="cantidad" class="form-control form-control-lg" type="text" placeholder="" tabindex="5">
            <span class="text-danger" id="cantidadError"></span><br>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Valor:</label>
            <input  maxlength="7" onkeypress="return valideKey(event);" id="valor" name="valor" class="form-control form-control-lg" type="text" placeholder="" tabindex="6">
            <span class="text-danger" id="valorError"></span><br>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Descripcion:</label>
            <textarea  id="descripcion" name="descripcion" class="form-control form-control-lg" type="text" placeholder="" tabindex="7" maxlength="255"></textarea>
            <span class="text-danger" id="descripcionError"></span><br>
          </div>
          <label for="mb-3">Imagen Pequeña</label>
                <div class="input-group mb-3">
                <input type="file" name="imagen" id="imagen" accept="image/*" tabindex="8">
                </div>
                <span>Foto de perfil del producto en lo cart.</span> 
                <p>                  
                  Advertencia: Recuerda que las imagenes solo deben ser de dos tipos de 
                  formatos (PNG) y (JPG).
                  La medida estandar de la imagen es de 250px X 300px para una buena visualizacion.
                </p>
                <span class="text-danger" id="imagenError"></span><br>
                <label for="mb-3">Imagen Grande</label>
                <div class="input-group mb-3">
                <input type="file" name="imagenGrande" id="imagenGrande" accept="image/*" tabindex="9">
                </div>
                <span>Foto para ver los detalles del producto.</span>
                <p>
                  Advertencia: Recuerda que las imagenes solo deben ser de dos tipos de 
                  formatos (PNG) y (JPG).
                  La medida estandar de la imagen es de 900px X 1024px para una buena visualizacion.
                </p>
                <span class="text-danger" id="imagenGrandeError"></span><br>
                <!-- BLOQUE PARA MOSTRAR ERRORES -->
                
              
                    <span class="text-danger" id="nombreError"></span><br>
                    <span class="text-danger" id="cantidadError"></span><br>
                 

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" tabindex="11">Cerrar</button>
                  <button type="submit" id="guardar" class="btn btn-primary" tabindex="10">Guardar</button>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- FIN DE MODAL -->
</body>
<!-- /* Validaciones */ -->
<script src="/js/validacionNumero.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<!-- PETICION AJAX -->



<!-- Integracion de JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Fin de Integracion -->

</html>
