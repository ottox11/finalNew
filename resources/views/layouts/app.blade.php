<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
     <!-- <script src="{{ asset('js/app.js') }}" defer></script>  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- <link rel="stylesheet" href="css/navbar.css"> -->
    <!-- <link rel="stylesheet" href="css/styleForm.css">
    <link rel="stylesheet" href="css/productsAdmin.css">


    <script src="./js/app.js"></script> -->
    <title>@yield('title', 'Mundo Mascotas')</title>

    <!-- <script src="js/app.js"></script> -->



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresa') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                </li>
                            @endif
                        @else
                            @if ( Auth::user()->user_role == 'admin' )

                              <li class="nav-item active">
                                  <a class="nav-link" href="{{ url('admin/listado') }}">Opciones Admin <span class="sr-only">(current)</span></a>
                              </li>

                              <li class="nav-item active">
                                  <a class="nav-link btn-outline-primary" href="{{ url('crearProducto') }}"> Crear Producto <span class="sr-only">(current)</span></a>
                              </li>

                              <li class="nav-item active">
                                  <a class="nav-link btn-outline-primary" href="{{ url('crearService') }}"> Crear Servicio <span class="sr-only">(current)</span></a>
                              </li>

                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                            <li>
                              <div class="mini-cart">
                                <a href="/carrito/{{Auth::user()->id}}"
                                 class="btn btn-default mini-cart-button"><img src="{{ asset('img/carrito.svg') }}" alt=""></a>
                              </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <br>
    <br>
    <br>
    <footer>
      <footer class="site-footer">
     <div class="container">
       <div class="row">
         <div class="col-sm-12 col-md-6">
           <h5><strong>Sobre Nosotros</strong></h5>
           <p class="text-justify">
             Nos encantan los animales, de todas las razas y de todos los colores. Queremos transmitir esta ilusión y amor a través de la red,
             ofreciendo a nuestros clientes precios inmejorables en un lugar en el que navegar es fácil, y que ha sido diseñado exclusivamente
             para la comodidad del usuario. Queremos hacer que el momento de compra de la comida de tu fiel amigo, sea rápido y eficaz, y que tú
             puedas dedicar ése tiempo a estar con tu mascota.Queremos que ahorres dinero en tus compras, y que lo gastes en lo que más te guste.
           </p>
         </div>

         <div class="col-xs-6 col-md-3">
           <h5><strong>Mundo Mascotas Links</strong></h5>
           <ul class="footer-links">
             <li><a href="{{ url('/') }}">Inicio</a></li>
             <li><a href="{{ url('/service') }}">Servicios</a></li>
             <li><a href="{{ url('/listaProducto') }}">Productos</a></li>
             <li><a href="{{ url('/terminosCondiciones') }}">Términos y condiciones</a></li>
             <li><a href="{{ url('/politicas') }}">Políticas de privacidad</a></li>
             <li><a href="{{ url('/contacto') }}">Contáctanos</a></li>
           </ul>
         </div>

         <div class="col-xs-6 col-md-3">
           <h5><strong>Nuestra sucursal</strong></h5>
           <ul class="footer-links">
             <p>Av. SiempreViva 1000 - CABA, Buenos Aires</p>
             <p>info@mundomascota.com</p>
             <p>+54 (011)22443491</p>
           </ul>
         </div>
       </div>
       <hr>
     </div>
     <div class="container">
       <div class="row">
         <div class="col-md-8 col-sm-6 col-xs-12">
           <p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by
        <a href="#">mundoMascota</a>.
           </p>
         </div>


       </div>
     </div>
</footer>


</html>
