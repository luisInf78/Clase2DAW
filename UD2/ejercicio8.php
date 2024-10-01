<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];
    if( ($a**2 + $b**2 == $c**2) || ($b**2 + $c**2 == $a**2) || ($c**2 + $a**2 == $b**2) )
      echo "Triángulo rectángulo";

    if(($a==$b && $a!=$c) || ($b==$c && $b!=$a) || ($c==$a && $c!=$b)){
        echo "Triángulo Isósceles";

    }elseif ($a==$b && $a==$c) {
        echo "Triángulo Equilatero";
    }else{
        echo "Triángulo Escaleno";
    }//fin if-elseif

    ?>
</body>

</html>