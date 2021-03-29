<?php require_once "vistas/parte_superior.php"?>
<?php require_once 'ajax.php';
//print_r($_SESSION);
?>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esta descripción es la que aparece en los buscadores debajo de la URL" />
    <link href="./css/practica7.css" rel="stylesheet" type="text/css" />
    <link href="./css/formulario.css" rel="stylesheet" type="text/css" />
    <link href="./css/resets.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,700,800&display=swap" rel="stylesheet">
    <title>Registro</title>
</head>

<header>
    <a href="" class='logo'>
        
    </a>
    <nav>
        <a class="ultimos" href="buttons.php">Principal</a>
        <a href="paso2.php">Paso 2</a>
        <a href="paso3.php">Paso 3</a>
        <a href="paso4.php">Paso 4</a>
        <a href="">Paso 5</a>
    </nav>
    <div class="options">
       
        <!-- <div class="userMenu">
					<a href="">Login</a>
					<a href="">Registrarme</a>
				</div> -->
    </div>

</header>

<main>
    <div class="container-fluid py-5">
        <div class="row mb-5">
            <div class="col-xl-12">
                <h1 class="text-center text-primary">Cotizador</h1>
            </div>
        </div>
        <div class="row">
            <!--Form-->
            
            <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                    
                        <h4 class="card-tittle">Agregar nuevo concepto</h4>
                        <form action="" id="do_add_concept">
                            <div class="form-group row">
                                <div class="col-xl-6">
                                    <label for="concepto">Concepto</label>
                                    <input type="text" class="form-control" id="concepto"
                                        placeholder="Escribe un concepto" required>

                                </div>
                                <div class="col-xl-3">
                                    <label for="concepto">Precio</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" id="precio" placeholder="0.00" required>
                                    </div>
                                </div>


                                <div class="col-xl-3">
                                    <label for="concepto">Cantidad</label>
                                    <input type="number" class="form-control" id="cantidad" value="1" min="1" max="99">

                                </div>

                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Agregar Concepto</button>
                                <button class="btn btn-danger" type="reset">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                <div class="col-xl-12" id="wrapper-form">
                <!--Ajax full-->
                </div>
            </div>
               

            </div>
            <!-- Table -->
            <div class="col-xl-6" id="wrapper-cotizacion">

            <!---Ajax Full-->
 


            </div>

        </div>

        <div class="submit">
    <button type="button"  class="btn btn-primary btn-sm">Anterior</button>
<button type="button" class="btn btn-secondary btn-sm">Siguiente</button>
</div>
    </div>


</main>




<?php require_once "vistas/parte_inferior.php"?>