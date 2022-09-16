<!DOCTYPE html>
<html lang="es">

<head>
    <title>Hola</title>
    <?php
    require "componentes/_head.php";
    ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

     <!-- Importa las funciones -->
    <?php
    require_once('funciones/juegos.php');
    $lista = getJuegos();
    $portada = getAleatorios(5);
    $recomendados = getAleatorios(3);
    $populares = getAleatorios(6);
    $novedades = getAleatorios(6);
    ?>

    <!-- Importa el Header -->
    <?php
    require "componentes/_header.php";
    ?>
    
    <!-- Carrousel de la portda (Hero) -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <?php foreach($portada as $item): ?>
                <div class="hero__items set-bg" data-setbg="<?php echo $item["portada"] ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label"><?php echo $item["etiqueta1"] ?></div>
                                <div class="label"><?php echo $item["etiqueta2"] ?></div>
                                <h2><?php echo $item["nombre"] ?></h2>
                                <p><?php echo $item["descripcion"] ?></p>
                                <a href="./sitio_juego.php?serial=<?php echo $item["serial"] ?>"><span>Ver Mas</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Seccion de Productos -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recomendados para ti</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Ver todo <span class="arrow_right"></span></a>
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
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Populares ahora</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">VER TODO <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach($populares as $item): ?>
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
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="section-title">
                        <h5>Novedades</h5>
                    </div>
                    <?php foreach($novedades as $item): ?>
                        <div class="product__sidebar__view__item set-bg"
                            data-setbg="<?php echo $item["portada"] ?>">
                            <div class="ep"><?php echo $item["calificacion"] ?> / 10</div>
                            <div class="view"><i class="fa fa-eye"></i> $ <?php echo $item["precio"] ?></div>
                            <h5><a href="#"><?php echo $item["nombre"] ?></a></h5>
                        </div>
                    <?php endforeach ?>         
                </div>           
            </div>
        </div>                        
    </section>
<!-- Termina la seccion de productos -->

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