<?php
//Mostra directori actual
echo getcwd() . "<br>";

//Mostra estructura directoris
$directoris = scandir(getcwd());
var_dump($directoris);
echo "<br>";

//Cambiam a nes directori anterior
chdir("../");

echo getcwd();
?>
