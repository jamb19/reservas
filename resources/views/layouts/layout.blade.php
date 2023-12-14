<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTOZUELO</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>
<body>
    <!--========================================================== -->
                        <!-- MENU-->
    <!--========================================================== -->
    
    <!-- MENU START  -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <!-- NAV CONTAINER START -->
        <div class="container-fluid">
          <a href="" class="brand"><img src="{{asset('images/Logotipo.png')}}" alt=""></a>

          <!-- NAV BUTTON  -->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#menuLateral"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- OFFCANVAS MAIN CONTAINER START -->
          <section
            class="offcanvas offcanvas-start"
            id="menuLateral"
            tabindex="-1"
          >
            <div class="offcanvas-header" data-bs-theme="dark">
              <a href="" class="brand center"><img src="{{asset('images/Logotipo.png')}}" alt=""></a>
              <button
                class="btn-close"
                type="button"
                aria-label="Close"
                data-bs-dismiss="offcanvas"
              ></button>
            </div>
            <!-- OFF CANVAS MENU LINKS  START-->
            <div
              class="offcanvas-body d-flex flex-column justify-content-between px-0"
            >
              <ul class="navbar-nav fs-5 justify-content-evenly">
                <li class="nav-item p-3 py-md-1">
                  <a href="/events" class="nav-link">INICIO</a>
                </li>
                <li class="nav-item p-3 py-md-1">
                  <a href="#servicios" class="nav-link">SERVICIOS</a>
                </li>
                <li class="nav-item p-3 py-md-1">
                  <a href="" class="nav-link">RESERVACIONES</a>
                </li>
                <li class="nav-item p-3 py-md-1">
                  <a href="#seccion-contacto" class="nav-link">CONTACTO</a>
                </li>
              </ul>
            </div>
          </section>
        </div>
      </nav>

    <!--contenido -->
    @yield('content') -> @section('content')
   
  <!-- Footer -->
<footer class="container-fluid bg-main">
        <div class="row text-center p-1">
            <div class="mb-1">
                <img src="{{asset('images/Logotipo.png')}}" alt="YouDevs logo" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com/youdevs">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
                </a>
                <a href="https://www.instagram.com/youdevs">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
                </a>
        
                <p class="mt-3">Copyright © 2023 PORTOZUELO. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>