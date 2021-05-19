<?php
$usuario = "root";
$contrasena = "";
$servidor = "localhost";
$basededatos = "comentarios";

$conexions = mysqli_connect( $servidor, $usuario, $contrasena);

$db = mysqli_select_db( $conexion, $basededatos);

?>
