<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $datos_correctos = TRUE;

    if (isset($_GET["minutos"]) && !empty($_GET["minutos"]))
        $minutos = $_GET["minutos"];
    else {
        echo "El valor minutos no ha sido introducido</br>";
        $datos_correctos = FALSE;
    }
   
    if ($datos_correctos) {
        echo "Las horas son: " . intdiv($minutos,60) . "</br>";
        echo "los minutos son:" . $minutos%60;
    }


    ?>
</body>

</html>