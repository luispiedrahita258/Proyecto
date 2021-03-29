<?php require_once "vistas/parte_superior.php"?>

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
    <h1>Datos del Proyecto</h1>
    <form>
        <div class='field'>
            <label>Nombre Proyecto</label>
            <input name='nombre' type='name' required value="Nombre" placeholder='Nombre' autocomplete />
        </div>
        <div class='field'>
            <label>Numero ID</label>
            <input name='apellidos' type='name' autocomplete />
        </div>
        <div class='field'>
            <label>Descripcion del proyecto</label>
            <textarea></textarea>
        </div>
        <div class='field'>
            <label>Justificacion del proyecto</label>
            <textarea></textarea>
        </div>
        <div class='field'>
            <label>Alineación estrategica</label>
            <select name='estadoLaboral' required>
                <option selected disabled>Sel. una opción</option>
                <option>Nacional</option>
                <option>Departamental</option>
                <option>Municipal</option>
            </select>
        </div>

        <!--<div class='field'>
            <label>Objetivos</label>
            <input name='Email' type='email' autocomplete />
        </div>

        <div class='field'>
            <label>Generales</label>
            <textarea></textarea>
        </div>
        <div class='field'>
            <label>Especificos</label>

            <textarea></textarea>
        </div>-->
        <div class='textBox'>
            <label>Beneficios del proyecto</label>
            <textarea></textarea>
        </div>

<div class="submit">
<button class="botones" type="button" id="" class="btn btn-primary btn-sm">Anterior</button>
<button class="botones" type="button" id="" class="btn btn-secondary btn-sm">Siguiente</button>
</div>
    </form>

</main>

<?php require_once "vistas/parte_inferior.php"?>