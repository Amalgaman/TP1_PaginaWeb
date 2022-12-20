<?php

require_once("funciones/funcionesPHP.php");
require_once("funciones/juegos.php");
require_once("config/config.php");

try {
    $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
}catch(PDOException $e){
    header('Location: error.php');
}

$serial = test_input( $_GET['serial'] ?? null );

deleteJuego($conexion, $serial-10000);

header('Location: productos.php');
?>