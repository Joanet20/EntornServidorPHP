<?php

    $numero = 24;

    function probarNum(){
        //Variable $numLocal és una variable local
        $numLocal = 4;
        echo $numLocal;

        //Convertim $numero a variable global
        global $numero;
        echo $numero;
    }

    probarNum();

?>