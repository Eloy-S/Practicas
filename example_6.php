<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$numero = 4.6;

$redondeado = round($numero);
$redondeado_arriba = ceil($numero);
$redondeado_abajo = floor($numero);

echo "El número redondeado es: $redondeado";
echo "<br>";
echo "El número redondeado hacia arriba es: $redondeado_arriba";
echo "<br>";
echo "El número redondeado hacia abajo es: $redondeado_abajo";
?>