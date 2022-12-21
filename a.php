<?php 

define('BASE_URL', 'http://localhost/clase15/');

define('DB_HOST', 'localhost');
define('DB_NAME', 'clase15');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

require_once('funciones/funciones_input.php');
require_once('funciones/funciones_consultas.php');

$nombre = test_input( $_POST['nombre'] ?? null );
$precio = test_input( $_POST['precio'] ?? null );
$categoria_id = test_input( $_POST['categoria_id'] ?? null );
$descripcion = test_input( $_POST['descripcion'] ?? null );
$imagen = $_FILES['imagen'] ?? null;

$errores = array();

//Verificamos si el usuario envió información.
if( isset($_POST['submit']) )
{

    if( empty($nombre) ){
        array_push($errores, 'Usted debe ingresar un nombre.');
    }

    if( !filter_var($precio, FILTER_VALIDATE_FLOAT) ){
        array_push($errores, 'Usted debe un precio con un formato correcto.');
    }

    if( empty($categoria_id) ){
        array_push($errores, 'Usted debe ingresar una categoría.');
    }

    if( empty($descripcion) ){
        array_push($errores, 'Usted debe ingresar una descripción.');
    }

    if( $imagen['error'] == '0' ){

        $info = pathinfo($imagen['name']);
        
        //Extensiones permitidas.
        $extensiones_permitidas = array('jpg', 'png', 'gif');

        if( !in_array( $info['extension'], $extensiones_permitidas ) )
        {
            array_push($errores, 'Usted debe cargar un archivo con formato jpg, png o gif.');
        }

    }else{
        array_push($errores, 'Usted debe cargar una imagen.');
    }

    //Está validado.
    if( count($errores) == 0 )
    {

        $imagen_path = 'img/productos/' . time() . $imagen['name'];

        move_uploaded_file( $imagen['tmp_name'], $imagen_path );

        addProducto($conexion, array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'categoria_id' => $categoria_id,
            'precio' => $precio,
            'imagen' => $imagen_path
        ));

        header('Location: list-productos.php');

    }

}

$categorias = getCategorias($conexion);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Producto nuevo</title>
    <?php require('layout/_css.php') ?>
</head>

<body>
    <?php require('layout/_nav.php') ?>
    <div id="layoutSidenav">
        <?php require('layout/_layout_nav.php') ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    <h1 class="mt-4"> Producto nuevo </h1>

                    <div class="card mb-4">

                        <div class="card-header">
                            <i class="fas fa-plus me-1"></i>
                        </div>

                        <div class="card-body">

                            <ul>
                                <?php foreach($errores as $error): ?>
                                    <li class="text text-danger"> <?php echo $error ?> </li>
                                <?php endforeach ?>
                            </ul>

                            <form class="m-3" method="post" action="add-producto.php" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label"> Nombre </label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto" value="<?php echo $nombre ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="precio" class="form-label"> Precio </label>
                                    <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio del producto" value="<?php echo $precio ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="categoria_id" class="form-label"> Categoría </label>
                                    <select class="form-control" name="categoria_id" id="categoria_id">
                                        <option value=""> Seleccione la categoría </option>
                                        <?php foreach($categorias as $cat): ?>
                                            <option <?php if($cat['id'] == $categoria_id): ?> selected <?php endif ?> value="<?php echo $cat['id'] ?>"> <?php echo $cat['nombre'] ?> </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label"> Descripción </label>
                                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Ingrese la descripción del producto"><?php echo $descripcion ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="imagen" class="form-label"> Imagen </label>
                                    <input type="file" class="form-control" id="imagen" name="imagen">
                                </div>
                                <button type="submit" class="btn btn-success" name="submit"> Agregar </button>
                                <a class="btn btn-danger" href="<?php echo BASE_URL ?>list-productos.php"> Cancelar </a>
                            </form>
                        </div>

                    </div>

                </div>
            </main>
            <?php require('layout/_footer.php') ?>
        </div>
    </div>
    <?php require('layout/_js.php') ?>
</body>

</html>