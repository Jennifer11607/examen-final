<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div con Imagen y Texto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Estilo del contenedor */
        .contenedor {
            max-width: 100%;
            /* Ancho máximo del contenedor */
            border: 1px solid #ccc;
            /* Borde del contenedor */
            border-radius: 10px;
            /* Borde redondeado */
            overflow: hidden;
            /* Ocultar desbordamiento */
            display: flex;
            /* Utilizar flexbox para diseño flexible */
            flex-direction: column;
            /* Dirección de columna (de arriba a abajo) */
            margin-left: 5px;
            margin-right: 5px;
            margin-top: 40px;
        }

        /* Estilo de la sección de la imagen */
        .seccion-imagen {
            flex: 1;
            /* Ocupar espacio disponible (un tercio del contenedor) */
            display: flex;
            /* Usar flexbox */
            justify-content: center;
            /* Centrar contenido horizontalmente */
            align-items: center;
            /* Centrar contenido verticalmente */
        }

        /* Estilo de la imagen */
        .seccion-imagen img {
            max-width: 100%;
            /* Ancho máximo de la imagen */
            height: auto;
            /* Altura automática */
        }

        /* Estilo de la sección de texto */
        .seccion-texto {
            background-color: black;
            /* Color de fondo */
            padding-left: 10px;
        }

        /* Estilos para hacerlo responsive */
        @media (max-width: 600px) {

            /* Cambiar el tamaño del contenedor para pantallas pequeñas */
            .contenedor {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="bebas-neue-regular">
            <div class="acordion1">
                <p class="letrilla">PAQUETES Y SKINS</p>
            </div>
        <div class="row">
            <div class="col-3">
                <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria1.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Llamado del deber dotación</p>
                            <h3>PAQUETE DE PROTECTORES</h3>
                            <h3 class="precio">$9.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria2.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>PAQUETE PROFESIONAL</p>
                            <h3>PAQUETE ESMERALDA</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria3.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Paquete profesional</p>
                            <h3>NOVA 6</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria4.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Paquete profesional</p>
                            <h3>Lujo Tecnologico</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- segundo row -->
        <div class="row">
            <div class="col-3">
                <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria5.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Paquete profesional</p>
                            <h3>VETERANO URBANO</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria6.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>PAQUETE PROFESIONAL</p>
                            <h3>Mantícora</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria7.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Paquete profesional</p>
                            <h3>CIERVO DEMONIO</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria8.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Paquete profesional</p>
                            <h3>PAQUETE VALQUIRIA</h3>
                            <h3 class="precio">$9.99</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- tercer row -->
        <div class="row">
            <div class="col-3">
                <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria9.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Paquete profesional</p>
                            <h3>PÍCARO DEL DESIERTO</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria10.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>PAQUETE PROFESIONAL</p>
                            <h3>GRIFO</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria11.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Paquete profesional</p>
                            <h3>MOTO MONSTRUO</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria12.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Paquete profesional</p>
                            <h3>Paquete guerrero</h3>
                            <h3 class="precio">$9.99</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cuarto row -->
        <div class="row">
            <div class="col-3">
                <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria13.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Paquete profesional</p>
                            <h3>HUERTO DE CALABAZAS</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria14.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>PAQUETE PROFESIONAL</p>
                            <h3>VIAJERO CÓSMICO</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria15.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Paquete profesional</p>
                            <h3>FANTASMA PISTOLERO</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            <div class="container-fluid">
                    <div class="contenedor">
                        <div class="seccion-imagen">
                            <!-- Imagen -->
                            <img class="img-fluid" src="../images/galeria16.jpg" alt="Imagen">
                        </div>
                        <div class="seccion-texto">
                            <!-- Texto -->
                            <p>Paquete profesional</p>
                            <h3>TÁCTICA DE GRAFFITI</h3>
                            <h3 class="precio">$19.99</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="letrasfinal">
            <h1>¿NO ENCUENTRAS EL PAQUETE QUE ESTÁS BUSCANDO?</h1>
            <h2>Para conocer todos los paquetes disponibles, visita la tienda del juego.</h2>
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
            <p class="mb-2 text-white">Abril &copy; <a class="font-weight-bold" href="#">Lucas & Jennifer</a>. Derechos
                Reservados.</a></p>
            <p class="m-0 text-white">EMIC <a class="font-weight-bold" href="https://htmlcodex.com">HTML
                    Guatemala</a></p>
        </div>
    </div>
<!-- finaliza footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>