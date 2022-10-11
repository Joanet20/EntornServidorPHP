<?php
    $valor = 24;

    //Aquesta funció rebrà una copia de sa variable valor
    function copia($val){
        $val += 4;
    }

    //Aquesta funció rebrà sa variable valor real
    function real(&$val){
        $val += 4;
    }

    copia($valor);
    //Aqui valor no s'ha modificat
    echo $valor;
    echo "<p> </p>";

    real($valor);
    //Aqui valor si que s'ha modificat
    echo $valor;
    echo "<p> </p>";

?>
