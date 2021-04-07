<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "secciones";

$conexion = mysqli_connect($server, $usuario, $contraeña, $bd)
    or die ("Error en la conexion");
 $Producto = $_POST ['producto'];
$Subproductos= $_POST ['subproductos'];
$Subproductos1 = $_POST ['subproductos1'];
$Subproductos2 = $_POST ['subproductos2'];

$insertar = "INSERT into seccion6 values ( '$id', '$Producto','$Subproductos', '$Subproductos1', '$Subproductos2' )";

$resultado = mysqli_query($conexion,$insertar)
or die ("Error al insertar datos");


mysqli_close($conexion);
echo "Datos insertados correctamente";

    ?>