<?php
    $num1 = 24;
    $num2 = 4;
    $num3 = 9;

    //ELSE
    if ($num1 == $num2){
        echo "num1 i num2 són iguals";
        echo "<p> </p>";
    } else {
        echo "num1 i num2 són diferents";
        echo "<p> </p>";
    }

    //ELSEIF
    if ($num2 == $num3){
        echo "num2 és igual a num3";
        echo "<p> </p>";
    } elseif ($num2 > $num3){
        echo "num2 és major que num3";
        echo "<p> </p>";
    } elseif ($num2 < $num3){
        echo "num2 és menor que num3";
        echo "<p> </p>";
    }
?>