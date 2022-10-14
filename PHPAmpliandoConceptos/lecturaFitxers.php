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
rewind($contF1);
//Mostrarem ses linies separades amb salts de línia i tambe es primer caracter de cada linia
while (!feof($contF1)){
    echo fgets($contF1) . "<br>";
    echo "Primer caràcter " . fgetc($contF1). "<br>";
}
?>