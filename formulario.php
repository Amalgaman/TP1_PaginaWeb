<!DOCTYPE html>
<html lang="es">

<head>
    <title>Contactanos | Vapor Gaming</title>
    <?php
    require "componentes/_head.php";
    ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Importa el Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Inicio</a></li>
                                <li><a href="./lista.php">Lista de Juegos
                                    <!--<span class="arrow_carrot-down"></span>--></a>
                                </li>
                                <li><a href="./formulario.php">Contactanos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    <!-- Portada -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/wallpaper.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>¿Alguna duda?</h2>
                        <p>Envia una consulta directa o buscanos en nuestras redes sociales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Formulario -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Contactanos</h3>
                        <form action="#">
                            <div class="input__item">
                                <input type="text" placeholder="Correo Electrónico">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" placeholder="Tu Nombre">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" placeholder="Mensaje">
                                <span class="icon_pencil"></span>
                            </div>
                            <button type="submit" class="site-btn">Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <h3>Redes Sociales:</h3>
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Buscar en Facebook</a>
                            </li>
                            <li><a href="#" class="google"><i class="fa fa-instagram"></i> Buscar en Instagram</a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Buscar en Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Importa el Footer -->
    <footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.php"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.php">Inicio</a></li>
                        <li><a href="./lista.php">Lista de Juegos</a>
                        <li><a href="./formulario.php">Contactanos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Basicamente los creditos del Template, unos capos --></p>

              </div>
          </div>
      </div>
  </footer>


<!-- Importa Js Plugins -->
<?php
require "componentes/_scripts.php";
?>


</body>

</html>