<?php
//Mostram array amb sa informació des fitxer
var_dump($_FILES);

//Guardam dins una variable es directori temporal des servidor
$directori = ini_get("upload_tmp_dir");
echo "Directori temporal: " . $directori;

//Informació que se guarda a $_FILES
$directoriTemp = $_FILES['formPujar']['tmp_name'];

//Puja es fitxer
move_uploaded_file($directoriTemp, $_FILES['formPujar']['tmp_name']);
?>