<?php

//Iniciam sa sessió
session_start();

//Mostram qualcunes variables de sessió per aquí
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

echo "<a href='propagantSesions2.php'>Mostrarles a una altre pàgina</a>";
echo "<br>";

?>