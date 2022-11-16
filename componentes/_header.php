<?php
require_once ("./funciones/juegos.php");

$etiquetas = getEtiquetas($lista);

$random = rand(10001, (10000 + count($lista)));
?>
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
                                    <ul class="dropdown">
                                        <?php foreach($etiquetas as $item):?>
                                        <li><a href="./lista.php?etiqueta=<?php echo $item ?>"><?php echo $item ?></a></li>
                                        <?php endforeach;?>
                                    </ul>
                                </li>
                                <li><a href="./sitio_juego.php?serial=<?php echo $random ?>">Juego Aleatorio</a></li>
                                <li><a href="./formulario.php">Contactanos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>