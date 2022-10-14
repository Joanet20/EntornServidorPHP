<?php
$contF1 = fopen("file2.txt", "a+");

$contF2 = fread($contF1, filesize("file1.txt"));
echo $contF2 . "<br>";

//Escriu una nova linia
fwrite($contF1, "Nova linia");
$contF3 = fread($contF1, filesize("file1.txt"));
echo $contF3 . "<br>";


?>