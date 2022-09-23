<!DOCTYPE html>
<html lang="es">

 <!-- Importa las funciones -->
 <?php
    require_once('funciones/juegos.php');
    //$serial = $_GET["serial"];
    //$juego = getJuegoBySerial($serial);
    $juego = getJuegoBySerial(10001);
    ?>

<head> 
    
<title><?php echo $juego["nombre"] ?> - Paginarda</title>
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
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="<?php echo $juego["portada"] ?>">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?php echo $juego["nombre"] ?></h3>
                                <span>フェイト／ステイナイト, Feito／sutei naito</span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p><?php echo $juego["descripcion"] ?></p>
                            <div class="anime__details__widget">
                                <div class="row">

                                    <div class="col-lg-6 col-md-6">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $juego["trailer"]?>?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        
                                     
                                        <ul>
                                            <li><span>Calificacion:</span> <?php echo $juego["calificacion"] ?>/10</li>
                                            <li><span>Desarrollador:</span> <?php echo $juego["desarrollador"] ?></li>
                                            <li><span>Lanzamiento:</span> <?php echo $juego["lanzamiento"] ?></li>
                                            <li><span>Generos:</span> <?php echo $juego["etiqueta1"] ?>, <?php echo $juego["etiqueta2"] ?></li>
                                        </ul>
                                    </div>
                                    <!--  Por si queremos agregar mas datos
                                        <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Scores:</span> 7.31 / 1,515</li>
                                            <li><span>Rating:</span> 8.5 / 161 times</li>
                                            <li><span>Duration:</span> 24 min/ep</li>
                                            <li><span>Quality:</span> HD</li>
                                            <li><span>Views:</span> 131,541</li>
                                        </ul>
                                    </div>
                                    -->  
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i>$ <?php echo $juego["precio"] ?></a>
                                <a href="#" class="watch-btn"><span>Comprar</span> <i
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
                            <?php foreach($recomendados as $item): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?php echo $item["portada"] ?>">
                                        <div class="ep"><?php echo $item["calificacion"] ?> / 10</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> $ <?php echo $item["precio"] ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><?php echo $item["etiqueta1"] ?></li>
                                            <li><?php echo $item["etiqueta2"] ?></li>
                                        </ul>
                                        <h5><a href="#"><?php echo $item["nombre"] ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>    
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