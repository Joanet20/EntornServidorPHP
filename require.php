<?php

    //Sa diferencia amb s'include és que include mostra una alerta, i require mostra un error en cas de que falli
    echo "Arxiu require.php";
    require "while.php";
    require "while.php";
    require_once "while.php";
?>