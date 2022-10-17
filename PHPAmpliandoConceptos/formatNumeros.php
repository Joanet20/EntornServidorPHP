<?php
$nota = 2.4;

//Aquestes funcions nos permeten comprobar si una variable es de tipus int o de tipus float

if (is_int($nota)){
    echo "Axo es un numero sencer";
} elseif (is_float($nota)){
    echo "Axo es un numero decimal";
}

echo "<br>";

//Sa funció number_format() nos permet mostrar es numero amb es format que més mos agradi

//Mostra es número separant ses milèsimes
echo number_format("24000000");
echo "<br>";

//Lo mateix que s'anterior però mostrant 3 decimals
echo number_format("24000000", 3);
echo "<br>";

//Lo matex que s'anterior pero canviant es punts per ses comes i viceversa
echo number_format("24000000", 2, "," , ".");
?>