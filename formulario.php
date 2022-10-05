<!DOCTYPE html>
<html lang="zxx">

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
    <?php
    require "componentes/_header.php";
    ?>

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
<?php
require "componentes/_footer.php";
?>


<!-- Importa Js Plugins -->
<?php
require "componentes/_scripts.php";
?>


</body>

</html>