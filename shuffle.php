<?php
    //shuffle() ordena aleatoriament es valors d'un array

    $nums = array(24, 4, 9, 18, 21);
    var_dump($nums);
    echo "<p> </p>";

    $jugs = array("24" => "Valjent", "4" => "Galarreta", "9" => "Abdón", "18" => "Costa", "21" => "Raíllo");
    var_dump($jugs);
    echo "<p> </p>";

    shuffle($nums);
    var_dump($nums);
    echo "<p> </p>";

    shuffle($jugs);
    var_dump($jugs);
    echo "<p> </p>";
?>