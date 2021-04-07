<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "secciones";

$conexion = mysqli_connect($server, $usuario, $contraeña, $bd)
    or die ("Error en la conexion");
 $Producto1 = $_POST ['producto1'];
$Subproductos4= $_POST ['subproductos4'];
$Subproductos5 = $_POST ['subproductos5'];
$Subproductos6 = $_POST ['subproductos6'];

$insertar = "INSERT into seccion9 values ( '$id', '$Producto1','$Subproductos4', '$Subproductos5', '$Subproductos6' )";

$resultado = mysqli_query($conexion,$insertar)
or die ("Error al insertar datos");


mysqli_close($conexion);
echo "Datos insertados correctamente";

    ?>