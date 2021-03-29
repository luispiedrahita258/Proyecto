<?php require_once "vistas/parte_superior.php"?>

<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'registro');

if (isset($_POST["enviar"])){//nos permite recepcionar una variable que si existe y que no sea null
    echo "Se hizo click en el boton enviar";
    require_once ("functions.php");

    $archivo = $_FILES["archivo"]["name"];
    $archivo_copiado = $_FILES["archivo"]["tmp_name"];
    $archivo_guardado = "copia_" .$archivo;


    echo $archivo, "esta en la ruta temporal: <br/>" ,$archivo_copiado;

    if (copy($archivo_copiado, $archivo_guardado)){
        # code...
        echo "Se copio correctamente el archivo temporal a nuestra carpeta de trabajo <br/>";
    }else{
        //echo "hubo un error";
}

if (file_exists(($archivo_guardado))){
$fp = fopen($archivo_guardado, "r" );//abrir el archivo
    $row = 0;

    while ($datos = fgetcsv($fp, 1000, ";")){
        $row ++;
          //echo $datos[0]."".$datos[1]."".$datos[2]."".$datos[3]."".$datos[4]."".$datos[5]."".$datos[6]."".$datos[7]."".$datos[8] ."</br>";
        if($row > 1){
            $resultado = insertar_datos ($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6],$datos[7],$datos[8] );
        if($resultado){
            echo "Se inserto los datos correctamente";
        }else{
echo " No se inserto";
        }
        }
    }


}else{
    echo "no existe el archivo copiado <br/>";
}



    }
    ?>




<div class="container">

    <div class="formulario">
        <form action="lista.php" class="formularioconpleto" method="post" enctype="multipart/form-data">
            <input type="file" name="archivo" class="form-control">
            <br>
            <input type="submit" value="SUBIR ARCHIVO" class="form-control" name="enviar">
        </form>
    </div>
</div>





<br>
<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <br>
                            <br>
                            <hr>
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Proceso</td>
                            <td>Objeto</td>
                            <td>Region</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
         $sql ="SELECT * from lista";
        $result = mysqli_query($conexion,$sql);


        while($mostrar=mysqli_fetch_array($result)){


        ?>

                        <tr>
                            <td><?php echo $mostrar['ID']?></td>
                            <td><?php echo $mostrar['Nombre']?></td>
                            <td><?php echo $mostrar['Proceso']?></td>
                            <td><?php echo $mostrar['Objeto']?></td>
                            <td><?php echo $mostrar['Region']?></td>
                            <td><?php echo $mostrar['Departamento']?></td>
                            <td><?php echo $mostrar['Municipio']?></td>
                            <td><?php echo $mostrar['Tipologia']?></td>
                            <td><?php echo $mostrar['Sector']?></td>

                        </tr>
                        <?php
            }
        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


<?php require_once "vistas/parte_inferior.php"?>