<?php
    $marques = array("Nike", "Umbro", "Macron", "Kelme");

    //Conta quants d'elements té s'array
    $tamany = count($marques);
    echo $tamany;
    echo "<p> </p>";

    //Guarda s'element de sa posició actual de s'array
    $posicioActual = current($marques);
    echo $posicioActual;
    echo "<p> </p>";


    //Guarda s'element de sa darrera posició de s'array
    $posicioActual = end($marques);
    echo $posicioActual;
    echo "<p> </p>";

    //Cerca si existeix aquest element dins s'array i si existeix guarda sa clau
    $cercat = array_search("Macron", $marques);

    if ($cercat){
        echo "Key: " . $cercat . " Marca: " . $marques[$cercat];
        echo "<p> </p>";
    } else {
        echo "No hi ha coincidencies!!";
    }
?>