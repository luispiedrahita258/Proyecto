<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "secciones";

$conexion = mysqli_connect($server, $usuario, $contraeña, $bd)
    or die ("Error en la conexion");

$Actividad1 = $_POST ['actividad1'];
$Subactividades4= $_POST ['subactividades4'];
$Subactividades5 = $_POST ['subactividades5'];
$Subactividades6 = $_POST ['subactividades6'];

$insertar = "INSERT into seccion10 values ( '$id', '$Actividad1','$Subactividades4', '$Subactividades5', '$Subactividades6' )";

$resultado = mysqli_query($conexion,$insertar)
or die ("Error al insertar datos");


mysqli_close($conexion);
echo "Datos insertados correctamente";

    ?>