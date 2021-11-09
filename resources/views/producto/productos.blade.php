<!DOCTYPE html>
<html lang="es">
  <head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Lynda Polo | Productos</title>
    
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
  <!-- !Important notice -->
  <!-- Only for product page body tag have to added .productPage class -->
  <body class="productPage">  
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Lynda Polo</span>
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
              <li><a href="/proceso">Proceso de Compra</a></li>
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
   <img src="img/banner-paginas/banner-pagina.png" alt="Productos LyndaPolo.co">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2> Productos Lynda Polo</h2>
        <ol class="breadcrumb">
          <li><a href="/home">Inicio</a></li>         
          <li class="active">Productos</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                <div class="container-fluid">
                </div>
                
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span> Vista Normal</a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span> Vista Completa</a>
              </div>
            </div>


        <!-- Card de producto -->
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
                  @foreach ($productos as $producto)
                  @if ($producto->categoria='busqueda')

                <li>
                  <figure>
                    <a class="aa-product-img" href="#"><img src="{{asset($producto->imagen)}}" alt="{{$producto->nombre}}"></a>
                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Agregar al carrito</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#">{{$producto->nombre}}</a></h4>
                      <span class="aa-product-price">Valor: ${{$producto->valor}}</span><br>
                      <span class="aa-product-price">Descuento: ${{$producto->descuento}}</span>
                      <p class="aa-product-descrip">{{$producto->descripcion}}</p>
                      <p class="aa-product-descrip">Categoria: {{$producto->categoria}}</p>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Agregar a lista de deseo"><span class="fa fa-heart-o"></span></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comparar"><span class="fa fa-exchange"></span></a>
                    <a data-toggle2="tooltip" data-placement="top" title="Vista Rapida" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>

                  </div>
                  <!-- product badge -->
                  <span class="aa-badge aa-sale">{{$producto->etiqueta}}</span>
                </li>
                @endif
            
                @endforeach
            </ul>
            @csrf
            @foreach ($productos as $producto)
                 <!-- quick view modal -->
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">                      
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <div class="row">

                        <!-- Modal view slider -->
                        <div class="col-md-6 col-sm-6 col-xs-12">                              
                          <div class="aa-product-view-slider">                                
                            <div class="simpleLens-gallery-container" id="demo-1">
                              <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                      <a class="simpleLens-lens-image" data-lens-image="{{asset($producto->imagenGrande)}}">
                                          <img src="{{asset($producto->imagen)}}" class="simpleLens-big-image">
                                      </a>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal view content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-content">
                            <h3>{{($producto->nombre)}}</h3>
                            <div class="aa-price-block">
                              <span class="aa-product-view-price">$ {{($producto->valor)}}COP </span>
                              <p class="aa-product-avilability">Disponible: <span>Sobre pedido</span></p>
                            </div>
                            <p class="aa-product-avilability">Color: <span>{{$producto->color}}</span></p>
                            <p>{{($producto->descripcion)}}</p> 
                            <h4>Size</h4>
                            <div class="aa-prod-view-size">
                              <a href="#">Talla 16 meses</a>
                              <a href="#">Talla 2</a>
                              <a href="#">Talla 4</a>
                              <a href="#">Talla 6</a>
                              <a href="#">Talla 8</a>
                              <a href="#">Talla 10</a>
                            </div>
                            <div class="aa-prod-quantity">
                              <form action="">
                              <h4>Cantidad</h4>
                                <select name="" id="">
                                  <option value="1" selected="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                </select>
                              </form>
                              <p class="aa-prod-category">
                                Categoria: <a href="#">{{$producto->categoria}}</a>
                              </p>
                            </div>
                            <div class="aa-prod-view-bottom">
                              <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Agregar al Carrito</a>
                              <a href="#" class="aa-add-to-cart-btn">Ver detalles</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                        
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div> <!-- / quick view modal -->
            @endforeach

            </div>
            <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
        <form class="d-flex">
            <div class="aa-sidebar-widget">
              <h3>Categorias</h3>            
              <ul class="aa-catg-nav">
                
                    <li><a href="{{ route('tienda.index') }}?busqueda=Vestido de Lujo" name="busqueda">Vestido de Lujo</a></li>
                    <li><a href="{{ route('tienda.index') }}?busqueda=Vestido Tematico" name="busqueda">Vestido Tematico</a></li>
                    <li><a href="{{ route('tienda.index') }}?busqueda=Vestido Sencillo" name="busqueda">Vestido Sencillo</a></li>
                    <li><a href="{{ route('tienda.index') }}?busqueda=Vestido primera comunion" name="busqueda">Vestido primera comunion</a></li>
                    <li><a href="{{ route('tienda.index') }}?busqueda=Vestido Bautizo" name="busqueda">Vestido Bautizo</a></li>
                    <li><a href="{{ route('tienda.index') }}?busqueda=Tutu" name="busqueda">Tutu</a></li>
                    <li><a href="{{ route('tienda.index') }}?busqueda=Conjunto" name="busqueda">Conjunto</a></li>
                    <li><a href="{{ route('tienda.index') }}?busqueda=Batola" name="busqueda">Batola</a></li>
                    <li><a href="{{ route('tienda.index') }}?busqueda=Lenceria Infantil" name="busqueda">Lenceria Infantil</a></li>
                    <li><a href="{{ route('tienda.index') }}?busqueda=Muñeca" name="busqueda">Muñeca</a></li>
                    <li><a href="{{ route('tienda.index') }}?busqueda=Calzado" name="busqueda">Calzado</a></li>
                    <li><a href="{{ route('tienda.index') }}?busqueda=Accesorio" name="busqueda">Accesorio</a></li>

              </ul>
            </div>
        </form>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Como tomar medidas</h3>
              <div class="tag-cloud">
                <a href="#">Guia Facil</a>
              </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Filtro de Precio</h3>              
              <!-- price range -->
              <div class="aa-sidebar-price-range">
               <form action="">
                  <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>
                  <span id="skip-value-lower" class="example-val">30.00</span>
                 <span id="skip-value-upper" class="example-val">200.00</span>
                 <button class="aa-filter-btn" type="submit">Buscar</button>
               </form>
              </div>              

            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Filtro de color</h3>
              <div class="aa-color-tag">
                <a class="aa-color-green" href="#"></a>
                <a class="aa-color-yellow" href="#"></a>
                <a class="aa-color-pink" href="#"></a>
                <a class="aa-color-purple" href="#"></a>
                <a class="aa-color-blue" href="#"></a>
                <a class="aa-color-orange" href="#"></a>
                <a class="aa-color-gray" href="#"></a>
                <a class="aa-color-black" href="#"></a>
                <a class="aa-color-white" href="#"></a>
                <a class="aa-color-cyan" href="#"></a>
                <a class="aa-color-olive" href="#"></a>
                <a class="aa-color-orchid" href="#"></a>
              </div>                            
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Vistos Recientemente</h3>
              <div class="aa-recently-views">
                <ul>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="mohana" src="img/vistos-recientemente/mohana.png"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Conjunto Mohana</a></h4>
                      <p>$90.000</p>
                    </div>                    
                  </li>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="vestido esmeralda" src="img/vistos-recientemente/vestido-esmeralda.png"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Vestido Esmeralda</a></h4>
                      <p>$240.000</p>
                    </div>                    
                  </li>
                   <li>
                    <a href="#" class="aa-cartbox-img"><img alt="muñeca de lujo" src="img/vistos-recientemente/muñeca.png"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Muñeca de lujo</a></h4>
                      <p>$100.000</p>
                    </div>                    
                  </li>                                      
                </ul>
              </div>                            
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Top de productos</h3>
              <div class="aa-recently-views">
                <ul>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="Vestido Sirena" src="img/top-productos/vestido-sirena.png"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Vestido Sirena</a></h4>
                      <p>$220.000</p>
                    </div>                    
                  </li>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="Vestido Pajesita" src="img/top-productos/vestido-pajesita.png"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Vestido Primera Comunion</a></h4>
                      <p>$160.000</p>
                    </div>                    
                  </li>
                   <li>
                    <a href="#" class="aa-cartbox-img"><img alt="vestido flor de otoño" src="img/top-productos/vestido-rosa.png"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Vestido Flor de Otoño</a></h4>
                      <p>$220.000</p>
                    </div>                    
                  </li>                                      
                </ul>
              </div>                            
            </div>
          </aside>
        </div>
       
      </div>
    </div>
  </section>
  <!-- / product category -->

  <!-- Footer section -->
  @include('layouts.footer')
  <!-- /Footer section -->

 <!-- Login Modal -->  
 @include('layouts.finalizarSesion')
  <!-- Fin de Modal de login -->

  <!-- Modal de login -->
  @livewire('form-login')
  <!-- fin del modal de login -->
  
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
  
  
  <script>
        $(document).ready(function(){
        $.ajax({
          url: '/tienda/all',
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
          method: 'GET',
          dataType
        }).done(function(response){
            var arreglo = JSON.parse(response);
            console.log('aqui entre');
            for(var x=0;x<arreglo.lenght;x++){
              console.log(arreglo);
            }
    }); 
    });
  </script>
  @livewireScripts
  </body>
</html>