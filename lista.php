<!DOCTYPE html>
<html lang="es">
     <!-- Importa las funciones -->
     <?php
    require_once('funciones/juegos.php');
    $lista = getJuegos();
    $etiqueta = $_GET['etiqueta'] ?? null;
    if($etiqueta != null){
        $lista = getJuegoByEtiqueta($etiqueta);
    }
    ?>

<head>
    <title>Lista de Juegos | Vapor Gaming</title>
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

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>Lista de juegos</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                <form id="filtro" class="product__page__filter" action="lista.php" method="get">
                        
                        <select name="etiqueta" id="etiqueta" onchange="recargar()">
                            <option value="">Todos</option>
                            <?php foreach($etiquetas as $op): ?>
                            <option  <?php if($op == $etiqueta): ?> selected <?php endif ?> value="<?php echo $op ?>"><?php echo $op ?></option>
                            <?php endforeach?>        
                        </select>
                    </form>
                    <script>
                        function recargar()
                        {
                            document.getElementById('filtro').submit();
                        }
                    </script>

                                    <!--
                                    <form class="product__page__filter" action="lista.php" method="get">
                                        <button type="submit">Filtrar:</button>
                                        <select name="etiqueta" id="etiqueta">
                                            <option value="">Todos</option>
                                            <?php foreach($etiquetas as $op): ?>
                                            <option  <?php if($op == $etiqueta): ?> selected <?php endif ?> value="<?php echo $op ?>"><?php echo $op ?></option>
                                            <?php endforeach?>        
                                        </select>
                                    </form>
                                    -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach($lista as $item):?>
                            <div class="col-lg-4 col-md-6 col-sm-6">   
                                <div class="product__sidebar__view__item set-bg mix day years"
                                    data-setbg="./img/portadas/por_<?php echo $item["serial"] ?>.jpg">
                                    
                                    <div class="ep"><?php echo $item["calificacion"] ?>/10</div>
                                    <div class="view">$ <?php echo $item["precio"] ?></div>
                                    <h5><a href="./sitio_juego.php?serial=<?php echo $item["serial"] ?>"><?php echo $item["nombre"] ?></h5>
                                </div>    
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div class="product__pagination">
                        <a href="#" class="current-page">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

<!-- Product Section End -->

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