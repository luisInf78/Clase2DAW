<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $cadena = $_GET["cadena"];
    $caracter = $_GET["car"];
    $cont = 0;

   
    if ( strlen($caracter)!=1)
        echo "Ha introducido un caracter no válido";

    else{
        for ($i = 0; $i < strlen($cadena); $i++)
            if ($cadena[$i] == $caracter)
                $cont++;

        echo  "En la cadena $cadena aparecen $cont veces el caracter $caracter";
    }


    ?>
</body>

</html>