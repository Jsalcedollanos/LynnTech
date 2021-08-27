<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar Factura</title>
</head>
<body>
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Factura</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-factura" name="form-factura">
        @csrf
    <!--     <?php
                  $caracteres = "1234567890";
                  $desordenada = str_shuffle($caracteres);
                  $CH = substr($desordenada, 1, 4);
              ?> -->
              
                <label for="">N°Factura</label>
                <input value="<?php echo $CH ?>" readonly id="editarFactura" name="editarFactura" class="form-control form-control-lg" type="number" min="0" placeholder="" tabindex="1">
                <br>
                
                <label for="">Cedula</label>
                    
                <input required maxlength="11" onkeypress='return validaNumericos(event)' id="editarCedula" name="editarCedula" class="form-control form-control-lg" type="text" min="0" placeholder="" tabindex="2">
                <br>

                <label for="">Nombres</label>
                <input required maxlength="20" id="editarNombres" name="editarNombres" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <br>

                <label for="">apellidos</label>
                <input required maxlength="25" id="editarApellidos" name="editarApellidos" class="form-control form-control-lg" type="text" placeholder="" tabindex="4">
                <br>

                <label for="">telefono</label>
                <input required maxlength="10" onkeypress='return validaNumericos(event)' required id="editarTelefono" name="editarTelefono" class="form-control form-control-lg" type="text" min="0" placeholder="" tabindex="5">
                <br>

                <label for="">direccion</label>
                <input required maxlength="40" id="editarDireccion" name="editarDireccion" class="form-control form-control-lg" type="text" placeholder="" tabindex="6">
                <br>

                <label for="">valor</label>
                <input required maxlength="7" onkeypress="return valideKey(event);" id="editarValor" name="editarValor" class="form-control form-control-lg" type="text" placeholder="" tabindex="7">
                <br>

                  </div>
                  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
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