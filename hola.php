<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $variable= "HOLA";
        echo $variable;

        $numero = 10;
        $numero2 = 20;

        $suma = $numero + $numero2;
        $resta = $numero - $numero2;
        $multiplicacion = $numero * $numero2;
        $divicion = $numero / $numero2;


        echo"<br>";
        echo $numero ."+". $numero2."=".$suma;
        echo"<br>";
        echo $numero ."-". $numero2."=".$resta;
        echo"<br>";
        echo $numero ."*". $numero2."=".$multiplicacion;
        echo"<br>";
        echo $numero ."/". $numero2."=".$divicion;
        



    ?>
    
</body>
</html>