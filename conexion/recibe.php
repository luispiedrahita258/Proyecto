<?php
  $server = "localhost";
  $usuario = "root"; 
  $contraseña = ""; 
  $bd = "registro";
  $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)

  or die("error en la conexion"); 

$Nombre = $_POST ['txtNombre'];
$Proceso = $_POST ['txtProceso'];
$Objeto = $_POST['txtObjeto'];
$Region = $_POST ['cmbSexo'];
$Departamento = $_POST ['cmbDepartamento'];
$Municipio = $_POST ['cmbMunicipio'];
$Tipologia = $_POST ['cmbTipologia'];
$Sector = $_POST ['cmbSector'];


  $insertar = "INSERT into lista values( '$ID', '$Nombre','$Proceso','$Objeto', '$Region', '$Departamento', '$Municipio', '$Tipologia', '$Sector')";
  $resultado = mysqli_query($conexion, $insertar)
  or die ("Error al insertar registros");

  mysqli_close($conexion);
  echo "datos insertados bn";

 
  ?>
