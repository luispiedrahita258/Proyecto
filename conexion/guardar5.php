<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "secciones";

$conexion = mysqli_connect($server, $usuario, $contraeña, $bd)
    or die ("Error en la conexion");

$Componente = $_POST ['componente'];
$Subcomponentes = $_POST ['subcomponentes'];
$Subcomponentes1 = $_POST ['subcomponentes1'];
$Subcomponentes2 = $_POST ['subcomponentes2'];

$insertar = "INSERT into seccion5 values ( '$id', '$Componente', '$Subcomponentes', '$Subcomponentes1', '$Subcomponentes2' )";

$resultado = mysqli_query($conexion,$insertar)
or die ("Error al insertar datos");


mysqli_close($conexion);
echo "Datos insertados correctamente";

    ?>