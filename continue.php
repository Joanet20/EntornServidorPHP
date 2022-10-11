<?php
    $limit = 17;

    //For normal
    for($i = 0; $i < $limit; $i++){
        echo "Valor de i: " . $i;
    }

    //Amb es continue quan $i sigui 3 so botara i pasara a nes seguent

    for($i = 0; $i < $limit; $i++){
        if($i == 3){
            continue;
        }
        echo "Valor de i: " . $i;
    }
?>
