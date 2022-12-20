<?php 
require_once("funciones/funcionesPHP.php");

$email= test_input($_POST['email'] ?? null);
$usuario= test_input($_POST['usuario'] ?? null);
$mensaje= test_input($_POST['mensaje'] ?? null);
$errores = array();

if( isset($_POST['submit']) ) {
    if( empty($usuario) ){
        array_push($errores, 'Tenes que ingresar tu nombre.');
    }

    if( filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE ){
        array_push($errores, 'Tenes que ingresar un correo electrónico válido.');
    }

    if( empty($mensaje) ){
        array_push($errores, 'No sabemos cual es tu mensaje');
    }

    if( count($errores) == 0 ){
        header('Location: resultado_formulario.php#formu');
    }

}

?>


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
                                <li><a href="./index.php">Inicio</a></li>
                                <li><a href="./lista.php">Lista de Juegos
                                    <!--<span class="arrow_carrot-down"></span>--></a>
                                </li>
                                <li class="active"><a href="./formulario.php">Contactanos</a></li>
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
    <section class="signup spad" id="formu">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Contactanos</h3>
                        <form action="#formu" method="post">
                            <div class="input__item">
                                <input type="email" name="email" placeholder="Correo Electrónico">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" name="usuario" placeholder="Tu Nombre">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" name="mensaje" placeholder="Mensaje">
                                <span class="icon_pencil"></span>
                            </div>
                            <button type="submit" class="site-btn" name="submit">Enviar</button>
                        </form>
                        <?php foreach($errores as $error): ?>
                            <li class="text text-danger mt-2"> <?php echo $error ?> </li>
                        <?php endforeach ?>
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
                        <li><a href="./index.php">Inicio</a></li>
                        <li><a href="./lista.php">Lista de Juegos</a>
                        <li class="active"><a href="./formulario.php">Contactanos</a></li>
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