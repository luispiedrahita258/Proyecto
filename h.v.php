<?php require_once "vistas/parte_superior.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <title>Document</title>

</head>

<body>


    <div class="wrap">
        <ul class="tabs">
            <li><a href="#tab1"><span class="fa fa-outdent"></span><span class="tab-text">Datos
                        Personales </span></a>
            </li>
            <li><a href="#tab2"><span class="fa fa-th"></span><span class="tab-text">Experiencia</span></a></li>
            <li><a href="#tab3"><span class="fa fa-paperclip"></span><span class="tab-text">Estudios</span></a></li>
            <li><a href="#tab4"><span class="fa fa-clipboard"></span><span class="tab-text">Referencia
                        Personal</span></a></li>
            <li><a href="#tab5"><span class="fa fa-file-text"></span><span class="tab-text">Referencia
                        Familiares</span></a></li>
            <li><a href="#tab6"><span class="fa fa-user-circle"></span><span class="tab-text">Perfil
                        Profesional</span></a></li>


        </ul>

        <div class="secciones">
            <article id="tab1">

                <!-- Button to Open the Modal -->
                <div style="text-align: right;width:440px">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Añadir
                    </button>
                </div>
                <!-- The Modal -->
                <div class="modal" id="myModal2">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos Personales</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Nombre Completo</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Apellidos</label>
                                        <input type="password" class="form-control" id="inputPassword4">
                                    </div>
                                    <hr>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Tipo de documento:</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Numero</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress2" class="form-label">Fecha de Nacimiento</label>

                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">Dia</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">

                                        <label for="inputState" class="form-label">Mes</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">

                                        <label for="inputState" class="form-label">Año</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <br>
                                        <label for="inputAddress2" class="form-label">Genero</label>

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Hombre</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Mujer</label>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <label for="inputAddress2" class="form-label">Estado civil</label>

                                    </div>

                                    <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>

                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Telefono</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">(+)</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">Numero </label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">

                                    </div>
                                    <br>


                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Telefono 2</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">(+)</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">Numero </label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">

                                    </div>
                                    <div class="col-md-8">
                                        <label for="inputEmail4" class="form-label">Correo Electronico</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <label for="inputAddress2" class="form-label">Pais</label>

                                    </div>
                                    <select class="form-select form-select-lg mb-3"
                                        aria-label=".form-select-lg example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="col-12">
                                        <br>
                                        <label for="inputAddress2" class="form-label">Departamento</label>

                                    </div>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="col-12">
                                        <br>
                                        <label for="inputAddress2" class="form-label">Ciudad</label>

                                    </div>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="col-12">
                                        <br>
                                        <label for="inputAddress2" class="form-label">Nacionalidad</label>

                                    </div>
                                    <select class="form-select form-select-lg mb-3"
                                        aria-label=".form-select-lg example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="col-12">
                                        <br>
                                        <label for="inputAddress2" class="form-label">Licencia de Conducción</label>

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">A1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">A2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">B1 </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">B2 </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">B3 </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">C1 </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">C2 </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">C3 </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">No Tengo </label>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <label for="inputAddress2" class="form-label">Dispone de Vehiculo Propio</label>

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Si</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">No </label>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <label for="inputAddress2" class="form-label">Discapacidad</label>

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Si</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">No </label>
                                    </div>

                                </form>
                            </div>


                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Añadir</button>
                            </div>

                        </div>
                    </div>
                </div>





            </article>
            <article id="tab2">
                <!-- Botón -->

                <div style="text-align: right;width:440px">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Añadir
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Añadir Experiencia</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1 class=" form-label"><b>Empresa:</b></label>
                                    <input type="email" class="form-control"
                                        id="exampleFormControlTextarea1  placeholder="">
</div>
<hr>
<select class=" form-select" aria-label="Default select example">
                                    <option selected>Departamento:</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                    <hr>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Sector de la empresa:</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1 class="
                                            form-label"><b>Cargo:</b></label>
                                        <input type="email" class="form-control"
                                            id="exampleFormControlTextarea1  placeholder="">
