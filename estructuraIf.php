<?php
    $num1 = 21;
    $num2 = 14;

    if ($num1 != $num2){
        echo "Som dins un 'if'";
        echo "<p> </p>";

        if ($num2 == $num1):
            echo "Som dins un 'if' dins un 'if'";
        endif;
    }
?>
