<?php
require_once("funciones/funcionesPHP.php");

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
        array_push($errores, 'Tenes que ingresar nombre del juego');
    }

    if( !filter_var($precio, FILTER_VALIDATE_FLOAT) ){
        array_push($errores, 'Tenes que ingresar un precio con un formato correcto.');
    }

    if( empty($calificacion) ){
        array_push($errores, 'Tenes ingresar una calificacion.');
    }

    if( empty($descripcion) ){
        array_push($errores, 'Tenes que ingresar una descripción.');
    }
    if( empty($calificacion) ){
        array_push($errores, 'Tenes ingresar una calificacion.');
    }
    echo 'adasdad antes';
    if( $portada['error'] == '0' ){
        echo 'asdasda';
        $info = pathinfo($portada['name']);
        
        //Extensiones permitidas.
        $extensiones_permitidas = array('jpg', 'png', 'gif');

        if( !in_array( $info['extension'], $extensiones_permitidas ) )
        {
            array_push($errores, 'Usted debe cargar un archivo con formato jpg, png o gif.');
        }

    }else{
        echo 'asdasda else';
        array_push($errores, 'Usted debe cargar una imagen.');
    }

    //Está validado.
    if( count($errores) == 0 )
    {

        $imagen_path = 'img/portadas/' . time() . $portada['name'];

        move_uploaded_file( $portada['tmp_name'], $imagen_path );

        addProducto($conexion, array(
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

    <div class="container m-5">
            <div class="row">
                <div class="col-lg-6  mx-auto">
                    <div class="login__form">
                        <h3>Añadir Juego</h3>
                        <?php foreach($errores as $error): ?>
                            <li class="text text-danger mt-2"> <?php echo $error ?> </li>
                        <?php endforeach ?>
                        <form action="#" method="post">
                            <div class="input__item">
                                <input name="nombre" type="text" placeholder="Nombre" value="<?php echo $nombre?>">
                                <!-- <span class="icon_mail"></span> -->
                            </div>
                            <div class="input__item">
                                <input name="precio" type="text" placeholder="Precio" value="<?php echo $precio?>">
                                <!-- <span class="icon_mail"></span> -->
                            </div>
                            <div class="input__item">
                                <input name="calificacion" type="text" placeholder="Calificacion" value="<?php echo $calificacion?>">
                                <!-- <span class="icon_profile"></span> -->
                            </div>
                                <textarea name="descripcion" id="descripcion" cols="41" rows="10" placeholder="Descripción" value="<?php echo $descripcion?>" style="color: #000030;"></textarea>
                                <div class="input__item">
                                <input type="text" placeholder="Desarrollador">
                                <!-- <span class="icon_mail"></span> -->
                            </div>
                            <div class="input__item">
                                <input name="lanzamiento" type="date" placeholder="Fecha de Lanzamiento" value="<?php echo $lanzamiento?>">
                                <!-- <span class="icon_mail"></span> -->
                            </div>
                            <div class="input__item">
                                <input name="trailer" type="text" placeholder="Enlace de video" value="<?php echo $trailer?>">
                                <!-- <span class="icon_mail"></span> -->
                            </div>
                            <div class="input__item">
                                <input name="etiquetas" type="text" placeholder="Etiquetas" value="<?php echo $etiquetas?>">
                                <!-- <span class="icon_mail"></span> -->
                            </div>
                            <input type="file" class="" id="portada" name="portada">
                            
                            <button type="submit" class="site-btn" name="añadir">Añadir</button>
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