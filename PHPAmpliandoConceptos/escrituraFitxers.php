<?php
$contF1 = fopen("file2.txt", "a+");

$contF2 = fread($contF1, filesize("file2.txt"));
echo $contF2 . "<br>";

//Escriu una nova linia
fwrite($contF1, "Nova linia");
$contF3 = fread($contF1, filesize("file2.txt"));
echo $contF3 . "<br>";

fflush($contF1);

//Mostram es bytes que té s'arxiu
echo filesize("file2.txt");

//Guardam dins un array
$arrayStat = stat("file2.txt");
var_dump($arrayStat);

?>