<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $datos_correctos = TRUE;

    if (isset($_GET["num1"]) && !empty($_GET["num1"]))
        $num1 = $_GET["num1"];
    else {
        echo "El valor num1 no ha sido introducido</br>";
        $datos_correctos = FALSE;
    }


    if (isset($_GET["num2"]) && !empty($_GET["num2"]) && $datos_correctos)
        $num2 = $_GET["num2"];
    else {
        echo "El valor num2 no ha sido introducido</br>";
        $datos_correctos = FALSE;
    }

    if ($datos_correctos) {
        echo "La suma es: " . $num1 + $num2 . "</br>";
        echo "La resta es: " . $num1 - $num2 . "</br>";
        echo "La multiplicación es: " . $num1 * $num2 . "</br>";
        echo "La división es: " . $num1 / $num2 . "</br>";
    }


    ?>
</body>

</html>