<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>Tabla de multiplicar</h1>

    <form action="" method="post">
        <label for="num">Número:</label>
        <input type="number" name="num" id="num" placeholder="Introduce un número">

        <input type="submit" value="Calcula">
    </form>
    
    <?php
        //Ver si vengo del formulario.
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
           
            $numero = $_POST["num"];
            if ($numero != ""){
                 echo "<h2> Tabla del: $numero</h2>";
                //Esto vale para depurar .. var_dump ($numero); 
                for ($i=0; $i < 11 ; $i++) { 
                    $res = $numero * $i;
                    echo "<p>$numero * $i = $res</p>";
                }
            }else{
                echo "<p class=\"error\">Anda introduce un número...</p>";
            }
        }

    ?>



</body>
</html>