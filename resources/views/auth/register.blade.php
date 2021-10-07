<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Registrate | Lynda Polo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @livewireStyles
  </head>
  <body>
  
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
 <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Header section -->
  @include('layouts.header')
  <!-- /Header section -->

  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{ route('home.index') }}">Inicio</a></li>
              <li><a href="{{ route('tienda.index') }}">Todo los productos</a></li>
              <li><a>Vestidos <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="{{ route('tienda.index') }}?busqueda=Vestidos de lujo">Vestido de lujo</a></li>
                  <li><a href="{{ route('tienda.index') }}?busqueda=Vestido Sencillo">Vestido Sencillo</a></li>
                  </li>
                </ul>
              </li>
              <li><a>Batolas <span class="caret"></span></a>
              <ul class="dropdown-menu">                
                  <li><a href="{{ route('tienda.index') }}?busqueda=Batola lisa">Batola lisa</a></li>
                  <li><a href="{{ route('tienda.index') }}?busqueda=Batola Campana">Batola Campana</a></li>
                  </li>
                </ul>
              </li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Conjunto">Conjuntos</a></li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Mi muñeca y Yo">Mi muñeca y Yo</a></li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Tutu">Tutus</a></li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Accesorios">Accesorios</a></li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Lenceria Infantil">Lenceria Infantil</a></li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Calzado">Calzado</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
 
 <!-- Bloque de implementacion de livewire para validacion en tiempo real, se encuentra en ruta;
      VIEW>>LIVEWIRE>>FORM-REGISTER.BLADE.PHP donde se encuentra la plantilla....
      su controlador donde se establecen las rutas lo encontramos en: APP>>HTTP>>LIVEWIRE>>FORMREGISTER-->
      @livewire('form-register')  <!-- IMPLEMENTACION LIVEWIRE -->
  <!-- fin de este bloque -->

  <!-- Footer section -->
  @include('layouts.footer')
  <!-- /Footer section -->

  @include('error.modalErrorRegistro')

  <!-- Login Modal -->  
  @include('login.index')
  <!-- Fin de Modal de login -->
  
  <!-- Login Modal -->  
  @include('layouts.finalizarSesion')
  <!-- Fin de Modal de login -->

   <!-- Validacion REGISTRO  -->
   <script src="js/validacionRegistro.js"></script>
    
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
   
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>