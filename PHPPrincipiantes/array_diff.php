<?php
    $nums1 = array(24, 4);
    $nums2 = array(9, 24, 4);

    $jugs1 = array("24" => "Martin Valjent", "4" => "Galarreta");
    $jugs2 = array("4" => "Galarreta", "9" => "Abdón Prats");

    $difNums = array_diff($nums1, $nums2);
    $difJugs = array_diff($jugs1, $jugs2);

    var_dump($difNums);
    echo "<p> </p>";
    var_dump($difJugs);
?>