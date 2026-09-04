<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Perimetro</title>
    <style>

    </style>
</head>
<body>
    <form method="POST" action="">
        Ingresar: <input type="number" name="" require>
        
        
    </form>

<?php
$radio = 5;

$area = M_PI * ($radio ** 2);
$perimetro = 2 * M_PI * $radio;

echo "El área del círculo con radio $radio es: $area";
echo "<br>";
echo "El perímetro del círculo con radio $radio es: $perimetro";
?>
</body>
</html>