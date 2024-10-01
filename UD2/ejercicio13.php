<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $arrCadenas = array("casa", "perro", "gato","coche","moto");
    $arrCadinversa = array();

    for($i = 0; $i < count($arrCadenas); $i++)
        $arrCadinversa[count($arrCadenas)- 1 - $i] = $arrCadenas[$i];

       
        for($i = 0; $i < count($arrCadinversa); $i++)
        echo $arrCadinversa[$i] . "</br>";
    ?>
</body>

</html>