<?php
    //rsort() ordena en ordre invers a sort()

    $nums = array(24, 4, 9, 18, 21);
    var_dump($nums);
    echo "<p> </p>";

    $jugs = array("24" => "Valjent", "4" => "Galarreta", "9" => "Abdón", "18" => "Costa", "21" => "Raíllo");
    var_dump($jugs);
    echo "<p> </p>";

    rsort($nums);
    var_dump($nums);
    echo "<p> </p>";

    rsort($jugs);
    var_dump($jugs);
    echo "<p> </p>";
?>
