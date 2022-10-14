<?php

//fopen() Obrir fitxers
$contF1 = fopen("file1.txt", "r+");

if (!$contF1){
    echo "No te res";
} else {
    $contF2 = fread($contF1, filesize("file1.txt"));
    echo $contF2 . "<br>";
}


?>