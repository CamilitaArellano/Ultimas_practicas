<!DOCTYPE>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>guardar informacion</title>
</head>
<body>

<h2>registro de alumnos 3A</h2>
<form method="POST">
	nombre del alumno:
	<input type="text" name="nombre" required>
	<br><br>
	edad del alumno:
	<input type="number" name="edad" required>
    <br><br>
    pasatiempo:
    <input type="text" name="pasatiempo" required>
	<br><br>
    <button type="submit" name="guardar">Guardar</button>
    </form>

    <form method="POST">
    <button type="submit" name="borrar">Borrar todo</button>
    </form>

<?php
    $archivo = "programacion.txt";

    if (isset($_POST["guardar"])) {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $pasatiempo = $_POST["pasatiempo"];

        $registro = "Nombre: $nombre <br><br> Edad: $edad <br><br> Pasatiempo: $pasatiempo" . PHP_EOL;
        file_put_contents($archivo, $registro, FILE_APPEND);
        echo "<p>Datos guardados correctamente.</p>";
    }

    if (isset($_POST["borrar"])) {
        file_put_contents($archivo, "");
        echo "<p>Registros borrados correctamente.</p>";
    }
    ?>

    <h3>Alumnos registrados</h3>
    <?php
    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        echo nl2br($contenido);
    }
    ?>
</body>
</html>