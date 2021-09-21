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
        <form id="editFactura" name="editFactura">
        @csrf
              
              <input type="hidden" readonly value="" id="id" name="id"  class="form-control form-control-lg">
              <br>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">N°Factura</span>
                <input value="" readonly id="editarFactura" name="editarFactura" class="form-control form-control-lg" type="number" min="0" placeholder="" tabindex="1">
                <br>
              </div> 
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Codigo de producto</span>
                <input type="number" name="editarCodigo" id="editarCodigo" class="form-control form-control-lg" placeholder="">
              </div>
              <span class="text-danger" id="editarCodigoError"></span>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Cedula</span>    
                <input  maxlength="11" onkeypress='return validaNumericos(event)' id="editarCedula" name="editarCedula" class="form-control form-control-lg" type="text" min="0" placeholder="" tabindex="2">
              </div>
              <span class="text-danger" id="editarCedulaError"></span>

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Nombres</span>   
                <input  maxlength="20" id="editarNombres" name="editarNombres" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <span class="text-danger" id="editarNombresError"></span>
                <span class="input-group-text" id="basic-addon2">Apellidos</span>           
                <input  maxlength="25" id="editarApellidos" name="editarApellidos" class="form-control form-control-lg" type="text" placeholder="" tabindex="4">
              </div>
              <span class="text-danger" id="editarApellidosError"></span>
              
              <div class="input-group mb-3">     
                <span class="input-group-text" id="basic-addon2">Telefono</span> 
                <input  maxlength="10" onkeypress='return validaNumericos(event)' id="editarTelefono" name="editarTelefono" class="form-control form-control-lg" type="text" min="0" placeholder="" tabindex="5">
                <span class="input-group-text" id="basic-addon2">Direccion</span>
                <input  maxlength="40" id="editarDireccion" name="editarDireccion" class="form-control form-control-lg" type="text" placeholder="" tabindex="6">
              </div>
              <span class="text-danger" id="editarDireccionError"></span><br>
              <span class="text-danger" id="editarTelefonoError"></span>
              
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">$COP</span>
                <input  maxlength="7" onkeypress="return valideKey(event);" id="editValor" name="editValor" class="form-control" type="text" placeholder="" tabindex="7">
              </div>
              <span class="text-danger" id="editarValorError"></span>

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
<script src="/js/validacionNumero.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</html>