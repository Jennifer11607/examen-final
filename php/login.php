<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>


    <div class="bebas-neue-regular">
        <div class="container-fluid">

            <div class="logincontenedor">
                <h1>ÚNETE AL MUNDO DE</h1>
                <img src="../images/COD.png" alt="COD" width="200px">
                <h1>ENLISTATE AHORA</h1>

                <p>OBTÉN LA INFORMACIÓN MÁS ACTUALIZADA: Su fuente de las noticias más</p>
                <P>recientes, reciba alertas de nuevos eventos o actualizaciones y vea mapas de calor.</P>

                <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="formulario">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Dirección de Correo</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">No compartiremos tu correo con nadie.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword2" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="exampleInputPassword2">
                            </div>
                            <div class="mb-3">
                                <label for="pais" class="form-label">País</label>
                                <select class="form-select" id="pais" aria-label="País">
                                    <option selected value="">Selecciona un país</option>
                                    <option value="usa">Estados Unidos</option>
                                    <option value="uk">Reino Unido</option>
                                    <option value="canada">Canadá</option>
                                    <option value="mexico">México</option>
                                    <option value="guatemala">Guatemala</option>
                                    <option value="colombia">Colombia</option>
                                    <option value="argentina">Argentina</option>
                                    <option value="brasil">Brasil</option>
                                    <option value="chile">Chile</option>
                                    <option value="peru">Perú</option>
                                    <option value="espana">España</option>
                                    <option value="francia">Francia</option>
                                    <option value="italia">Italia</option>
                                    <option value="alemania">Alemania</option>
                                    <option value="australia">Australia</option>
                                    <option value="japon">Japón</option>
                                    <option value="corea">Corea del Sur</option>
                                    <option value="china">China</option>
                                    <option value="india">India</option>
                                    <option value="rusia">Rusia</option>
                                </select>
                            </div>
                            <div class="butom">
                                <button type="submit" class="btn btn-primary">¡INSCRIBIRSE!</button><br>
                            </div>
                            <br>

                        </form>

                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            <p>¿Ya tienes una cuenta de Call of Duty? <a href="https://profile.callofduty.com/cod/login">Iniciar sesión</a></p>

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