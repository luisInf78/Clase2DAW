<?php

    $base = $_GET['base'] ;
    $exp = $_GET['exp'] ;
    $resultado;

    if( $exp > 0 || $exp < 0)
        $resultado =  $base ** $exp;
    elseif ($exp == 0)
        $resultado = 1;
    
        echo $resultado;

?>