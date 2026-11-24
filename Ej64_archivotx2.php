<!DOCTYPE>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>guardar informacion</title>
</head>
<body>
<h2>registro de alumnos</h2>

<h2>registro de alumnos 3A</h2>
<form method="POST">
	nombre del alumno:
	<input type="text" name="nombre" required>
    <button type="submit" name="guardar">Guardar</button>
    </form>

<?php
if (isset($_POST["guardar"])) {
$nombre=$_POST["nombre"];
file_put_contents("programacion.txt",$nombre . PHP_EOL, FILE_APPEND);
echo "<p>nombre guardado correctamente</p>";}
?>

<h3>lista de alumnos registrados</h3>

<?php
if(file_exists("programacion.txt")){
	$contenido=file_get_contents("programacion.txt");
    echo nl2br($contenido);}
?>
</body>
</html>


