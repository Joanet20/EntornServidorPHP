<?php

    $valor1 = 24;
    $valor2 = 4;

    //Funcio sense retorn ni paràmetres
    function suma(){
        echo "Funcio suma()";
        echo "<p> </p>";
    }

    suma();

    //Funcio amb paràmetres sense retorn
    function sumaPar($v1, $v2){
        echo "Resultat: " . $v1 + $v2;
        echo "<p> </p>";
    }

    sumaPar($valor1, 9);


    //Funcio amb paràmetres i retorn
    function sumaRet($v1, $v2){
        return $v1 + $v2;
    }

    $result = sumaRet(21, $valor2);
    echo "Resultat: " . $result;
?>