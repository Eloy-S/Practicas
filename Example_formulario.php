<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <style>
            body{
                background-color: black;
                color: white;
            }
            h1{
                color: rgb(165, 0, 0);
            }
            input{
                background-color: rgb(170, 255, 0);
                color: black;
            }
             button:hover{
                background-color: green;
                color: orange;
            } button{
                background-color: white;
                color: black;
            }
        </style>
    </head> 
     <body>
        <h1>Ingrese Nombre y Edad</h1>
        <form method="POST" action="">
            Ingrese Nombre: <input type="text" name="nombre" required>
            Ingrese Edad: <input type="number" name="edad" required>
            <button type="submit">Submit</button>
        </form>
        <?php
        // Validación del nombre
        if(isset($_POST['nombre'])){
            $Nombre = trim($_POST['nombre']); // trim quita espacios al inicio/final
            if($Nombre == ""){
                echo "El nombre no puede estar vacio.<br>";
            } else {
                echo "El nombre es: ". $Nombre . "<br>";
            }
        }

        // Validación de la edad
        if(isset($_POST["edad"])){
            $Edad = $_POST["edad"];
            if($Edad === ""){
                echo "La edad debe ser un numero.<br>";
            }elseif(!is_numeric($Edad)){
                echo "La edad debe ser un numero.<br>";
            }elseif($Edad<0){
                echo "La edad no puede ser negativa.<br>";
            } else {
                // Solo llegamos aca si la edad es un numero valido
                echo "La edad es: ".$Edad."<br>";
                if($Edad >= 18) {
                    echo "Usted puede votar en las proximas elecciones 2028";
                }else {
                    echo "Usted no es mayor de edad";
                }
            }
        }
        ?>
     </body>
</html>