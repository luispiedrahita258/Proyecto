<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "secciones";

$conexion = mysqli_connect($server, $usuario, $contraeña, $bd)
    or die ("Error en la conexion");

$Componente1 = $_POST ['componente1'];
$Subcomponentes5 = $_POST ['subcomponentes5'];
$Subcomponentes3 = $_POST ['subcomponentes3'];
$Subcomponentes4 = $_POST ['subcomponentes4'];

$insertar = "INSERT into seccion8 values ( '$id', '$Componente1', '$Subcomponentes5', '$Subcomponentes3', '$Subcomponentes4' )";

$resultado = mysqli_query($conexion,$insertar)
or die ("Error al insertar datos");


mysqli_close($conexion);
echo "Datos insertados correctamente";

    ?>