<?php
$include("conexion.php");
$usuario = $_POST("usuario");
$producto = $_POST("producto");
$calificacion = $_POST("calificacion");
$cometario = $_POST("comentario");


$insertar = INSERT INTO `comentarios` (`id`, `usuario`, `producto`, `calificacion`, `comentario`) VALUES (NULL, '$usuario', '$producto', '$calificacion', '$comentario');

$verificar = mysqli_query($conexion, SELECT * FROM `comentarios` where usuario = '$usuario'");

if(mysqli_num_rows($verificar) > 0){
  echo '<script>
        window.history.go(-1);
        alert("el usuario ya ha comentado");
        </script>';
  exit;
}
else {
    $resultado = mysqli_query($conexion,$insertar);
    header("location: ALTAS.html");
}

mysqli_close($conexion);

?>
