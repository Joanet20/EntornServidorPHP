<?php

    function factorial ($valor){
        if ($valor == 1){
            return 1;
        } else {
            return $valor * factorial($valor-1);
        }
    }

    $fact = factorial(24);
    echo $fact;
?>