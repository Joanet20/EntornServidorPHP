<?php

if (isset($_POST['usuari'])){
    if (!empty($_POST['usuari'])){
        $usuari = $_POST['usuari'];
        echo $usuari;
        echo "<br>";
    }
}

if (isset($_POST['password'])){
    if (!empty($_POST['password'])){
        $contra = $_POST['password'];
        echo $contra;
        echo "<br>";
    }
}
?>