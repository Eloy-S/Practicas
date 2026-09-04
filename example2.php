<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$momento =date('a') ;
    if ($momento == 'pm') {
        $saludo = 'Buenas tardes/noches';
    }else {
        $saludo = 'Buenos dias';
    }
?>

<html>
<head><title>Ejemplo</title></head>
<body>
<h1><?php echo $saludo; ?></h1>
</body></html>