<?php
    $pkmns = array("Pikachu", "Magikarp", "Empoleon");
    var_dump($pkmns);
    echo "<p> </p>";

    //Array amb primer element eliminat
    array_unshift($pkmns);
    var_dump($pkmns);
    echo "<p> </p>";

    //Array amb element nou a sa primera posicio
    array_shift($pkmns, "Chikorita");
    var_dump($pkmns);
    echo "<p> </p>";


    //Array amb darrer element borrat
    array_pop($pkmns);
    var_dump($pkmns);
    echo "<p> </p>";


    //Array amb darrer element nou
    array_push($pkmns, "Chimchar");
    var_dump($pkmns);
    echo "<p> </p>";
?>
