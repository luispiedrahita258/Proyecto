<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "secciones";

$conexion = mysqli_connect($server, $usuario, $contraeña, $bd)
    or die ("Error en la conexion");

$Actividad = $_POST ['actividad'];
$Subactividades= $_POST ['subactividades'];
$Subactividades1 = $_POST ['subactividades1'];
$Subactividades2 = $_POST ['subactividades2'];

$insertar = "INSERT into seccion7 values ( '$id', '$Actividad','$Subactividades', '$Subactividades1', '$Subactividades2' )";

$resultado = mysqli_query($conexion,$insertar)
or die ("Error al insertar datos");


mysqli_close($conexion);
echo "Datos insertados correctamente";

    ?>