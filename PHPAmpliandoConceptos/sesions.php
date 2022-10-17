<?php
//Asignar id a sa sessió
session_id("2449");

//Mostrar nom de sa sessió (si no li assignam mostrarà es de per defecte)
echo session_name("Som una sessió");

//Iniciar sa sessió
session_start();

//Cream dues variables de sessió
$_SESSION['var1'] = "Joan";
$_SESSION['var2'] = "Naoj";

//Mostram es valor de ses variables
var_dump($_SESSION);
echo "<br>";

//Desahbilitar variable de sessió
unset($_SESSION['var2']);

if (!isset($_SESSION['var2'])){
    echo "var2 no existeix";
}

//Destruir sessió
session_destroy();
?>
