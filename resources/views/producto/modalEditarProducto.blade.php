<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <title>Editar Producto</title>
</head>

<body>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="editProducto" name="editProducto" enctype="multipart/form-data">
          @csrf
          
              <label for="">ID Producto:</label>
              <input type="text" readonly value="" id="id" name="id"  class="form-control form-control-lg">
              <br>
                <label for="">Nombre</label>
                <input required id="editNombre" name="editNombre"  class="form-control form-control-lg" type="text" placeholder="" tabindex="2">
                <br>

                  
                  <label for="">Categoria</label>
                  <select name="editCategoria" id="editCategoria" class="form-control form-control-lg" tabindex="3">
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
                <select name="editColor" id="editColor" class="form-control form-control-lg" tabindex="4">
                  <option value="Rojo" >Rojo</option>
                  <option value="Azul" >Azul</option>
                  <option value="Amarillo" >Amarillo</option>
                  <option value="Vinotinto" >Vinotinto</option>
                  <option value="Verde" >Verde</option>
                  <option value="Negro" >Negro</option>
                  <option value="Blanco" >Blanco</option>
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
                <input required maxlength="3" onkeypress="return valideKey(event);" id="editCantidad" name="editCantidad" value="" class="form-control form-control-lg" type="text" placeholder="" tabindex="3">
                <br>
                
                <label for="">Valor</label>
                <input required maxlength="7" onkeypress="return valideKey(event);" id="editValor" name="editValor" value="" class="form-control form-control-lg" type="text" placeholder="" tabindex="4">
                <br> 

                <label for="">Descripcion</label>
                <textarea required id="editDescripcion" name="editDescripcion" class="form-control form-control-lg" type="text" value=""  placeholder="" tabindex="5" ></textarea>
                <br>
             
          </div>

                <div class="card-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button  type="submit" class="btn btn-primary" tabindex="5">Actualizar</button>   
                </div>

              </form>
            </div>
</body>
<!-- /* Validaciones */ -->
<script src="/js/validacionNumero.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>
