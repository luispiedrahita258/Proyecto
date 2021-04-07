<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "secciones";

$conexion = mysqli_connect($server, $usuario, $contraeña, $bd)
    or die ("Error en la conexion");

$Componente2 = $_POST ['componente2'];
$Subcomponentes6 = $_POST ['subcomponentes6'];
$Subcomponentes7 = $_POST ['subcomponentes7'];
$Subcomponentes8 = $_POST ['subcomponentes8'];

$insertar = "INSERT into seccion11 values ( '$id', '$Componente2', '$Subcomponentes6', '$Subcomponentes7', '$Subcomponentes8' )";

$resultado = mysqli_query($conexion,$insertar)
or die ("Error al insertar datos");


mysqli_close($conexion);
echo "Datos insertados correctamente";

    ?>