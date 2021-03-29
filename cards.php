<?php require_once "vistas/parte_superior.php"?>

<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'registro');
    ?>

<!--INICIO del cont principal-->
<h3 class="text-center text-light"></h3>
<h4 class="text-center text-light">Lista de<span class="badge badge-danger">Lista de PROYECTOS</span></h4>
<!--FIN del cont principal-->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <hr>
            <br>
            <a href="buttons.php"class="fa fa-plus-square btn-lg active" role="button" aria-pressed="true">Nuevo Proyecto</a>
            <br>
        </div>

    </div>

</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Proceso</th>
                            <th>Objeto</th>
                            <th>Region</th>
                            <th>Departamento</th>
                            <th>Municipio</th>
                            <th>Tipologia</th>
                            <th>Sector</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td></td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td></td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td></td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Luis</td>
                            <td>Eduardo</td>
                            <td>Objeto</td>
                            <td>Pacifica</td>
                            <td>Departamento</td>
                            <td>Municipio</td>
                            <td>Tipologia</td>
                            <td>Sector</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>

</div>

<?php require_once "vistas/parte_inferior.php"?>
