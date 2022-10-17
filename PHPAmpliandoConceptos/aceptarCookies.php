<?php
if (isset($_GET['aceptar'])){
    $caducitat = time() + 3600;
    setcookie("ck", "cuki", $caducitat);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php
if (!isset($_GET['aceptar']) && !isset($_COOKIE['ck'])){
?>
<h2>Cookies</h2>
    <span>No has acceptat ses cookies</span>
    <a href="?aceptar"=1>ACEPTAR COOKIES</a>
<?php
}
?>
</body>
</html>