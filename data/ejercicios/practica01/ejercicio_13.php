
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

    <form action="" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" required placeholder="min 3 carácteres" oninvalid="this.setCustomValidity('Campo Obligatorio')">

        <input type="submit" value="Enviar"><br><br>
    </form>

    <?php
    if(isset($_POST) && !empty($_POST) && (strlen($_POST["nombre"])>=3)){ //strlen: longitud de la variable o input
        echo "<b>Saludos $_POST[nombre]";
    }
     else {
         echo "Esperando tu respuesta =)";
    }
    ?>
</body>
</html>