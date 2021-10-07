  <!-- Start header section -->
  <header id="aa-header">
    <div class="aa-header-oferta">
      <li><a href="">Por compras superiores a $250.000 envios gratis, aplica solo para Colombia</a></li>
    </div>
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <!-- <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="img/flag/english.jpg" alt="english flag">Cambiar Idioma
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="img/flag/french.jpg" alt=""></a></li>
                      <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div> -->
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>Convertir Moneda
                      
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-cop"></i>COP (Pesos Colombianos)</a></li>
                      <li><a href="#"><i class="fa fa-jpy"></i>USD (Dolares)</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>+57 3013163026</p>
                </div>
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>+57 3158160180</p>
                </div>
                <!-- / cellphone -->
              </div>

              <!-- / header con validacion de session + funciones addicionales -->
          @if (auth()->check()) 
              @if(Auth::user()->role =="user")
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
               
                  <li><a>Hola, {{Auth::user()->name}} un gusto saludarte.</a></li>            
                  <li class="hidden-xs"><a href="#">Lista de deseo</a></li>
                  <li class="hidden-xs"><a href="{{ route('carrito.index') }}">Mi Carrito</a></li>
                  <li><a href="" data-toggle="modal" data-target="#sesion-modal">Salir</a></li>
                </ul>
              </div>
              @endif
              @if(Auth::user()->role =="admin")
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a>Hola, {{Auth::user()->name}} un gusto saludarte.</a></li>
                  <li class="hidden-xs"><a href="{{route('admin.index')}}">Administrar mi Pagina</a></li>            
                  <li class="hidden-xs"><a href="#">Lista de deseo</a></li>
                  <li class="hidden-xs"><a href="{{ route('carrito.index') }}">Mi Carrito</a></li>
                  <li><a href="" data-toggle="modal" data-target="#sesion-modal">Salir</a></li>
                </ul>
              </div>
              @endif 
              @else
            <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="{{ route('register') }}">Aun no te has registrado? Que esperas!</a></li>
                <li><a href="{{ route('register') }}">Registrarme</a></li>
                  <!-- <li><a class="hidden-xs"><a href="{{ route('login') }}">Login</a></li> -->
                  <li><a href="" id="abrirLogin" data-toggle="modal" data-target="#login-modal">Login</a></li>
                  <li class="hidden-xs"><a href="#">Lista de deseo</a></li>
                  <li class="hidden-xs"><a href="{{ route('login') }}">Mi Carrito</a></li>
                </ul>
              </div>
            </div>
          @endif
          </div>
        </div>
      </div>
    </div>
    <!-- / header final de este bloque  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="{{ route('home.index') }}">
                  
            <!--img based logo -->
               <a href="{{ route('home.index') }}"><img class="logo" src="img/logolynda.png" alt="logo img"></a> 
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">Carrito de Compra</span>
                  <span class="aa-cart-notify">0</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Ejemplo 'Vestido de lujo' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->