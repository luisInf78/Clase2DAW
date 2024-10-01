<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $base = $_GET["base"];
    $exp = $_GET["exp"];
    if ($exp > 0)
        echo $base ** $exp;
    elseif ($exp == 0) {
        echo 1;
    } else {
        echo 1 / ($base ** abs($exp));
    }


    ?>
</body>

</html>