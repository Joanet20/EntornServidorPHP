<?php
    //sort() ordena de menor a major un array

    $nums = array(24, 4, 9, 18, 21);
    var_dump($nums);
    echo "<p> </p>";

    $jugs = array("24" => "Valjent", "4" => "Galarreta", "9" => "Abdón", "18" => "Costa", "21" => "Raíllo");
    var_dump($jugs);
    echo "<p> </p>";

    sort($nums);
    var_dump($nums);
    echo "<p> </p>";

    sort($jugs);
    var_dump($jugs);
    echo "<p> </p>";
?>