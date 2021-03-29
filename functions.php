<?php
function insertar_datos($ID,$Nombre,$Proceso,$Objeto,$Region,$Departamento,$Municipio,$Tipologia,$Sector){
    global $conexion;
    $sentencia ="INSERT INTO lista(ID,Nombre,Proceso,Objeto,Region,Departamento,Municipio,Tipologia,Sector) VALUES ('$ID','$Nombre','$Proceso','$Objeto','$Region','$Departamento','$Municipio','$Tipologia','$Sector')";
    
    $ejecutar = mysqli_query($conexion,$sentencia);
        return $ejecutar;
    
}

?>