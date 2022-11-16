<!DOCTYPE html>
<html lang="es">
     <!-- Importa las funciones -->
     <?php
    require_once('config/config.php');
    require_once('funciones/juegos.php');
    require_once('funciones/paginado.php');

    try {
        $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
    }catch(PDOException $e){
        header('Location: error.php');
    }

    $lista = getJuegos($conexion);

    $etiqueta = $_GET['etiqueta'] ?? null;
    if($etiqueta != null){
        $lista_filtrada = getJuegoByEtiqueta($etiqueta,$lista);
    }else{
        $lista_filtrada = $lista;
    }

    //Variables del paginado
    $cantidad = count($lista_filtrada);
    $pagina_actual = $_GET['pag'] ?? 1;
    $cuantos_por_pagina = 3;

    $paginado_enlaces = paginador_enlaces($cantidad, $pagina_actual, $cuantos_por_pagina);
    $lista_filtrada = paginador_lista($lista_filtrada, $pagina_actual, $cuantos_por_pagina);
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
                        <p>Filtrar:</p>
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
                            <?php
                            foreach($lista_filtrada as $item):?>
                            <div class="col-lg-4 col-md-6 col-sm-6">   
                                <div class="product__sidebar__view__item set-bg mix day years"
                                    data-setbg="./img/portadas/por_<?php echo $item["serial"] ?>.jpg">
                                    
                                    <div class="ep"><?php echo $item["calificacion"] ?>/10</div>
                                    <div class="view">$ <?php echo $item["precio"] ?></div>

                                    <h5><a href="./sitio_juego.php?serial=<?php echo $item["serial"]?>"><?php echo $item["nombre"] ?></a></h5>
                                </div>    
                            </div>
                            <?php endforeach?>
                        </div>
                    </div>
                    <div class="product__pagination">

                    <?php 
                    if(is_null($etiqueta)){
                        $etiqueta_link = '';
                    }else{
                        $etiqueta_link = "etiqueta={$etiqueta}&";
                    }
                    if($paginado_enlaces['anterior']): ?>
                        <a href="?<?php echo $etiqueta_link?>pag=<?php echo $paginado_enlaces['primero'] ?>"><i class="fa fa-angle-double-left"></i></a>
                        <a href="?<?php echo $etiqueta_link?>pag=<?php echo $paginado_enlaces['anterior'] ?>"><?php echo $paginado_enlaces['anterior'] ?></a>             
                    <?php endif ?>
                        <a href="#" class="current-page"><?php echo $paginado_enlaces['actual'] ?></a>
                    <?php if($paginado_enlaces['siguiente']): ?> 
                        <a href="?<?php echo $etiqueta_link?>pag=<?php echo $paginado_enlaces['siguiente'] ?>"><?php echo $paginado_enlaces['siguiente'] ?></a>
                        <a href="?<?php echo $etiqueta_link?>pag=<?php echo $paginado_enlaces['ultimo'] ?>"><i class="fa fa-angle-double-right"></i></a>
                    <?php endif ?>   
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