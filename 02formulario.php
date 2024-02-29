<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
<h1>RESULTADO</h1>
<!-- Contenido php -->
<?php

 //Con esto nos aseguramos que venimos del formulario
 if ($_SERVER["REQUEST_METHOD"]=="POST"){
    // En php recuperamos por name, tenemos un input name="nombre"
    $nombre = $_POST["nombre"];
    // En php recuperamos por name, tenemos un input name="asignatura"
    $asignatura = $_POST["asignatura"];
    // En php recuperamos por name, tenemos un input name="nota"
    $nota = $_POST["nota"];

    if ($nombre == "" || $asignatura == "" || $nota == "") {
        echo "<p class=\"error\">HAY QUE INTRODUCIR TODOS LOS DATOS</p>";
    }else{
        if (!is_numeric($nota)){ // is_numeric($nota) == false
            echo "<p class=\"error\">Nota tiene que ser numérica.</p>";
        }else{
            $nomCompAsig;
            switch ($asignatura) {
                case 'apw':
                    # code...
                    $nomCompAsig = "Aplicaciones Web";
                    break;
                case 'mme':
                    # code...
                    $nomCompAsig = "Montaje y mantenimiento de equipos";
                    break;
                case 'eie':
                    # code...
                    $nomCompAsig = "Empresa e iniciativa emprendedora";
                    break;
                default:
                    $nomCompAsig = "";
                    break;
            }

            echo "<p>Alumn@ se llama: $nombre</p>";
            echo "<p>En la asignatura de: $asignatura - $nomCompAsig tiene un $nota.</p>";
        }
   }
 }else{
    echo "<p>Debes acceder a través del formulario.</p>";
    echo "<a href=\"02formulario.html\">Pincha aquí</a>";

 }



?>

</body>
</html>