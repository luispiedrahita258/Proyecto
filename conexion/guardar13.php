<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "secciones";

$conexion = mysqli_connect($server, $usuario, $contraeña, $bd)
    or die ("Error en la conexion");

$Actividad2 = $_POST ['actividad2'];
$Subactividades7= $_POST ['subactividades7'];
$Subactividades8 = $_POST ['subactividades8'];
$Subactividades9 = $_POST ['subactividades9'];

$insertar = "INSERT into seccion13 values ( '$id', '$Actividad2','$Subactividades7', '$Subactividades8', '$Subactividades9' )";

$resultado = mysqli_query($conexion,$insertar)
or die ("Error al insertar datos");


mysqli_close($conexion);
echo "Datos insertados correctamente";

    ?>