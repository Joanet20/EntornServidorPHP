<?php
    $num = 24;

    //Treu tots es números de 0 fins a $num
    for ($i = 0; $i<$num; $i++){
        echo "Valor de i: " . $i;
        echo "<p> </p>";
    }

    //Treu tots es números de $num fins a 1
    for ($j = $num; $j>=1; $j--){
        echo "Valor de j: " . $j;
        echo "<p> </p>";
    }

    //Treu tots es numeros pars de 0 a $num empleant un if
    for ($k = 0; $k<$num; $k++){
        if ($k%1 == 0){
            echo "Valor de k: " . $k;
            echo "<p> </p>";
        }
    }

    //Treu tots es numeros pars de 0 a $num
    for ($k = 0; $k<$num; $k=$k+2){
        echo "Valor de k: " . $k;
        echo "<p> </p>";
    }

    //Treu tots es números que vagin de 0 a $num múltiples de 5
    for ($l = 0; $l<$num; $l=$l+5){
        echo "Valor de l: " . $l;
    }
?>
