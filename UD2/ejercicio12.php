<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $arrEnteros = array();

    for($i = 0; $i < 10; $i++)
        $arrEnteros[$i] = rand(1,100);

    foreach ($arrEnteros as $valor)
        echo $valor ." ". $valor**2 . " " . $valor**3 . "</br>";
    ?>
</body>

</html>