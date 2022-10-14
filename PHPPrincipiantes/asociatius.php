<?php
     $futbolistes = array(jugador1 => "Martin Valjent", jugador2 => "Galarreta", jugador3 => "Abdón Prats");
     echo "Jugador 1: " . $futbolistes["jugador1"] .
         " Jugador 2: " . $futbolistes["jugador2"] .
         " Jugador 3: " . $futbolistes["jugador3"];

     echo "<br>";

     $meuArray = array(nom => "Joan", edat => 21, esAlumne => true, 24 => 4);

     echo "Nom: " . $meuArray["nom"] .
         " Edat: " . $meuArray["edat"] .
         " Es alumne? :" . $meuArray["esAlumne"] .
         " Pos 24: " . $meuArray[24];

     echo "<br>";

     var_dump($futbolistes);
     echo "<br>";
     var_dump($meuArray);