<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
    <!-- CSS en archivo aparte, dentro de la carpeta css/ -->
    <link rel="stylesheet" href="css/style_P#5.css">
</head>
<body>
<?php
$author1 = "John Doe";
$author2 = "Max Mustermann";

// Validamos que las variables no vengan vacías antes de imprimirlas.
// Aca no hay formulario, pero sirve como buena costumbre: nunca asumir
// que un dato va a estar siempre disponible (ej. si mas adelante estos
// nombres vinieran de un archivo o de una base de datos).
if (empty($author1) && empty($author2)) {
    echo "<p>Faltan datos de los autores.</p>";
} else {
    echo "<h1>Hello World!</h1>
    <p>This dynamic web page was created by $author1 and $author2.</p>";
}
?>
</body>
</html>