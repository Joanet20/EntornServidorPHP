<?php

session_start();

if ($_SESSION['iniciada']){

    $_SESSION['iniciada'] = true;
    $_SESSION['nom'] = "Joan";
    $_SESSION['edat'] = 21;

    echo "ID de sa sessió: " . session_id();
    echo "<br>";

    echo "Nom de sa sessió: " . session_name();
    echo "<br>";

    echo "Nom: " . $_SESSION['nom'];
    echo "<br>";

    echo "Edat: " . $_SESSION['edat'];
    echo "<br>";

    echo "<a href='propagantSesions3.php'>Tancar sessió</a>";
    echo "<br>";

    echo "<a href='propagantSesions1.php'>Torna a sa pàgina principal</a>";
    echo "<br>";

}
?>