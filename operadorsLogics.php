<?php
    $num1 = 24;
    $num2 = 4;
    $num3 = 9;
    $num4 = 18;
    $num5 = 24;
    $num6 = 24;
    $bool1 = true;
    $bool2 = false;

    echo "Valor de num1: " . $num1;
    echo "<p> </p>";
    echo "Valor de num2: " . $num2;
    echo "<p> </p>";
    echo "Valor de num3: " . $num3;
    echo "<p> </p>";
    echo "Valor de num4: " . $num4;
    echo "<p> </p>";
    echo "Valor de num5: " . $num5;
    echo "<p> </p>";
    echo "Valor de num6: " . $num6;
    echo "<p> </p>";

    if ($num1 == $num5 && $num5 == $num6){
        echo "Se cumpleixen ses dues condicions";
        echo "<p> </p>";
    }

    if ($num1 == $num5 || $num5 == $num4){
        echo "Se cumpleix almenos una de ses condicions";
        echo "<p> </p>";
    }

    if (!$bool2){
        echo "bool2 te es valor de fals";
        echo "<p> </p>";
    }

    if (!$bool1){
        echo "bool1 te es valor de vertader";
        echo "<p> </p>";
    }

    if ($num1 == $num5 xor $num2 == $num3){
        echo "No només se cumpleix una de ses condicions";
        echo "<p> </p>";
    }
?>