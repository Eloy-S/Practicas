<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Perimetro</title>
    <!-- Parte estetica de la pagina web -->
    <style>
        body {
            background-color: black;
        }
        p {
            color: white;
        }
        h1 {
            color: white;
        }
        input {
            background-color:rgb(255, 229, 0);
        }
        form{
            color: purple;
        }
    </style>
</head>
<body>
<h1>Area y Perimetro de un circulo</h1>
<!-- Formulario donde se ingresan los datos para hacer el calculo -->
<form method="POST" action="">
    Ingrese el radio: <input type="number" name="radio" step="any" required>
    <button type="submit" name="Ingresar">Ingrese</button>
</form>
<?php
// Solo entramos aqui si el formulario fue enviado (existe $_POST["radio"])
if (isset($_POST["radio"])) {
    $Radio = $_POST["radio"];

    // Validamos antes de calcular
    if ($Radio === "") {
        echo "<p>Debe ingresar un número.</p>";
    } elseif (!is_numeric($Radio)) {
        echo "<p>El radio debe ser un número.</p>";
    } elseif ($Radio < 0) {
        echo "<p>El radio no puede ser negativo.</p>";
    } else {
        // Solo llegamos aqui si el radio es valido
        $area = M_PI * ($Radio ** 2);
        $perimetro = 2 * M_PI * $Radio;
        echo "<p>El área del círculo con radio $Radio es: " . round($area, 2) . "</p>";
        echo "<p>El perímetro del círculo con radio $Radio es: " . round($perimetro, 2) . "</p>";
    }
}
?>
</body>
</html>