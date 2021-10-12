<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
        body {
          background-image: url("https://fondosmil.com/fondo/18767.jpg");
          background-attachment: fixed;
        }

        header{
          background-image:"img/logo.png";
          background-color: #202124;
        }

        .admin{
            color: aqua;
        }

        main{
            background-color: #ffffff;
            background-attachment: fixed;
        }

        #reg{
          border-radius: 5px;
        }

        .carouselExampleInterval{
            height: 500px;
            width: 100px;
        }
        .imagen{
            height: 500px;
            width: 1000px;
        }

        #caja{
            height: 380px;
            width: 700px;
            background: #ffffff;
            float: right; 
        }

        #ingresar{
          text-decoration: none;
        }
    </style>

        <title>Gym Style's</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <header class="col-12">
                <nav class="navbar navbar-expand-lg navbar-success opacity: 0.4;" id="header">
                  <div class="container-fluid">
                    <img src="img/logo.png" width="200px" height="150px" alt="">
                    <li class="col-8 d-flex justify-content-evenly">
                      <br>
                      <!-- Button trigger modal -->    
                      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#administrador" style="color:#fd7e14">ADMINISTRADOR</button>
                      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#entrenador" style="color:#fd7e14">ENTRENADOR</button>
                      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#usuario" style="color:#fd7e14">USUARIO</button>

                      
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    {{ Auth::user()->name }}
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                                </form>
                                
                            </li>
                            @else
                                @if (Route::has('register'))
                                    <button id="reg" class="btn"><a id="ingresar" href="{{ route('login') }}" class="ml-4" style="color:#fd7e14">INGRESAR</a></button>
                                @endif
                            @endauth
                        @endif 
                    </li>
                  </div>
                </nav>
            </header>
            <div >
                <main class="col-12 d-flex justify-content-around">
                        <!-- Modal Administrador-->
                        <div class="modal fade" id="administrador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Administrador</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" align="center">
                                  <p align="left">
                                    Encargado de registrar, borrar, editar y eliminar usuarios que quieran ser parte del Gimnasio.
                                  </p>
                                  <img src="https://st4.depositphotos.com/3383955/29168/i/600/depositphotos_291681036-stock-photo-muscular-man-showing-muscles-in.jpg" alt="" width="300px" height="250px">  
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <!-- Modal Entrenador-->
                        <div class="modal fade" id="entrenador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Entrenador</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" align="center">
                                  <p align="left">
                                  Los entrenadores personales trabajan con personas que quieren mejorar su salud y bienestar. Investigan los objetivos de cada cliente para poder planificar diferentes actividades y lograr este objetivo. Para dicha planificación, a menudo tienen en cuenta la salud general, estilo de vida y la nutrición del cliente. 
                                  </p>
                                  <img src="http://i.dailymail.co.uk/i/pix/2013/06/24/article-0-1A6A09C8000005DC-622_634x617.jpg?w=640" alt="" width="300px" height="250px">  
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <!-- Modal Usuario-->
                        <div class="modal fade" id="usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Usuario</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" align="center">
                                  <p align="left">
                                    El usuario tiene vista las clasesa las que esta inscrito y tener el control de sus horarios y fechas de dichas clases.
                                  </p>
                                  <img src="https://campolaboral.net/wp-content/uploads/2020/06/entrenador-fitness.png" alt="" width="300px" height="250px">  
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <!-- Carrusel de Imagenes -->
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                      <img src="https://sextoanillo.com/wp-content/uploads/2016/12/personas-ejercitando-gimnasio-caminadoras.jpg" class="d-block w-100" alt="..." height="500px">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                      <img src="https://imagenes.20minutos.es/files/image_656_370/uploads/imagenes/2018/09/23/673286.jpg" class="d-block w-100" alt="..." height="500px" >
                    </div>
                    <div class="carousel-item">
                      <img src="https://us.123rf.com/450wm/dolgachov/dolgachov1705/dolgachov170502911/78749259-grupo-de-personas-colgando-en-la-barra-horizontal-en-el-gimnasio.jpg?ver=6" class="d-block w-100" alt="..."  height="500px">
                    </div>
                  </div>
                  
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <br>
                <iframe width="600" height="400" src="https://www.youtube.com/embed/3QRYYC4QEh4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                <div id="caja">
                    <img src="https://image.freepik.com/foto-gratis/personas-que-trabajan-gimnasio_53876-13559.jpg" class="d-block w-100" height="200px" width="100px">    
                    <p align="center" style="color: #ffffff;">
                        <h2>Gym Style's</h2>
                        <br>
                        <b>Lo que encaramos parece insuperable, pero somos más fuertes de lo que creemos.</b><br>
                        <b>-Arnold Schwarzenegger.</b> 
                    </p>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                  <div class="col">
                    <div class="card h-100">
                      <img src="https://i0.wp.com/www.aroypedal.com/wp-content/uploads/2018/02/Comida-sana-y-ejercicio.jpg?fit=1160%2C700&ssl=1" class="card-img-top" height="250px" >
                      <div class="card-body">
                        <h5 class="card-title">Alimentate Bien</h5>
                        <p class="card-text">Existe evidencia sólida que demuestra que comer una dieta saludable puede reducir su riesgo de obesidad y enfermedades tales como diabetes, cardiopatía, accidentes cerebrovasculares, osteoporosis y algunos tipos de cáncer.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100">
                      <img src="https://imagenes.expreso.ec/files/image_700_402/uploads/2020/03/30/5e82ae32c6020.jpeg" class="card-img-top" alt="..." height="250px">
                      <div class="card-body">
                        <h5 class="card-title">Haz Ejercicio en Casa</h5>
                        <p class="card-text">Aporta energía para todo el día. <br> 
                        Tonifica y moldea los músculos. Aumenta la flexibilidad. <br> 
                        Incrementa la concentración, reduce el estrés y ayuda a tener mayor conciencia corporal.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100">
                      <img src="https://www.mgc.es/wp-content/uploads/2018/03/dormir-bien.jpg" class="card-img-top" alt="..." height="250px">
                      <div class="card-body">
                        <h5 class="card-title">Duerme Bien</h5>
                        <p class="card-text">El sueño le da al cuerpo un descanso y le permite prepararse para el día siguiente.<br> 
                        Es como darle al cuerpo unas pequeñas vacaciones. <br> 
                        El sueño también le da al cerebro la posibilidad de resolver las cosas.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-12">
                      <div class="row">
                          <footer class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 amarillo bg-dark" >
                            <img src="img/logo.png" class="p-2" height="50px" width="">
                              <a class="navbar-brand btn-primary bg-dark" href="#" id="copyrigth"> Copyright © Gym Style's 2021. Todos los derechos reservados.</a>
                          </footer>
                      </div>
                  </div>
              </div>
      
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body> 
</html>
