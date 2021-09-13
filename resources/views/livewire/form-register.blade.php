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
      <!-- <div class="alert alert-danger" role="alert" id="alerta">
        <x-jet-validation-errors class="mb-4" />
      </div> -->
				<!-- FORMULARIO DE LOGIN -->
          <form class="aa-login-form" method="POST" action="{{ route('login')}}">
          @csrf
              
                <label for="">Correo<span>*</span></label> <br>     
                
                <input wire:model="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Ingrese su correo">
                @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror <br>
            
                <label for="">Contraseña<span>*</span></label> <br> 
                <input wire:model="password" type="password" name="password"  class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña">
                @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror <br>
                
                <button type="submit" class="aa-browse-btn">Login</button>
                <label class="rememberme" for="remembersme"><input type="checkbox" id="rememberme"> Recuerdame <span>!</span> </label>
                <p class="aa-lost-password"><a href="#">He olvidado mi contraseña?</a></p>
          </form>
                </div>
              </div>
				<!-- FIN DE FORMULARIO DE LOGIN -->

			  <!-- FORMULARIO DE REGISTRO -->
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Registrate</h4>
                 <form action="{{ route('register') }}" method="POST" class="aa-login-form">
				        	@csrf
                    <label for="">Usuario<span>*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Ejemplo 'Juan'" required>
                    <label for="">Correo<span>*</span></label>
                    
                    <input type="email"  class="form-control" name="email" placeholder="Ingresa tu correo" required>
                    <label for="">Contraseña<span>*</span></label>
                    
                    <input type="password" id="pass1" name="password" class="form-control" placeholder="Ingresa contraseña" required>
                    <input type="password" id="pass2" name ="password_confirmation" class="form-control" placeholder="Repite contraseña" required>
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
