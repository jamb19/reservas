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
                  <a href="" class="nav-link">INICIO</a>
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


      <!--========================================================== -->
                        <!-- SLIDER DE IMAGENES-->
    <!--========================================================== -->
  <br>
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="{{asset('images/img2.jpg')}}" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="{{asset('images/img5.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="{{asset('images/img6.jpg')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


<section class="container-fluid content">
         <!-- Posts -->
         <div class="title-cards">
        <h2 id="servicios">Servicios que Ofrecemos</h2>
        </div>
    <div class="container-card">
         <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    @foreach ($events as $event)
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset($event->featured)}}" alt="{{$event->name}}">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: {{$event->category->name}}</small>
                                <h5 class="card-title my-2">{{$event->title}}</h5>
                                <div class="d-card-text">
                                    {{$event->content}}
                                </div>
                                <a href="{{route('event', $event->id)}}" class="event-link"><b>Leer más {{$event->slug}}</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Autor: {{$event->author}}</span>
                                    </div>
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Fecha: {{$event->date}}</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">{{$event->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
    <!--========================================================== -->
    <!-- GALERÍA-->
    <!--========================================================== -->

    <div class="title-cards">
      <h2>GALERÍA</h2>
    </div>

    <div class="container-img">
      <div class="box-img">
        <a href="#">
          <figure>
            <img src="{{asset('images/img1.jpg')}}" alt="img-galeria">
          </figure>
        </a>
      </div>
      <div class="box-img">
        <a href="#">
          <figure>
            <img src="{{asset('images/img2.jpg')}}" alt="img-galeria">
          </figure>
        </a>
      </div>
      <div class="box-img">
        <a href="#">
          <figure>
            <img src="{{asset('images/img3.jpg')}}" alt="img-galeria">
          </figure>
        </a>
      </div>
      <div class="box-img">
        <a href="#">
          <figure>
            <img src="{{asset('images/img4.jpg')}}" alt="img-galeria">
          </figure>
        </a>
      </div>
      <div class="box-img">
        <a href="#">
          <figure>
            <img src="{{asset('images/img5.jpg')}}" alt="img-galeria">
          </figure>
        </a>
      </div>
      <div class="box-img">
        <a href="#">
          <figure>
            <img src="{{asset('images/img6.jpg')}}" alt="img-galeria">
          </figure>
        </a>
      </div>
      <div class="box-img">
        <a href="#">
          <figure>
            <img src="{{asset('images/img5.jpg')}}" alt="img-galeria">
          </figure>
        </a>
      </div>
    </div>

    <!--========================================================== -->
    <!-- SECCION UBICACION-->
    <!--========================================================== -->

    <div class="title-cards">
      <h2>Ubicación</h2>
    </div>
      <div id="local" class="border-top border-2">
        <div class="mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6834.137185913115!2d-96.79424228729278!3d16.91435901474243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c717161cec1e27%3A0xc871164b88e4bf47!2sPortozuelo!5e0!3m2!1ses!2smx!4v1695273035486!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
          <div class="wrapper-local">
            <h2>Ubicado en la Raya, Zimatlan</h2>
            <h2 class="text-primary mb-4" id="typewriter"></h2>
            <p class="fs-5 text-body">Restaurante campestre basado en la tradicional cocina de leña, con platillos típicos de la región. Con huerto, granja y espacios al aire libre
              Un desayuno muy Oaxaqueño. Disfruta de la tranquilidad del campo, deliciosas bebidas, guisos y sabores</p>
            <section class="d-flex justify-content-start" id="numeros-local">
              <div>
                <p class="text-primary fs-5">200</p>
                <p>Dias de Sol</p>
              </div>
              <div>
                <p class="text-primary fs-5">100%</p>
                <p>Aprobado</p>
              </div>
              <div>
                <p class="text-primary fs-5">24 °C</p>
                <p>Temperatura</p>
              </div>
            </section>
          </div>
        </div>
      </div>
        
</section>
        <!-- Footer -->
        <footer class="container-fluid bg-main">
                <div class="row text-center p-1">
                    <div class="mb-1">
                        <img src="{{asset('images/Logotipo.png')}}" alt="YouDevs logo" width="120" id="logofooter">
                    </div>
                    <div id="col-md-10">
                        <a href="https://www.facebook.com/portozuelo">
                            <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
                        </a>
                        <a href="https://www.instagram.com/portozuelo_/">
                            <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
                        </a>
                
                        <p class="mt-3">Copyright © 2023 PORTOZUELO. <br> Todos los derechos reservados.</p>
                    </div>
                </div>
            </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    

    <!-- script para galeria de fotos -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></>

    
</body>
</html>