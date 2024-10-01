<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $cadena = $_GET["cadena"];
    $convertida = "";
  
    $palabras = explode(" ",$cadena);
    foreach($palabras as $palabra){
        if(!empty($palabra))
            $palabra[0]= strtoupper($palabra[0]);
        echo $palabra . " ";
    }
    
    ?>
</body>

</html>