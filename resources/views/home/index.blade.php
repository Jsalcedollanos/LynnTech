<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Lyndapolo | Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Wompis de Bancolombia -->
    <!-- <script type="text/javascript" src="https://checkout.wompi.co/widget.js"></script> -->

    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Estilos de card de anuncios -->   
    <link href="css/card.style.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">  
    <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>  
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">

    <!-- FUENTE MERIENDA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
    <!-- FIN DE LA FUENTE -->
    <!-- visual descargado por web -->
  

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
              <li><a href="{{ route('tienda.index') }}">Tienda</a></li>
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




  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
             
             <li>
              <div class="seq-model">
                <img data-seq src="img/slider/banner5.png" alt="Trabajo" />
              </div>
              <div class="seq-title">
               <span data-seq>Alta Costura</span>                
                <h2 data-seq>Vestido Alicia el pais de las maravillas</h2>                
                <p data-seq>Vestido tematico de alicia el pais de las maravillas.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Comprar ahora</a>
              </div>
            </li> 
         
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/banner1.png" alt="Men slide img" />
              </div>
              <div class="seq-title">
               <span data-seq>Alta Costura</span>                
                <h2 data-seq>Vestido Sirena</h2>                
                <p data-seq>Vestido de lujo con hermosos accesorios cargado de amor!.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Comprar ahora</a>
              </div>
            </li>
         
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/banner2.png" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Alta Costura</span>                
                <h2 data-seq>Vestido Cielo</h2>                
                <p data-seq>Vestido Cielo perfecto para un hermosa angelita</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Comprar Ahora</a>
              </div>
            </li>
            
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/banner3.png" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Alta Costura</span>                
                <h2 data-seq>Vestido Esmeralda</h2>                
                <p data-seq>Convierte a tu princesa en una elegante esmeralda echo vestido.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Comprar ahora</a>
              </div>
            </li>
                      
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/banner4.png" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Alta Costura</span>                
                <h2 data-seq>Vestido Flor de otoño</h2>                
                <p data-seq>Hecho para una dulce princesa de primavera</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Comprar ahora</a>
              </div>
            </li>
                             
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="img/vestido-tematico.jpg" alt="Vestido Tematico">                    
                    <div class="aa-prom-content">
                      <h4><a href="{{ route('tienda.index') }}?busqueda=Vestido tematico">Vestido Tematico</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/tutu.jpg" alt="Tutu">                      
                      <div class="aa-prom-content">
                        <h4><a href="{{route('tienda.index')}}?busqueda=Tutus">Tutus</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-calzado.png" alt="img">                      
                      <div class="aa-prom-content">
                        <h4><a href="{{route('tienda.index')}}?busqueda=Calzado">Calzado</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-batola.png" alt="img">                      
                      <div class="aa-prom-content">
                        <h4><a href="{{route('tienda.index')}}?busqueda=Batolas">Batolas</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-muñecas.png" alt="img">                      
                      <div class="aa-prom-content">
                        <h4><a href="{{route('tienda.index')}}?busqueda=Muñecas">Muñecas</a></h4>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#masvendido" data-toggle="tab">Mas vendidos</a></li>
                <li><a href="#popular" data-toggle="tab">Populares</a></li>
                <li><a href="#lujo" data-toggle="tab">Linea de lujo</a></li>                    
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="masvendido">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                     <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      </figure>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                        <span class="aa-product-price">$45.50</span>
                      </figcaption>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li>    
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li> 
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>                                                                                   
                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular product category -->
                
                <!-- start featured product category -->
                <div class="tab-pane fade" id="popular">
                 <ul class="aa-product-catg aa-featured-slider">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                     <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      </figure>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                        <span class="aa-product-price">$45.50</span>
                      </figcaption>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                      
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li>    
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li> 
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>                                                                                   
                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / featured product category -->

                <!-- Seccion de Linea de Lujo -->
                <!-- start latest product category -->
                <div class="tab-pane fade" id="lujo">
                  <ul class="aa-product-catg aa-latest-slider">
                    <!-- start single product item -->
                    @foreach ($productos as $producto)                  
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="{{asset($producto->imagen)}}" alt="{{$producto->nombre}}"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Agregar al Carrito</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$producto->nombre}}</a></h4>
                          <span class="aa-product-price">{{$producto->valor}}</span><span class="aa-product-price"><del>{{$producto->descuento}}</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">{{$producto->etiqueta}}</span>
                    </li>
                    <!-- @endforeach --> 
                <!-- / latest product category -->              
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->

  <!-- SECCION DE PUBLICIDAD -->
  <section id="aa-publicidad">
    <div class="aa-publicidad-contenedor">
      <div id="card1" class="card mb-3">
          <div class="row g-0">
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title">Linea de lujo LyndaPolo.co</h5>
                <p class="card-text">
                  Cuando requieras algo de buena calidad, no piences en el precio, piensa en su calidad y lo diferente
                  que va ser tu producto, en LyndaPolo.co nos encargamos de llevar tu prenda a otro nivel, garantizandote calidad, durabilidad
                  y lo mas importante el producto es 100% echo por nuestro propio taller de confeccion. <br><br>
                  - Contamos con maquinaria profesional para brindar un producto de excelente calidad. <br><br>
                  - Nuestra linea de lujo es exclusiva. Detallada y sobre todo sus accesorios son acorde a los lujos que lleva el vestido.
                </p>
                  
              </div>
              <button>Cotiza tu vestido YA!</button>
            </div>
                  <div class="col-md-4">
                    <img src="/img/anuncios/vestido-flores.jpeg" class="img-fluid rounded-start" alt="Vestido de princesas de disney esclusivo">
                  </div>
          </div>
        </div>
      </div>
       



      <div id="card1" class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="/img/anuncios/vestido-princesa-disney.jpeg" class="img-fluid rounded-start" alt="Vestido de princesas de disney esclusivo">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title">Vestidos tematicos exclusivos LyndaPolo.co</h5>
                <p class="card-text">Nuestros productos son 100% propios, diseñados con tela de excelente calidad. diseño de artes textiles a su gusto. <br><br>
                  - Contamos con maquinaria profesional para brindar un producto de excelente calidad. <br><br>
                  - Los vestidos y demas prendas de vestir son planchados a vapor, para poder llegar a una textura fina libre de contaminacion.
                </p>
                <div id="contenido-logo"> 
                  <img id="logolynda" src="/img/anuncios/logolynda.png" class="img-fluid rounded-start" alt="Lyndapolo.co">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    

        <div id="card2" class="card mb-3">
          <div class="row g-0">
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title">Como tomar medidas </h3>
                <p class="card-text"> <h4>Busto:</h4>Gira alrededor con la cinta metrica a la altura del pecho sin apretar.
                                      <h4>Cintura:</h4>Gira alrededor con la cinta metrica en el abdomen por la altura del ombligo sin apretar. <br>
                                      <h4>Altura de talle:</h4>Verticalmente desde el hombro hasta arriba del ombligo
                                      <h4>Largo de vestido:</h4>Verticalmente desde el hombro hasta el largo deseado.</p>
              </div>
            </div>
            <div class="col-md-4">
              <img src="/img/anuncios/tallas.png" class="img-fluid rounded-start" alt="...">
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- FIN DE SECCION DE PUBLICIDAD -->

  <!-- banner section -->
 <!--  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">        
          <div class="row">
            <div class="aa-banner-area">
            <a href="#"><img src="img/banner-oferta.png" alt="fashion banner img"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- popular section -->

  
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>Envios Nacionales e Internacionales</h4>
                <P>Te enviamos por los mejores medios de envios nacionales e internacionales.</P>
                  <img id="logointer" src="/img/anuncios/logo-interrapidisimo.png" alt="Interrapidisimo">
                  <img id="logo-servientrega" src="/img/anuncios/logo-servientrega.png" alt="Servientrega">                  
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>Elaboramos tu producto de 8 - 12 Dias</h4>
                <P>Trabajamos para ti en tiempo record, si lo necesitas para YA! Contactanos
                Linea de venta: 
                <img class="aa-qr" src="/img/QRwhatsapp.png" alt="">
                <p>Escanea el codigo para contactarte con nosotros.</p>
                <p>Linea de ventas: +57 3003746338</p>
                </P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>Soporte de Lunes a Sabado</h4>
                <P>Te atendemos en cualquier momento, no dudes en contactarnos.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/biografia-perfil.png" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Mi pasion es diseñar, regalar alegria y felicidad realizando diseños unicos para cada ocacion. mi lema es "Si se confecciona que sea de excelente calidad".</p>
                  <div class="aa-testimonial-info">
                    <p>Lynda Polo</p>
                    <span>Diseñadora de moda</span>
                    <span>Diseñadora y Patronista Industrial</span>
                    <a href="https://www.facebook.com/lyndapoloc">Facebook Personal</a>
                  </div>
                </div>
              </li>
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/testimonial-img-1.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>KEVIN MEYER</p>
                    <span>CEO</span>
                    <a href="#">Alphabet</a>
                  </div>
                </div>
              </li>
               <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/testimonial-img-3.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>Luner</p>
                    <span>COO</span>
                    <a href="#">Kinatic Solution</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->

  <!-- Latest Blog -->
  <!-- <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>Videos Tutoriales</h2>
            <div class="row">
             
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/bnaSHYUGqnw?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Top Cruzado | Lynda Polo </a></h3>
                    <p>♥Hola! soy Lynda , espero que con este y mis demás de mis videos tutoriales puedan hacer sus Croptop, faldas, y demás Costura fácil.
                        ♥♥♥Hazlo tu misma♥♥♥
                        paso a paso fácil,
                        medidas  corte y confección.
                        RECUERDA COMPARTIR Y SUBSCRIBIRTE.
                        </p>
                    <a href="https://www.facebook.com/groups/21831..."class="aa-read-mor-btn">Has clic aqui y unete a mi grupo de Facebook<span class="fa fa-long-arrow-right"></span></a> <br>
                    <a href="https://www.instagram.com/lyndapolo.co/" class="aa-read-mor-btn">Has clic aqui y Sigueme en Instagram <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/8u8XgMkDidY?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Cropt Top Sirena | Lynda Polo </a></h3>
                    <p>♥Hola! soy Lynda ,  espero que con este y mis demás de mis videos tutoriales puedan hacer sus Croptop, faldas, y demás Costura fácil.
                        ♥♥♥Hazlo tu misma♥♥♥
                        paso a paso fácil,
                        medidas  corte y confección.
                        RECUERDA COMPARTIR Y SUBSCRIBIRTE.</p> 
                    <a href="https://www.facebook.com/groups/21831..."class="aa-read-mor-btn">Has clic aqui y unete a mi grupo de Facebook<span class="fa fa-long-arrow-right"></span></a> <br>
                    <a href="https://www.instagram.com/lyndapolo.co/" class="aa-read-mor-btn">Has clic aqui y Sigueme en Instagram <span class="fa fa-long-arrow-right"></span></a>       
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/QX5V6YRlU8o?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#">Croptop Deportivo | Lynda Polo</a></h3>
                    <p>♥Hola! soy Lynda ,  espero que con este y mis demás de mis videos tutoriales puedan hacer sus Croptop, faldas, y demás Costura fácil.
                        ♥♥♥Hazlo tu misma♥♥♥
                        paso a paso fácil,
                        medidas  corte y confección.
                        RECUERDA COMPARTIR Y SUBSCRIBIRTE.</p> 
                        <a href="https://www.facebook.com/groups/21831..."class="aa-read-mor-btn">Has clic aqui y unete a mi grupo de Facebook<span class="fa fa-long-arrow-right"></span></a> <br>
                        <a href="https://www.instagram.com/lyndapolo.co/" class="aa-read-mor-btn">Has clic aqui y Sigueme en Instagram <span class="fa fa-long-arrow-right"></span></a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section> -->
  <!-- / Latest Blog -->

  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <!-- EDICION POR TERMINAR -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->

  <!-- Footer section -->
  @include('layouts.footer')
  <!-- /Footer section -->

  <!-- Modal de login -->
  @livewire('form-login')
  <!-- Login Modal -->  
  @include('layouts.finalizarSesion')
  <!-- Fin de Modal de login -->

      


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


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->


  @livewireScripts
  </body>
</html>