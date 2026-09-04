<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área de la circunferencia</title>
</head>
<body>
<h2>Calcular área de una circunferencia</h2>
<form method="POST" action="">
    Radio: <input type="number" step="any" name="radio" required>
    <button type="submit">Calcular</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $radio = (float) $_POST['radio'];
    $area = M_PI * pow($radio, 2);
    printf("<p>El área de la circunferencia es: %.2f</p>", $area);
}
?>
</body>
</html>