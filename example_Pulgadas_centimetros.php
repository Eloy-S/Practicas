<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de pulgadas a centímetros</title>
    <!-- Estilos de la página -->
    <style>
       body {
            background-color: black;
            color: whitesmoke;
        }
        h2 {
            color: rgb(120, 0, 255);
        }
        input{
            background-color: saddlebrown;
            color: white;
        }
        button{
            background-color:white;
        }
        button:hover {
            background-color: green;
            color: black;
        }
    </style>
</head>
<body>
<h2>Convertir pulgadas a centímetros</h2>
<!-- Formulario para ingresar el valor en pulgadas -->
<form method="POST" action="">
    Pulgadas: <input type="number" step="any" name="pulgadas" required>
    <button type="submit">Convertir</button>
</form>
<?php
// Solo entramos aca si el formulario fue enviado (metodo POST)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pulgadas = $_POST['pulgadas'];

    // Validamos antes de calcular
    if ($pulgadas === "") {
        echo "<p>Debe ingresar un valor.</p>";
    } elseif (!is_numeric($pulgadas)) {
        echo "<p>El valor ingresado debe ser un número.</p>";
    } elseif ($pulgadas < 0) {
        echo "<p>El valor no puede ser negativo.</p>";
    } else {
        // Solo llegamos aca si el valor es valido
        $pulgadas = (float) $pulgadas;
        $centimetros = $pulgadas * 2.54; // 1 pulgada = 2.54 cm
        printf("<p>%.2f pulgadas equivalen a %.2f centímetros.</p>", $pulgadas, $centimetros);
    }
}
?>
</body>
</html>