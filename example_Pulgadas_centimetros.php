<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de pulgadas a centímetros</title>
    <style>
        body {
            background-color: black;
        }
        h2 {
            color: rgb(120, 0, 255);
        }
        form {
            background-color: rgb(0,255,255);
        }
        button{
            background-color:brown;
        }
        button:hover {
            background-color: white;
            color: green;
        }
        
        



    </style>
</head>
<body>
<h2>Convertir pulgadas a centímetros</h2>
<form method="POST" action="">
    Pulgadas: <input type="number" step="any" name="pulgadas" required>
    <button type="submit">Convertir</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pulgadas = (float) $_POST['pulgadas'];
    $centimetros = $pulgadas * 2.54;
    printf("<p>%.2f pulgadas equivalen a %.2f centímetros.</p>", $pulgadas, $centimetros);
}
?>
</body>
</html>