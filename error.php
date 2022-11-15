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
    <title>Error | Vapor Gaming</title>
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
    <div class="containes">
        <div class="row">
            <div class="col">
                <h2>No se pudo conectar a la base de datos</h2>
                <a href="./index.php" class="primary-btn">Volver a intentar <span class="arrow_right"></span></a>
            </div>
        </div>
    </div>

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