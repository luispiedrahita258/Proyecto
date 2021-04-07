<?php require_once "vistas/parte_superior.php"?>

<!DOCTYPE html>


<html lang="es">

<head>
    <title>Prueba Formulario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--FontAwesome Icons-->
    <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/font-awesome.css">

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>



<body>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="card text-center">
            <h5 class="card-header">SECCIÓN I</h5>

            <div class="card-body">
                <form id="formDatos" class="row g-3 needs-validation" action="conexion/guardar.php" method="POST">
                    <div class="col-md-4">
                        <label> Nombre del proyecto:</label>
                        <input type="text" id="txtNombre"  name="txtNombre" class="form-control"  ><br />
                    </div>
                    <div class="col-md-4">
                        <label> Justificacion:</label>

                        <input type="text" id="txtJustificacion" name="txtJustificacion" class="form-control" ><br />
                    </div>
                    <div class="col-md-4">
                        <label>Objetivo Principal:</label>
                        <input type="text" id="txtObjetivo" name="txtObjetivo" class="form-control" ><br />
                    </div>
                    <div class="col-md-4">
                        <label>Objetivo Especifico: </label>
                        <input type="text" id="txtEspecifico" name="txtEspecifico" class="form-control" ><br />
                    </div>
                    <div class="col-md-4">
                        <label>Sector:</label>
                        <select class="form-select" id="cmbSector" name="cmbSector" ><br />
                            <option value="Logistica">Logistica</option>
                            <option value="Educativo">Educativo</option>
                        </select><br />
                    </div>
                    <div class="col-md-4">
                        <label>Tipo de Proyecto:</label>

                        <input type="text" id="txtTipo" name="txtTipo" class="form-control" ><br />
                    </div>
                    <div class="col-md-4">
                        <label>Articulacion:</label>
                        <select class="form-select" id="cmbArticulacion" name="cmbArticulacion" >
                            <option value="Municipal">Municipal</option>
                            <option value="Departamental">Departamental</option>
                            <option value="Nacional">Nacional</option>
                        </select>
                    </div>
                    <div class="col-md-12">

                        <input class="btn btn-success"  type="submit" value="Enviar Datos" name="btnguardar" >
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div class="container">


            <div class="card text-center">
                <div class="card-header">
                    <h5> SECCIÓN II</h5>
                </div>
                <div class="container">
                    <div class="card-body">


                        <div class="row g-3">
                            <div class="col">



                                <br>
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="fa fa-plus-square" aria-hidden="true">Agregar Componentes</i>
                                </button>

                                <!-- Modal -->
                                <form id="formDatos1" method="POST" action="conexion/guardar5.php">
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Componentes</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form  method="POST" action="conexion/guardar5.php">
                                                        <label>Componente</label>
                                                        <input  type="text" id="componente" name="componente" class="form-control"
                                                            placeholder="First name" aria-label="First name">
                                                        <label class="form-label">Subcomponentes</label>
                                                        <textarea class="form-control" id="subcomponentes"
                                                            name="subcomponentes"></textarea></br>
                                                        <label class="form-label">Subcomponentes</label>
                                                        <textarea class="form-control" id="subcomponentes1"
                                                            name="subcomponentes1"></textarea></br>
                                                        <label class="form-label">Subcomponentes</label>
                                                        <textarea class="form-control" id="subcomponentes2"
                                                            name="subcomponentes2"></textarea>
                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-success">Guardar
                                                        Cambios</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col">



                                <br>
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1">
                                    <i class="fa fa-plus-square" aria-hidden="true">Agregar Productos</i>
                                </button>

                                <!-- Modal -->
                                <form id="formDatos2" method="POST" action="conexion/guardar6.php">
                                    <div class="modal fade" id="exampleModal1" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Productos</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="conexion/guardar6.php">
                                                        <label>Producto</label>
                                                        <input type="text" id="producto" name="producto" class="form-control"
                                                            placeholder="Last name" aria-label="Last name">
                                                        <label class="form-label">Subproductos</label>
                                                        <textarea class="form-control" id="subproductos"
                                                            name="subproductos"></textarea></br>
                                                        <label class="form-label">Subproductos</label>
                                                        <textarea class="form-control" id="subproductos1"
                                                            name="subproductos1"></textarea></br>
                                                        <label class="form-label">Subproductos</label>
                                                        <textarea class="form-control" id="subproductos2" name="subproductos2"></textarea>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Guardar
                                                        Cambios</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col">



                                <br>
                                <br>
                                <!-- Button trigger modal -->

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">
                                    <i class="fa fa-plus-square" aria-hidden="true">Agregar Actividades</i>
                                </button>

                                <!-- Modal -->
                                <form id="formDatos3" method="POST" action="conexion/guardar7.php">
                                    <div class="modal fade" id="exampleModal2" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actividades</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="conexion/guardar7.php">
                                                        <label>Actividades</label>
                                                        <input type="text" id="actividad" name="actividad" class="form-control"
                                                            placeholder="Last name" aria-label="Last name">
                                                        <label class="form-label">Subactividades</label>
                                                        <textarea class="form-control" id="subactividades"
                                                            name="subactividades"></textarea></br>
                                                        <label class="form-label">Subactividades</label>
                                                        <textarea class="form-control" id="subactividades1"
                                                            name="subactividades1"></textarea></br>
                                                        <label class="form-label">Subactividades</label>
                                                        <textarea class="form-control" id="subactividades2"
                                                            name="subactividades2"></textarea>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Guardar
                                                        Cambios</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                        <br>

                    </div>
                </div>
                <div class="container">
                    <div class="card-body">


                        <div class="row g-3">
                            <div class="col">


                                <br>
                                <br>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3">
                                    <i class="fa fa-plus-square" aria-hidden="true">Agregar Componentes</i>
                                </button>

                                <!-- Modal -->
                                <form id="formDatos4" method="POST" action="conexion/guardar8.php">
                                    <div class="modal fade" id="exampleModal3" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Componentes</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form  method="POST" action="conexion/guardar8.php">
                                                        <label>Componente</label>
                                                        <input  type="text" id="componente1" name="componente1" class="form-control"
                                                            placeholder="First name" aria-label="First name">
                                                        <label class="form-label">Subcomponentes</label>
                                                        <textarea class="form-control" id="subcomponentes5"
                                                            name="subcomponentes5"></textarea></br>
                                                        <label class="form-label">Subcomponentes</label>
                                                        <textarea class="form-control" id="subcomponentes3"
                                                            name="subcomponentes3"></textarea></br>
                                                        <label class="form-label">Subcomponentes</label>
                                                        <textarea class="form-control" id="subcomponentes4"
                                                            name="subcomponentes4"></textarea>
                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Guardar
                                                        Cambios</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col">
                                
                                <br>
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal4">
                                    <i class="fa fa-plus-square" aria-hidden="true">Agregar Productos</i>
                                </button>

                                <form id="formDatos5" method="POST" action="conexion/guardar9.php">
                                    <div class="modal fade" id="exampleModal4" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Productos</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form method="POST" action="conexion/guardar9.php">
                                                        <label>Producto</label>
                                                        <input type="text" id="producto1" name="producto1" class="form-control"
                                                            placeholder="Last name" aria-label="Last name">
                                                        <label class="form-label">Subproductos</label>
                                                        <textarea class="form-control" id="subproductos4"
                                                            name="subproductos4"></textarea></br>
                                                        <label class="form-label">Subproductos</label>
                                                        <textarea class="form-control" id="subproductos5"
                                                            name="subproductos5"></textarea></br>
                                                        <label class="form-label">Subproductos</label>
                                                        <textarea class="form-control" id="subproductos6" name="subproductos6"></textarea>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Guardar
                                                        Cambios</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col">
                              
                                <br>
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal5">
                                    <i class="fa fa-plus-square" aria-hidden="true">Agregar Actividades</i>
                                </button>

                                <!-- Modal -->
                                <form id="formDatos6" method="POST" action="conexion/guardar10.php">
                                    <div class="modal fade" id="exampleModal5" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actividades</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form method="POST" action="conexion/guardar10.php">
                                                        <label>Actividades</label>
                                                        <input type="text" id="actividad1" name="actividad1" class="form-control"
                                                            placeholder="Last name" aria-label="Last name">
                                                        <label class="form-label">Subactividades</label>
                                                        <textarea class="form-control" id="subactividades4"
                                                            name="subactividades4"></textarea></br>
                                                        <label class="form-label">Subactividades</label>
                                                        <textarea class="form-control" id="subactividades5"
                                                            name="subactividades5"></textarea></br>
                                                        <label class="form-label">Subactividades</label>
                                                        <textarea class="form-control" id="subactividades6"
                                                            name="subactividades6"></textarea>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Guardar
                                                        Cambios</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                        </div>
                        <br>
                       

                        </form>
                    </div>
                </div>
                <div class="container">
                    <div class="card-body">
                        

                            <div class="row g-3">
                                <div class="col">

                                   
                                    <br>
                                    <br>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal6">
                                    <i class="fa fa-plus-square" aria-hidden="true">Agregar Componentes</i>
                                </button>

                                <!-- Modal -->
                                <form id="formDatos7" method="POST" action="conexion/guardar11.php">
                                    <div class="modal fade" id="exampleModal6" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Componentes</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form  method="POST" action="conexion/guardar11.php">
                                                        <label>Componente</label>
                                                        <input  type="text" id="componente2" name="componente2" class="form-control"
                                                            placeholder="First name" aria-label="First name">
                                                        <label class="form-label">Subcomponentes</label>
                                                        <textarea class="form-control" id="subcomponentes6"
                                                            name="subcomponentes6"></textarea></br>
                                                        <label class="form-label">Subcomponentes</label>
                                                        <textarea class="form-control" id="subcomponentes7"
                                                            name="subcomponentes7"></textarea></br>
                                                        <label class="form-label">Subcomponentes</label>
                                                        <textarea class="form-control" id="subcomponentes8"
                                                            name="subcomponentes8"></textarea>
                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Guardar
                                                        Cambios</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>

                                <div class="col">
                                  
                                    <br>
                                    <br>
                                    <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal7">
                                    <i class="fa fa-plus-square" aria-hidden="true">Agregar Productos</i>
                                </button>

                                <form id="formDatos8" method="POST" action="conexion/guardar12.php">
                                    <div class="modal fade" id="exampleModal7" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Productos</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form method="POST" action="conexion/guardar12.php">
                                                        <label>Producto</label>
                                                        <input type="text" id="producto2" name="producto2" class="form-control"
                                                            placeholder="Last name" aria-label="Last name">
                                                        <label class="form-label">Subproductos</label>
                                                        <textarea class="form-control" id="subproductos7"
                                                            name="subproductos7"></textarea></br>
                                                        <label class="form-label">Subproductos</label>
                                                        <textarea class="form-control" id="subproductos8"
                                                            name="subproductos8"></textarea></br>
                                                        <label class="form-label">Subproductos</label>
                                                        <textarea class="form-control" id="subproductos9" name="subproductos9"></textarea>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Guardar
                                                        Cambios</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>

                                <div class="col">
                                   
                                    <br>
                                    <br>
                                         <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal8">
                                    <i class="fa fa-plus-square" aria-hidden="true">Agregar Actividades</i>
                                </button>

                                <!-- Modal -->
                                <form id="formDatos9" method="POST" action="conexion/guardar13.php">
                                    <div class="modal fade" id="exampleModal8" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actividades</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form method="POST" action="conexion/guardar13.php">
                                                        <label>Actividades</label>
                                                        <input type="text" id="actividad2" name="actividad2" class="form-control"
                                                            placeholder="Last name" aria-label="Last name">
                                                        <label class="form-label">Subactividades</label>
                                                        <textarea class="form-control" id="subactividades7"
                                                            name="subactividades7"></textarea></br>
                                                        <label class="form-label">Subactividades</label>
                                                        <textarea class="form-control" id="subactividades8"
                                                            name="subactividades8"></textarea></br>
                                                        <label class="form-label">Subactividades</label>
                                                        <textarea class="form-control" id="subactividades9"
                                                            name="subactividades9"></textarea>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Guardar
                                                        Cambios</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            
                            <br>


                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-info" id="add-campo">Agregar Campos</button>
                </div>
                <br>
            </div>

        </div>

    </div>






    </div>
    </div>

    

</body>
<script src="jquery-3.2.1.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
</script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
<script type="text/javascript" src="1.js"></script>



</html>
<script type="text/javascript">

</script>

<?php require_once "vistas/parte_inferior.php"?>