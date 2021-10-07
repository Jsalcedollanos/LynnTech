<!-- Cerrar Sesion Modal -->  
<div class="modal fade" id="sesion-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Salir de mi cuenta</h4>
            <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
              <p>Estas de acuerdo de cerrar sesion de tu cuenta?</p>                
                    @csrf
                  <x-jet-dropdown-link href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                      {{ __('Si') }}
                      
                  </x-jet-dropdown-link>
              </form>
              
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>