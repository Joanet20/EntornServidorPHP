<?php
    $nom = "Joan";

    switch ($nom){
        case "Colau":
            echo $nom;
            break;

        case "Llucia":
            echo $nom;
            break;

        case "Alejandra":
            echo $nom;
            break;

        default:
            echo "No coincideix amb cap";
            echo "<p> </p>";
            echo "Valor de nom: " . $nom;
    }
?>
