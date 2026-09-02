<?php
$animals = array('gato', 'perro', 'huron', 'ardilla');

foreach ($animals as $key => $animal) {
    $animals[$key] = ucfirst($animal);
}

print_r($animals);
?>