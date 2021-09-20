<div>
     <!-- Cart view section -->

  
  
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                  
                <h4>Login</h4>    
               
        <!-- Validacion de jetstream -->
        <x-jet-validation-errors class=""  />
        <!-- Fin de validacion -->

				<!-- FORMULARIO DE LOGIN -->
          <form class="aa-login-form" method="POST" action="{{ route('login')}}">
          @csrf
              
                <label for="">Correo<span>*</span></label> <br>     
                <input wire:model="correo" type="email" class="form-control @error('correo') is-invalid @enderror" name="email" placeholder="Ingrese su correo">
                @error('correo') <span class="invalid-feedback">{{ $message }}</span> @enderror <br>
            
                <label for="">Contraseña<span>*</span></label> <br> 
                <input wire:model="contraseña_" type="password" name="password"  class="form-control @error('contraseña_') is-invalid @enderror" placeholder="Contraseña">
                @error('contraseña_') <span class="invalid-feedback">{{ $message }}</span> @enderror <br>                
                
                <button type="submit" class="aa-browse-btn">Login</button>
                <label class="rememberme" for="remembersme"><input type="checkbox" id="rememberme"> Recuerdame <span>!</span> </label>
                <p class="aa-lost-password"><a href="#">He olvidado mi contraseña?</a></p>
          </form>
                </div>
              </div>
		
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Registrate</h4>
                 <form action="{{ route('register') }}" method="POST" class="aa-login-form">
				        	@csrf
                    <label for="">Usuario<span>*</span></label>
                    <input wire:model="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="name" placeholder="Ejemplo 'Juan'" required>
                    @error('nombre') <span class="invalid-feedback">{{ $message }}</span> @enderror <br>
                    <label for="">Correo<span>*</span></label>            
                    <input wire:model="correo_" type="email"  class="form-control @error('correo_') is-invalid @enderror" name="email" placeholder="Ingresa tu correo" required>
                    @error('correo_') <span class="invalid-feedback">{{ $message }}</span> @enderror <br>
                    <label for="">Contraseña<span>*</span></label>
                    <input wire:model="contraseña" type="password" id="contraseña" name="password" class="form-control @error('contraseña') is-invalid @enderror" placeholder="Ingresa contraseña" required>
                    @error('contraseña') <span class="invalid-feedback">{{ $message }}</span> @enderror <br>
                    <label for="">Confirmar Contraseña<span>*</span></label>
                    <input wire:model="confirmar_contraseña" type="password" id="password_confirmation" name ="password_confirmation" class="form-control @error('confirmar_contraseña') is-invalid @enderror" placeholder="Repite contraseña" required>
                    @error('confirmar_contraseña') <span class="invalid-feedback">{{ $message }}</span> @enderror <br>
                    <button type="submit"  id="btn-registrar"  class="aa-browse-btn">Registrate</button>  

                    
					<!-- Validacion  -->
			@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
			<!-- Fin de la validacion -->
                  </form>
				  <!-- FIN DE FORMULARIO DE REGISTRO -->
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
</div>
