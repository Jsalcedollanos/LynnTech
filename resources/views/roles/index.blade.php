@extends('adminlte::page')

@section('title', 'Roles de usuarios | Lynda Polo')

@section('content_header')
<!-- CSS PERSONALIZADO PARA ADMIN -->
<link rel="stylesheet" href="/css/style-admin.css">
      <!-- FIN -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="/plugins/toastr/toastr.min.css">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <h1>Roles</h1>
@stop

@section('content')
    <p>Cuentas de usuarios.</p>

    <!-- Boton para guardar productos -->
<!-- <div class="card-body">
  <svg type="button" id="add" xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
  </svg>
  <br>
  <label for="" class="text-content">Agregar Usuario</label>
</div> -->
<!-- Fin de guardar productos -->

<!-- Tabla de productos -->
<table class="table table-dark table-striped" id="users">
  <thead>
    <tr>
      <th scope="col" >ID</th>
      <th scope="col" >Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Roll</th>
      <th scope="col">Fecha de creacion</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
</table>
  
<!-- Fin de tabla de productos -->

@include('roles.modalEditarUsuario')

@include('roles.modalEliminarUsuario')

@include('roles.modalAddUsuario')

@stop

@section('css')
    <script src="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
@stop

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Boostrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Fin Boostrap 5 -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


<script> 
/* Pedicion AJAX para mostrar productos en datable */
$(document).ready( function () { 
   var table = $('#users').DataTable({ 
        "processing": true, 

        "serverSide": true, 

        "ajax": "{{route('roles.index')}}", 

        "columns": [ 
  
            {data:'id'},

            {data:'name'},

            {data:'email'},

            {data:'role'},   

            {data:'created_at'},             
        
            {data:'id', "render": function (data) {
            return "<button id=\"" + data + "\" type=\"button\" name=\"btnEditar\" class=\"btnEditar btn btn-warning botonEditar\"><span class=\"material-icons\">edit</span></button>";
            }},

            {data:'id',  "render": function (data) {  
              /* aun no terminada! */
              if (table.rows()=="admin") {
                return  "<button disabled id=\"" + data + "\" type=\"button\" name=\"eliminar\" class=\"eliminar btn btn-warning\"> <span class=\"material-icons\">delete</span></button>" ;                   
              }else{
                return  "<button  id=\"" + data + "\" type=\"button\" name=\"eliminar\"  class=\"eliminar btn btn-warning\"> <span class=\"material-icons\">delete</span></button>" ;                   
              }       
                
            }},
            ]
});
  
 /* Bloque de Guardar usuario */
 /* $('#add').on('click',function(){
      $('#name').val("");
      $('#email').val("");
      $('#role').val("");
      $('#password').val("");

    $('#addModal').modal('show');
      $('#addUsuario').submit(function(e){
          e.preventDefault(); 
          $.ajax({               
            url: '{{route("roles.create")}}',
            type: "POST",
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },   
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
         
            success:function(data){
              
                setTimeout(function(){
                  $('#addModal').modal('hide');
                  toastr.success('El usuario se ha guardado satifactoriamente', 'Guardado!', {timeOut: 5000});
                  table.ajax.reload(); 
                }, 20);  
            },
            error:function(response){
              toastr.error('Opps Algunos errores no permiten guardar el usuario, Corrigelos!', 'Atencion', {timeOut: 10000});
              $('#nameError').text(response.responseJSON.errors.name);
              $('#emailError').text(response.responseJSON.errors.email);
              $('#roleError').text(response.responseJSON.errors.role); 
              $('#contraseñaError').text(response.responseJSON.errors.password); 
            }
        })
    });
});     */

/* Peticion AJAX Eliminar usuario */
var roll;
var id_usuario;

    $(document).on('click','.eliminar', function(){
        id_usuario = $(this).attr('id');
         $('#eliminarModal').modal('show');          
    });
    $('#btnEliminar').click(function(){
        $.ajax({
            url:"eliminar/"+id_usuario,      
            success:function(){
                setTimeout(function(){
                  toastr.success('El usuario se ha eliminado satifactoriamente', 'Atencion!', {timeOut: 5000});
                    $('#eliminarModal').modal('hide');
                    table.ajax.reload();
                }, 500);
            },
            error:function(response){
              toastr.error('No se pudo eliminar el usuario!','Atencion',{timeOut:5000});
            }
        });
    }); 
/* Fin de peticion AJAX eliminar usuario */


/* Peticion AJAX Editar Usuario */

$('#editarUsuario').submit(function(e){    
      e.preventDefault();
      var idU = $('#id').val();
      var nombreU = $('#editarNombre').val();
      var emailU = $('#editarEmail').val();
      var roleU = $('#editarRole').val();
    $.ajax({ 
        url : "update/"+idU,
        type : 'PUT',
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        typedata: 'json',
        data: {
          id:idU,
          name:nombreU,
          email:emailU,
          role:roleU,        
         },
         success:function(data){
                setTimeout(function(){
                  $('#editarModal').modal('hide');
                  toastr.success('El usuario se ha actualizado satifactoriamente', 'Atencion!', {timeOut: 5000});
                  table.ajax.reload();
                }, 200);
          },
          error:function(response){
            toastr.error('Opps Algunos errores no permiten actualizar el usuario, Corrigelos!', {timeOut: 5000});
            $('#editarNombreError').text(response.responseJSON.errors.name); 
            $('#editarEmailError').text(response.responseJSON.errors.email); 
            $('#editarRoleError').text(response.responseJSON.errors.role); 
          }
      })
  });
});
/* }); */
</script>

<script>
    let id_usu;
$(document).ready(function(){
    $(document).on('click','.btnEditar',function(){
        id_usu = $(this).attr('id');
            $.ajax({
                url:"editar/"+id_usu,
                type:'get',
            success:function(data){
                $('#id').val(data.id),
                $('#editarNombre').val(data.name),
                $('#editarEmail').val(data.email),
                $('#editarRole').val(data.role),
                $('#editarModal').modal('show');
			    }
            });
    });
    /* FIN DE LISTAR PRODUCTO VIA AJAX */
});   
</script>



@stop