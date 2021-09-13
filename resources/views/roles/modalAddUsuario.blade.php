<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Usuario</title>
</head>
<body>
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="" id="id">

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" tabindex="1">
            <span class="text-danger" id="nameError"></span>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" tabindex="2">
            <span class="text-danger" id="emailError"></span>
          </div>
    
                <label for="">Roll:</label>
                    
                    <select id="role" name="role" class="form-control form-control-lg" tabindex="3">
                        <option value="user" >User</option>
                        <option value="admin" >Admin</option>
                    </select>
            <span class="text-danger" id="roleError"></span>
                  <br>
            

        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" tabindex="4">
            <span class="text-danger" id="contraseñaError"></span>
        </div>

        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Repite la contraseña:</label>
            <input type="password" class="form-control" id="password2" tabindex="5">
            <span class="text-danger" id="contraseñaError"></span>
        </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" tabindex="6">Cerrar</button>
            <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>