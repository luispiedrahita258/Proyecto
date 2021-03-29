<?php require_once "vistas/parte_superior.php"?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esta descripción es la que aparece en los buscadores debajo de la URL" />
    <link href="./css/practica7.css" rel="stylesheet" type="text/css" />
    <link href="./css/formulario.css" rel="stylesheet" type="text/css" />
    <link href="./css/resets.css" rel="stylesheet" type="text/css" />

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/font-awesome.css">
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
    <h1>Cronograma del Proyecto</h1>
    <form>

        <div class="field">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="field">

            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="field">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>

    </form>

    <form>

        <div class="field">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="field">

            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="field">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>


    </form>
    <form>

        <div class="field">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="field">

            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="field">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>


    </form>
</main>

<main>
    <h1>Presupuesto estimado</h1>

    <form>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control" id="precio" placeholder="0.00" required>
        </div>
    </form>
</main>

<main>
<h1>Fuentes de financiación</h1>
<form>
<div class='field'>
            <label>Fuentes de financiación</label>
            <select name='estadoLaboral' required>
                <option selected disabled>Sel. una opción</option>
                <option>Nacional</option>
                <option>Departamental</option>
                <option>Municipal</option>
            </select>
        </div>



</form>
</main>

<main>
<h1>Sector inversión</h1>

<form>

<div class='field'>
            <label>Sector</label>
            <select name='estadoLaboral' required>
                <option selected disabled>Sel. una opción</option>
                <option>Nacional</option>
                <option>Departamental</option>
                <option>Municipal</option>
                <option>Municipal</option>
                <option>Municipal</option>
                <option>Municipal</option>
                <option>Municipal</option>
                <option>Municipal</option>
                <option>Municipal</option>
                <option>Municipal</option>
                <option>Municipal</option>
                <option>Municipal</option>
            </select>
        </div>
        <div class='field'>
            <label>Por concepto de:</label>
            <textarea></textarea>
        </div>
</main>


<?php require_once "vistas/parte_inferior.php"?>