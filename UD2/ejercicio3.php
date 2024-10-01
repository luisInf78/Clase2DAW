<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $datos_correctos = TRUE;

    if (isset($_GET["num1"]) && !empty($_GET["num1"])){
        $num1 = $_GET["num1"];
       
        if(strlen($num1) != 2){
            echo "El número introducido no es de dos dígitos";
            $datos_correctos = FALSE;
        }
    }else {
        echo "El valor num1 no ha sido introducido</br>";
        $datos_correctos = FALSE;
    }


    

    if ($datos_correctos) {
        $resultado = "";
       for($i = 0 ; $i < strlen($num1); $i++)
        $resultado = $num1[$i] . $resultado;
        echo $resultado;
    }
    echo "</br>";
    if ($datos_correctos){
        $resultado2 = "";
        for($i = 0; $i < 2; $i++)
            $resultado2 = $num1/10 . $num1%10;
        echo $resultado2;
    }

    

    ?>
</body>

</html>