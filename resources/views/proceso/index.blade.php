<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Proceso de pago | Lynda Polo</title>
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
    <!-- Estilos proceso -->
    <link rel="stylesheet" href="css/proceso.style.css" type="text/css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
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
              <li><a href="{{ route('tienda.index') }}">Tienda</a></li>
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
    <img src="img/banner-paginas/banner-pagina.png" alt="Proceso de Compras">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Proceso de Compra</h2>
        <ol class="breadcrumb">
          <li><a href="/home">Inicio /</a></li>                   
          <li class="active">Proceso de Compra</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
 

<!-- Contenido proceso de compras -->
<section id="proceso">
    
        <div class="proceso-contenido-titulo">
            <h2 class="proceso-contenido-titulo-lynn">Proceso de Compra lyndaPolo.co (Canales por redes sociales)</h2>
        </div>
        <div class="proceso-contenido-parrafo">
        <span>1</span>
            <p class="proceso-contenido-parrafo-lynn">
                 Captura imagen de tu diseño y envianos via whatsapp con su talla, diseño textil
                 (Personaje) color y detalles. Con nuestra ayuda complementamos tu idea 
                 (No audio ni video llamada). Todo debidamente escrito. <br> <br>
                 Los precio de nuestros diseños estan publicados al pie de la publicacion
                 de nuestro post. Pero si al diseño le agregas mas detalles el precio puede aumentar.
            </p>
        </div>
        <div class="proceso-contenido-imagen">
                <img class="proceso-contenido-imagen-uno" src="/img/proceso/metodo-pago1.png" alt="">
        </div>
        
        <div class="proceso-contenido-parrafo2">
        <span>2</span>
            <p class="proceso-contenido-parrafo-lynn">
            Los precio de nuestros diseños estan publicados al pie de la publicacion de nuestro post. <br>
            Pero si al diseño le agregas mas detalles el precio puede aumentar.
            </p>
        </div>
        <div class="proceso-contenido-imagen2">
                <img class="proceso-contenido-imagen-dos" src="/img/proceso/metodo-pago2.png" alt="">
        </div>

        <div class="proceso-contenido-parrafo3">
        <span>3</span>
            <p class="proceso-contenido-parrafo-lynn">
            Si vas a realizar un cambio a tu diseño debes enviarnos nuevamente el pedido organizado desde cero.
            </p>
        </div>  

        <div class="proceso-contenido-parrafo4">
        <span>4</span>
            <p class="proceso-contenido-parrafo-lynn">
            Recuerda que no puedes pagar sin confirmar la disponibilidad de nuestros insumos.
            </p>
        </div> 
        
        <div class="proceso-contenido-titulo2"> 
            <h2 class="proceso-contenido-titulo-lynn2">Metodos de pago (Por canales de redes sociales)</h2>
        </div>

        <div class="proceso-contenido-bancolombia">
            <p class="proceso-contenido-bancolombia-p"><span>1. </span>Evita errores escaneando nuestro codigo QR de nuestra cuenta Bancaria:</p>
        </div>

        <div class="proceso-contenido-bancolombia-qr">
          <img class="img-qr" src="img/proceso/qr.jpg" alt="Codigo QR Bancolombia">
            <p>Aceptamos los siguientes metodos de pagos:</p>
        </div>

        <div class="proceso-contenido-metodos-pago">
          <div class="bancolombia">
            <img class="img-qr" src="img/proceso/logo-bancolombia.png" alt="Logo Bancolombia">
          </div>
          <div class="nequi">
            <img src="img/proceso/logo-nequi.png" alt="Logo Nequi">
          </div>
          <div class="efecty">
            <img src="img/proceso/logo-efecty.png" alt="Logo Efecty">
          </div>
          <div class="supergiro">
            <img src="img/proceso/logo-supergiros.png" alt="Logo superGiros">
          </div>
          <div class="baloto">
            <img src="img/proceso/logo-baloto.png" alt="Logo Baloto">
          </div>
        </div>

        
</section>


  <!-- Footer section -->
  @include('layouts.footer')
  <!-- /Footer section -->
      

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