<!DOCTYPE>
<html lange="es">
<head>
    <meta charset="UTF-8">
    <title>guardar informacion</title>
</head>
<body>
<h2>guardar informacion en un archivo</h2>

<?php
   $nombre="camila";
   file_put_contents("alumnos.txt",$nombre . PHP_EOL, FILE_APPEND);
   echo "informacion guardada correctamente";
   echo "<br><br>";

?>

<?php
   echo "<br><br>";
   $nombre="lesly";
   file_put_contents("alumnos.txt",$nombre . PHP_EOL, FILE_APPEND);
   echo "alumna guardada correctamente";
?>
<?php
   echo "<br><br>";
   $contenido=("alumnos.txt",$nombre  


</body>
</html>
