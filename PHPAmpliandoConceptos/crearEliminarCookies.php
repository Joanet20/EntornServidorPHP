<?php
//setcookie() serveix per crear una cookie

setcookie("noexpira", "prova");
setcookie("unset", "us");
setcookie("expira", "provaExp", time() + 30);

/*if ($_COOKIE['noexpira'] == "prova"){
    echo "Axo es sa cookie no expira";
    echo "<br>";
}*/

//Per borrar cookies podem emplear sa funció unset() o posarli una data d'expiració pasada
unset($_COOKIE['unset']);

setcookie("noexpira", "", time() - 1);

?>