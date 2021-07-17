<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LyndaPolo | Registro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/form.style.css">

        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
		</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="img/form-registro.png" alt="Fondo Formulario">
			</div>
			<div class="form-inner">
				<form action="{{ route('register') }}" method="POST">
                @csrf
					<div class="form-header">
						<h3>Registrate</h3>
						<img src="images/sign-up.png" alt="" class="sign-up-icon">
					</div>

                    <x-jet-validation-errors class="mb-4" />

					<div class="form-group">
						<label for="">Usuario:</label>
						<input required type="text" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12" id="name" name="name">
					</div>
					<div class="form-group">
						<label for="">Correo:</label>
						<input required type="email" class="form-control" data-validation="email" id="email" name="email">
					</div>
					<div class="form-group" >
						<label for="">Contraseña:</lsabel>
						<input required type="password" class="form-control" data-validation="length" id="password" name="password" data-validation-length="min8">
					</div>
                    <div class="form-group" >
						<label for="">Confirmar Contraseña:</label>
						<input required type="password" class="form-control" data-validation="length" id="password_confirmation" name="password_confirmation" data-validation-length="min8">
					</div>
					<button type="submit">Crear mi cuenta</button>
					<br>
					<div class="socials">
						<a href="{{route('login')}}">Ya tengo una cuenta!</a>
					</div>
					
					<div class="socials">
						<p>Siguenos en nuestras redes sociales</p>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-facebook"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-instagram"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-twitter"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-tumblr"></i>
						</a>
					</div>
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
				</form>
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>