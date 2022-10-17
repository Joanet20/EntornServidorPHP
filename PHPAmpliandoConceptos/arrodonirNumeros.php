<?php
//round() arrodoneix cap a s'enter més proxim

echo round("1.50");
echo "<br>";

echo round("1.49");
echo "<br>";

echo round("-1.50");
echo "<br>";

echo round("-1.49");
echo "<br>";

echo round("2.4", PHP_ROUND_HALF_UP);
echo "<br>";

echo round("2.4", PHP_ROUND_HALF_DOWN);
echo "<br>";

echo round("2.4", PHP_ROUND_HALF_EVEN);
echo "<br>";

//Sa funcio ceil() arrodoneix cap a dalt i sa floor() arrodoneix cap abaix

echo ceil("2.5");
echo "<br>";

echo floor("2.5");
echo "<br>";
?>