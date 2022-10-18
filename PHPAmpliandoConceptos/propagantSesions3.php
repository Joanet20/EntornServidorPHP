<?php

session_start();

if ($_SESSION['iniciada']){
    session_destroy();
} else {
    echo "No hi ha cap sessió iniciada <br>";
}

echo "<a href='propagantSesions1.php'>Torna a sa pàgina principal</a>";
echo "<br>";
?>