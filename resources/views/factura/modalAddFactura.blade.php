<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="modal fade" id="facturaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Factura</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form id="form-factura" name="form-factura" method="post">
        @csrf
        <?php
                  $caracteres = "1234567890";
                  $desordenada = str_shuffle($caracteres);
                  $CH = substr($desordenada, 1, 4);
              ?>
              
                <label for="">Factura:</label>
                <input value="<?php echo $CH ?>" readonly id="nfactura" name="nfactura" class="form-control form-control-lg" type="number" min="0" placeholder="" tabindex="1">
                <br>
                
                <label for="">Cedula:</label>
                    
                <input  maxlength="11" onkeypress='return validaNumericos(event)' id="cedula" name="cedula" class="form-control form-control-lg" type="text" min="0" placeholder="" tabindex="2">
                <span class="text-danger" id="cedulaError"></span><br>
                <br>

                <label for="">Nombres:</label>
                <input  maxlength="20" id="nombres" name="nombres" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <span class="text-danger" id="nombresError"></span><br>
                <br>

                <label for="">Apellidos:</label>
                <input  maxlength="25" id="apellidos" name="apellidos" class="form-control form-control-lg" type="text" placeholder="" tabindex="4">
                <span class="text-danger" id="apellidosError"></span><br>
                <br>

                <label for="">Telefono:</label>
                <input  maxlength="10" onkeypress='return validaNumericos(event)'  id="telefono" name="telefono" class="form-control form-control-lg" type="text" min="0" placeholder="" tabindex="5">
                <span class="text-danger" id="telefonoError"></span><br>
                <br>

                <label for="">Direccion:</label>
                <input  maxlength="40" id="direccion" name="direccion" class="form-control form-control-lg" type="text" placeholder="" tabindex="6">
                <span class="text-danger" id="direccionError"></span><br>
                <br>

                <label for="">Valor:</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">$</span>
                    <input  maxlength="7" onkeypress="return valideKey(event);" id="valor" name="valor" class="form-control" type="text" placeholder="" tabindex="7">
                </div>
                <span class="text-danger" id="valorError"></span><br>
                <br>

                  </div>
                  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
        </form>
      </div>
      
  </div>
</div>
</body>


<script src="/js/validacionNumero.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</html>