<?php
//Mostra directori actual
echo getcwd();

//Mostra estructura directoris
scandir(getcwd());

//Cambiam a nes directori anterior
chdir("../");

echo getcwd();
?>
