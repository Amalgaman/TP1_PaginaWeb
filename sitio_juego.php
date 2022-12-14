<!DOCTYPE html>
<html lang="es">

 <!-- Importa las funciones -->
 <?php
    require_once('config/config.php');
    require_once('funciones/juegos.php');

    try {
        $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
    }catch(PDOException $e){
        header('Location: error.php');
    }

    $lista = getJuegos($conexion);
    $serial = $_GET["serial"];
    $juego = getJuegoBySerial($serial,$lista);
    
    $similares = getJuegosSimilares($juego["etiquetas"],$lista);
      
    ?>

<head> 
    
<title><?php echo $juego["nombre"] ?> | Vapor Gaming</title>
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

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <div class="embed-responsive embed-responsive-16by9">
                         <iframe class="embed-responsive-item" width="560" height="315" src=<?php echo $juego["trailer"] ?>></iframe>
                    </div>
               
                </div>
            </div>
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="anime__details__pic set-bg" data-setbg=<?php echo $juego["portada"] ?>>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?php echo $juego["nombre"] ?></h3>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <span><?php echo $juego["calificacion"] ?>/10</span>
                            </div>
                            <p><?php echo $juego["descripcion"] ?></p>
                            <div class="anime__details__widget">
                                <div class="row">

                                    <div class="col-lg-8 col-md-6">
                                    
                                        <ul>
                                            <li><span>Desarrollador:</span> <?php echo $juego["desarrollador"] ?></li>
                                            <li><span>Lanzamiento:</span> <?php echo $juego["lanzamiento"] ?></li>
                                            <li><span>Generos:</span> 
                                            <?php $primero = true;
                                                foreach($juego["etiquetas"] as $etiqueta):
                                                if($primero){
                                                 echo "{$etiqueta}";
                                                 $primero=false;
                                                }else{
                                                echo ", {$etiqueta}";
                                                } 
                                                 endforeach?> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="#" class="follow-btn">$ <?php echo $juego["precio"] ?></a>
                                <a href="./formulario.php" class="watch-btn"><span>Comprar</span> <i
                                    class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Juegos Similares</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach($similares as $item): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg=<?php echo $item["portada"] ?>>
                                        <div class="ep"><?php echo $item["calificacion"] ?> / 10</div>
                                        <div class="view">$ <?php echo $item["precio"] ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                        <?php foreach($item["etiquetas"] as $etiqueta):?>
                                                <li><?php echo $etiqueta ?></li>
                                            <?php endforeach;?>  
                                        </ul>
                                        <h5><a href="./sitio_juego.php?serial=<?php echo $item["serial"] ?>"><?php echo $item["nombre"] ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>    
                        </div>
                    </div>
            </div>
        </section>
        <!-- Anime Section End -->

          <!-- Search model Begin -->
          <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch"><i class="icon_close"></i></div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>
        <!-- Search model end -->

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