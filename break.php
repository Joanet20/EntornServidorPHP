<?php
$limit = 17;

    // For normal
    for($i = 0; $i < $limit; $i++){
        echo "Valor de i: " . $i;
    }

    //Amb es break a nes moment k $i es 3 acaba es bucle

    for($i = 0; $i < $limit; $i++){
        echo "Valor de i: " . $i;
        if($i == 3) {
            break;
            //S atura es bucle
        }
    }

    //Fa que acabin es 2 fors
    for($i = 0; $i < $limit; $i++){
        echo "Valor de i: " . $i;
        for($j = 0; $j < $limit; $j++){
            echo "Valor de j: " . $j;
            break;
        }
    }
?>
