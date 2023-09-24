<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Biblioteca</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
      <!-- CSS FILES -->
      <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">

      <link href="{{asset('asset/css/bootstrap-icons.css')}}" rel="stylesheet">
  
      <link href="{{asset('asset/css/templatemo-kind-heart-charity.css')}}" rel="stylesheet">
      <!--
        

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/770f1a8446.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Calle Octavio Paz s/n colonia Fermín Rabadán Cervantes
                    </p>

                
                </div>


            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('asset/images/BibliotecaLogo.png')}}" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    Biblioteca Octavio Paz
                    <small>Sec.Tec. "Leyes de Reforma de 1857" Zona Escolar 18</small>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{route('site')}}">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="">Escuela</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{route('books.index')}}">Libros</a>
                    </li>

                  

                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href=""
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Categorías</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Novelas</a></li>
                            <li><a class="dropdown-item" href="#">Libros de Texto</a></li>
                            <li><a class="dropdown-item" href="#">Cuentos</a></li>
                            <li><a class="dropdown-item" href="#">Poemas</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">Contacto</a>
                    </li>

                   
                </ul>
            </div>
        </div>
    </nav>
       
        <main>
            @yield('content')
        </main>
        <footer >
    
            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">
    
                        <div class="col-lg-6 col-md-7 col-12">
                            <p class="copyright-text mb-0">Copyright © {{now()->year}} <a href="#">"Leyes de Reforma de 1857
                                </a> Zona Escolar 18.
                               <br> Supervisor:<a href="https://templatemo.com" target="_blank"> Maestro Paulino Tavira Román</a><br>Colaboración:
                                <a href="https://themewagon.com">Bibliotecario: Profesor Gilberto Pérez Hurtado y</a>
                               <br> <a href="https://themewagon.com">Coordinador Académico: Licenciado Miguel Ángel Garrido Ortíz</a>
                            </p>
                        </div>
    
                        {{-- <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>
    
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>
    
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>
    
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-linkedin"></a>
                                </li>
    
                                <li class="social-icon-item">
                                    <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                                </li>
                            </ul>
                        </div> --}}
    
                    </div>
                </div>
            </div>
        </footer>
    
        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('asset/js/jquery.min.js')}}"></script>
        <script src="{{asset('asset/css/bootstrap.min.css')}}"></script>
        <script src="{{asset('asset/js/jquery.sticky.js')}}"></script>
        {{-- <script src="{{asset('asset/js/click-scroll.js')}}"></script> --}}
        <script src="{{asset('asset/js/counter.js')}}"></script>
        <script src="{{asset('asset/js/custom.js')}}"></script>
</body>
</html>
