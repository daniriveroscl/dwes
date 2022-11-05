
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script al mismo script</title>
</head>
<body>
    <!--Envío del script al mismo script. Crea un formulario para enviar campo nombre.
        El nombre debe existir y debe tener un tamaño mínimo de 3 caracteres. 
        Si es válido se da un saludo. Si no lo es se vuelve a mostar el formulario
        indicando que el campo es obligatorio y mostrando en el "input" 
        el valor anterior no válido. -->

    <!--Formulario que se redirecciona a si mismo mediante el método Post -->
    <!--2 tipos de inputs: texto(text) y envío(submit)-->
    <form action="" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" required placeholder="min 3 carácteres" oninvalid="this.setCustomValidity('Campo Obligatorio')">

        <input type="submit" value="Enviar"><br><br>
    </form>

    <!-- Código PHP 
     isset comprueba si una variable está definida y no es null
     empty comprueba si una variable contiene algún valor distinto de 0 o false -->
    <?php
    if(isset($_POST) && !empty($_POST) && (strlen($_POST["nombre"])>=3)){ // strlen: longitud de la variable o input. En este caso mayor o igual a 3.
        echo "<b>Saludos $_POST[nombre]"; // Coge el nombre de la variable 'nombre'.
    }
     else {
         echo "Esperando tu respuesta =)"; // Si todavía no se introduce nada en la página...
    }
    ?>
</body>
</html>