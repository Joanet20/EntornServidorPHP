<?php

//fopen() Obrir fitxers
$contF1 = fopen("file1.txt", "r+");

if (!$contF1){
    echo "No te res";
} else {
    //Llegeix es contingut des fitxer
    $contF2 = fread($contF1, filesize("file1.txt"));
    echo $contF2 . "<br>";
}

//Fa que torni a sa primero posició des contingut
rewind("file1.txt");
//Mostrarem ses linies separades amb salts de línia
while (!feof("file1.txt")){
    echo fgets("file1.txt") . "<br>";
}
?>