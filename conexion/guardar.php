<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "secciones";
header("Location:../buttons.php");

$conexion = mysqli_connect($server, $usuario, $contraeña, $bd)
    or die ("Error en la conexion");


$Nombre = $_POST['txtNombre'];
$Justificacion = $_POST['txtJustificacion'];
$Objetivo = $_POST ['txtObjetivo'];
$Especifico = $_POST ['txtEspecifico'];
$Sector = $_POST ['cmbSector'];
$Tipo = $_POST ['txtTipo'];
$Articulacion = $_POST ['cmbArticulacion'];

$insertar = "INSERT into seccion1 values ( '$id','$Nombre', '$Justificacion', '$Objetivo', '$Especifico', '$Sector', '$Tipo', '$Articulacion')";

$resultado = mysqli_query($conexion, $insertar)
    or die ( "Error al insertar datos");


mysqli_close($conexion);
echo "Datos insertados correctamente";


?>