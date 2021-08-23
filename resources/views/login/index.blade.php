
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login o Registrarme</h4>
          <form class="aa-login-form" method="POST" action="{{ route('login')}}">
          @csrf
            <label for="">Correo<span>*</span></label>
            <input type="text" name="email" placeholder="Correo">
            <label for="">Contraseña<span>*</span></label>
            <input type="password" name="password" placeholder="Contraseña" >
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Recuerdame </label>
            <p class="aa-lost-password"><a href="#">No recuerdo mi contraseña?</a></p>
            <div class="aa-register-now">
              No tienes una cuenta? ¿Eque esperas?<a href="{{route('register')}}">Registrarme</a>
            </div>
          </form>
        </div>                        
      </div>
    </div>
</div>  

