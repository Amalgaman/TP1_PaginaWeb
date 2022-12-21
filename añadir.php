<?php
require_once("funciones/funcionesPHP.php");
require_once("funciones/juegos.php");
require_once("config/config.php");

try {
    $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
}catch(PDOException $e){
    header('Location: error.php');
}

$nombre = test_input( $_POST['nombre'] ?? null );
$precio = test_input( $_POST['precio'] ?? null );
$descripcion = test_input( $_POST['descripcion'] ?? null );
$calificacion = test_input($_POST['calificacion']?? null);
$desarrollador = test_input($_POST['desarrollador']?? null);
$lanzamiento = test_input($_POST['lanzamiento']?? null);
$trailer = test_input($_POST['trailer']?? null);
$etiquetas = test_input($_POST['etiquetas']?? null);
$portada = $_FILES['portada'] ?? null;

$errores = array();

if( isset($_POST['añadir']) )
{
    if( empty($nombre) ){
        array_push($errores, 'Tenes que ingresar nombre del juego.');
    }
    if( !filter_var($precio, FILTER_VALIDATE_FLOAT) ){
        array_push($errores, 'Tenes que ingresar un precio con un formato correcto.');
    }
    if( !filter_var($calificacion, FILTER_VALIDATE_FLOAT)  ){
        array_push($errores, 'Tenes ingresar una calificacion (del 1 al 10).');
    }
    if( empty($descripcion) ){
        array_push($errores, 'Tenes que ingresar una descripción.');
    }
    if( empty($lanzamiento) ){
        array_push($errores, 'Tenes ingresar una fecha de lanzamiento.');
    }
    if( empty($desarrollador) ){
        array_push($errores, 'Tenes ingresar un desarrollador.');
    }
    if( !filter_var($trailer, FILTER_VALIDATE_URL)){
        array_push($errores, 'Tenes ingresar un enlace a un trailer.');
    }
    if( empty($etiquetas) ){
        array_push($errores, 'Tenes ingresar etiqueta/s.');
    }


    if( $portada['error'] == '0' ){

        $info = pathinfo($portada['name']);
        
        //Extensiones permitidas.
        $extensiones_permitidas = array('jpg', 'png', 'gif');

        if( !in_array( $info['extension'], $extensiones_permitidas ) )
        {
            array_push($errores, 'El archivo debe tener formato jpg, png o gif.');
        }

    }else{
        array_push($errores, 'Tenes que cargar una imagen.');
    }

    //Está validado.
    if( count($errores) == 0 )
    {

        $imagen_path = 'img/portadas/' . time() . $portada['name'];

        move_uploaded_file( $portada['tmp_name'], $imagen_path );

        addJuego($conexion, array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'calificacion' => $calificacion,
            'desarrollador' => $desarrollador,
            'lanzamiento' => $lanzamiento,
            'trailer' => $trailer,
            'etiquetas' => $etiquetas,
            'portada' => $imagen_path
        ));

        header('Location: productos.php');

    }
}
//$categorias = getCategorias($conexion);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <title>Añadir Producto | Vapor Gaming</title>
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

    <div class="container m-5 mx-auto centrado">
            <div class="row centrado" >
                <div class="">
                    <div class="login__form mx-auto">
                        <h3 class="ml-5">Añadir Juego</h3>
                        <?php foreach($errores as $error): ?>
                            <li class="text text-danger mt-2 ml-5"> <?php echo $error ?> </li>
                        <?php endforeach ?>
                        <form class="m-3 formulin" method="post" action="#" enctype="multipart/form-data">
                            <div class="">
                                <div class="input__item">
                                    <input name="nombre" type="text" placeholder="Nombre" value="<?php echo $nombre?>">
                                    <span class="icon_pencil-edit"></span>
                                </div>
                                <div class="input__item">
                                    <input name="precio" type="text" placeholder="Precio" value="<?php echo $precio?>">
                                    <span class="icon_creditcard"></span>
                                </div>
                                <div class="input__item">
                                    <input name="calificacion" type="text" placeholder="Calificacion" value="<?php echo $calificacion?>">
                                    <span class="icon_star"></span>
                                </div>
                                <textarea class="input__item p-3" name="descripcion" id="descripcion" cols="44" rows="6" placeholder="Descripción" value="" style="color: #000030;"><?php echo $descripcion?></textarea>
                            </div>
                            <div class="">
                                <div class="input__item">
                                    <input name="desarrollador" id="desarrollador" type="text" placeholder="Desarrollador" value="<?php echo $desarrollador?>">
                                    <span class="icon_cog"></span>
                                </div>
                                <div class="input__item">
                                    <input name="lanzamiento" type="date" placeholder="Fecha de Lanzamiento" value="<?php echo $lanzamiento?>">
                                    <span class="icon_calendar"></span>
                                </div>
                                <div class="input__item">
                                    <input name="trailer" type="text" placeholder="Enlace de video" value="<?php echo $trailer?>">
                                    <span class="icon_search"></span>
                                </div>
                                <div class="input__item">
                                    <input name="etiquetas" type="text" placeholder="Etiquetas" value="<?php echo $etiquetas?>">
                                    <span class="icon_tags"></span> 
                                </div>
                                <div class="input__item">
                                    <input type="file" class="form-control" id="portada" name="portada">
                                    <span class="icon_image"></span>
                                </div>
                                <button type="submit" class="site-btn col-11" name="añadir">Añadir</button>
                            </div>
                        </form>
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