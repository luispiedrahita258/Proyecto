<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "secciones";

$conexion = mysqli_connect($server, $usuario, $contraeña, $bd)
    or die ("Error en la conexion");


$Componente = $_POST ['componente'];
$Producto = $_POST ['producto'];
$Actividad = $_POST ['actividad'];

$insertar = "INSERT into seccion2 values ( '$id', '$Componente', '$Producto', '$Actividad' )";

$resultado = mysqli_query($conexion,$insertar)
or die ("Error al insertar datos");


mysqli_close($conexion);
echo "Datos insertados correctamente";



?>