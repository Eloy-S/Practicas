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
        if(isset($_POST['nombre'])){
        $Nombre = $_POST['nombre'];
        echo "El nombre es: ".$Nombre."<br>";
        }
        if(isset($_POST["edad"])){
        $Edad = $_POST["edad"];
        echo "La edad es: ".$Edad."<br>";}
        
        if (isset($Edad) and $Edad >= 18){
            echo "Usted puede votar en las proximas elecciones 2028";
        }else echo "Usted no es mayor de edad";
        ?>
     </body>
</html>