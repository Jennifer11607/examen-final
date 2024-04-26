<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../css/style.css">
<style>
</style>
</head>
<body>


<div class="bebas-neue-regular">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../images/MIW.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../images/EPP.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../images/BT.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="row">
        <div class="col-4">
        <a href="../php/juegos.php" class="trescuadros"><h1>COMPRAR JUEGOS</h1></a>
        </div>
        <div class="col-4">
        <a href="../php/skins.php" class="trescuadros"><h1>COMPRAR PAQUETES</h1></a>
        </div>
        <div class="col-4">
        <a href="../php/cp.php" class="trescuadros"><h1>OBTEN PUNTOS COD</h1></a>
        </div>     
      </div>

      <div class="row">
        <div class="col-6"><div class="dosimagenes"><img class="img-fluid" src="../images/cobra.jpg" alt="" width="500px"></div></div>
        <div class="col-6"><div class="dosimagenes"><img class="img-fluid" src="../images/black.jpg" alt="" width="500px"></div></div>
      </div>

      <div class="row">
        <div class="col-6">
          <h1>TAMBIÉN PODRÍA GUSTARTE:</h1>
          <div class="row">
            <div class="col-6"><div class="dosimagenes"><img class="img-fluid" src="../images/1.jpg" alt="" width="250px"></div></div>
            <div class="col-6"><div class="dosimagenes"><img class="img-fluid" id="imagen1" src="../images/2.jpg" alt="" width="250px"></div></div>
          </div>
          <div class="row">
            <div class="col-6"><div class="dosimagenes"><img class="img-fluid" id="imagen1" src="../images/3.jpg" alt="" width="250px"></div></div>
            <div class="col-6"><div class="dosimagenes"><img class="img-fluid" id="imagen1" src="../images/4.jpg" alt="" width="250px"></div></div>
          </div>
        </div>
        <div class="col-6">
            <h1>MANTÉNGASE INFORMADO:</h1>
          <div class="row">
            <div class="col-6"><div class="cont"><img class="img-fluid" src="../images/5.jpg" alt="" width="150px"></div></div>
            <div class="col-6"><button>MWIII</button><button>WZ</button><button>MZM</button><br>¡CONTENIDO DE LA TEMPORADA 2 DE MODERN<br>WARFARE III COMPLETAMENTE REVELADO!</div>
          </div>
          <hr>
          <div class="row">
            <div class="col-6"><div class="cont"><img class="img-fluid" src="../images/6.jpg" alt="" width="150px"></div></div>
            <div class="col-6"><button>CODM</button><br>PRESENTAMOS Call Of Duty: Mobile <br> Temporada I: Soldier's Tale    </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-6"><div class="cont"><img class="img-fluid" src="../images/7.jpg" alt="" width="150px"></div></div>
            <div class="col-6"> <button>MWIII</button><br>Guía de mapas multijugador: Río</div>
          </div>
        </div>
      </div>


</div>


 <!-- inicia footer -->
 <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Contacto</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>3ra Avenida Zona 10 , Ciudad de Guatemala</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+502 345 67890</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Siguenos en</h4>
                <p>Nuestras cuentas oficiales en redes sociales</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2 d-flex justify-content-center align-items-center"
                        href="#">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2 d-flex justify-content-center align-items-center"
                        href="#">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2 d-flex justify-content-center align-items-center"
                        href="#">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square d-flex justify-content-center align-items-center"
                        href="#">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Horarios</h4>
                <div>
                    <h6 class="text-white text-uppercase">Lunes - Viernes</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Sabado - Domingo</h6>
                    <p>2.00 PM - 8.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Dudas o Preguntas</h4>
                <p>Para cualquier duda puedes mandar un correo</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5"
            style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Abril &copy; <a class="font-weight-bold" href="#">Luca & Jennifer</a>. Derechos
                Reservados.</a></p>
            <p class="m-0 text-white">EMIC <a class="font-weight-bold" href="https://htmlcodex.com">HTML
                    Guatemala</a></p>
        </div>
    </div>
<!-- finaliza footer -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>