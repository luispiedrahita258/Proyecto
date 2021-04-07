<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "secciones";

$conexion = mysqli_connect($server, $usuario, $contraeña, $bd)
    or die ("Error en la conexion");
 $Producto2 = $_POST ['producto2'];
$Subproductos7= $_POST ['subproductos7'];
$Subproductos8 = $_POST ['subproductos8'];
$Subproductos9 = $_POST ['subproductos9'];

$insertar = "INSERT into seccion12 values ( '$id', '$Producto2','$Subproductos7', '$Subproductos8', '$Subproductos9' )";

$resultado = mysqli_query($conexion,$insertar)
or die ("Error al insertar datos");


mysqli_close($conexion);
echo "Datos insertados correctamente";

    ?>