<?php
$hab = false;
if (count($_COOKIE) > 0){
    $hab = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<?php
if ($hab){
?>

<h2>COOKIES HABILITADES</h2>

<?php
} else {
?>

<h2>COOKIES DESHABILITADES</h2>

<?php
}
?>
</body>
</html>


