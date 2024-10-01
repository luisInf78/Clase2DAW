<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $cadena = $_GET["cadena"];
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        

// Verificar si es mayúscula
        if (ctype_upper($caracter)) {
            $cadena[$i]= strtolower($caracter);
        } else {
            // Verificar si es minúscula
            if (ctype_lower($caracter)) {
                $cadena[$i] = strtoupper($caracter);
            }
        }
    }//fin for
    echo $cadena;
    
    ?>
</body>

</html>