</div>
<hr>
<select class=" form-select" aria-label="Default select example">
                                        <option selected>Sector de la empresa:</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                        <hr>
                                        <label for="exampleFormControlTextarea1 class=" form-label"><b>Periodo
                                                Inicial:</b></label>
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <hr>
                                        <label for="exampleFormControlTextarea1 class=" form-label"><b>Periodo
                                                Final:</b></label>
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <hr>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Actualmente.
                                            </label>
                                        </div>
                                        <hr>
                                        <div class=" mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label"><b>Descripción
                                                    breve de tu perfil
                                                    profesional:</b></label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Maximo 500 caracteres...."></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-success"
                                                data-dismiss="modal">Añadir</button>
                                        </div>

            </article>
            <article id="tab3">
                <!-- Button to Open the Modal -->
                <div style="text-align: right;width:440px">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Añadir
                    </button>
                </div>
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Formacion</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <label for="exampleFormControlTextarea1" class="form-label"><b>Centro
                                        Educativo</b></label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea"></textarea>

                                </div>
                                <hr>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Nivel de Estudios</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <hr>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Culminado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Cursando</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">Abandonado/Aplazado</label>
                                </div>
                                <hr>
                                <label for="exampleFormControlTextarea1" class="form-label"><b>Periodo de
                                        Inicio</b></label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                                    <option selected>Mes</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                                    <option selected>Año</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <hr>
                                <label for="exampleFormControlTextarea1" class="form-label"><b>Periodo de
                                        Finalización</b></label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                                    <option selected>Mes</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                                    <option selected>Año</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Añadir</button>
                            </div>



            </article>
            <article id="tab4">
                <div style="text-align: right;width:440px">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModa3">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Añadir
                    </button>
                </div>

                <!-- The Modal -->
                <div class="modal" id="myModa3">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Referencias Perosnales</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form class="row g-3">
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1 class="
                                                form-label"><b>Nombre</b></label>
                                            <input type="text" class="form-control" placeholder="First name"
                                                aria-label="First name">
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1 class="
                                                form-label"><b>Apellido</b></label>
                                            <input type="text" class="form-control" placeholder="Last name"
                                                aria-label="Last name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Telefono</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">(+)</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">Numero </label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">

                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1 class="
                                                form-label"><b>Nombre</b></label>
                                            <input type="text" class="form-control" placeholder="First name"
                                                aria-label="First name">
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1 class="
                                                form-label"><b>Apellido</b></label>
                                            <input type="text" class="form-control" placeholder="Last name"
                                                aria-label="Last name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Telefono</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">(+)</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">Numero </label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">

                                    </div>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Añadir</button>
                            </div>

                        </div>
                    </div>
                </div>

            </article>
            <article id="tab5">
                <div style="text-align: right;width:440px">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Añadir
                    </button>
                </div>
                <!-- The Modal -->
                <div class="modal" id="myModal4">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Referencias Familiares</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form class="row g-3">
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1 class="
                                                form-label"><b>Nombre</b></label>
                                            <input type="text" class="form-control" placeholder="First name"
                                                aria-label="First name">
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1 class="
                                                form-label"><b>Apellido</b></label>
                                            <input type="text" class="form-control" placeholder="Last name"
                                                aria-label="Last name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Telefono</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">(+)</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">Numero </label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">

                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1 class="
                                                form-label"><b>Nombre</b></label>
                                            <input type="text" class="form-control" placeholder="First name"
                                                aria-label="First name">
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlTextarea1 class="
                                                form-label"><b>Apellido</b></label>
                                            <input type="text" class="form-control" placeholder="Last name"
                                                aria-label="Last name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Telefono</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">(+)</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">
                                    </div>
                                    <div class="col-md-4">


                                        <label for="inputState" class="form-label">Numero </label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">

                                    </div>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Añadir</button>
                            </div>

                        </div>
                    </div>
                </div>

            </article>
            <article id="tab6">
                <div style="text-align: right;width:440px">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Añadir
                    </button>
                </div>
                <!-- The Modal -->
                <div class="modal" id="myModal5">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Perfil Profesional</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1 class=" form-label"><b>Cargo o titulo breve
                                            de su hoja de
                                            vida:</b></label>
                                    <input type="email" class="form-control"
                                        id="exampleFormControlTextarea1  placeholder="">
</div>
		<div class=" mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label"><b>Descripción breve de
                                            tu perfil
                                            profesional:</b></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Maximo 500 caracteres...."></textarea>
                                </div>


                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Añadir</button>
                                </div>

                            </div>
                        </div>
                    </div>

            </article>


        </div>
    </div>
    <center>
        <img src="./img/1.png" border="50" width="750" height="750">
    </center>
</body>

<?php require_once "vistas/parte_inferior.php"?>