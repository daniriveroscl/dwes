<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre obligatorio</title>
</head>
<body>
    <!--Crea un formulario para enviar campo nombre. 
        Si el nombre existe se da un saludo. 
        Si no existe se vuelve atrás indicando que
        el campo es obligatorio.-->

    <form name="formuNombre" action="autoriza_nombre.php" method="post">
        <p>
            <label for="nombre">Introduce Nombre: </label>
            
            <input type="text"  required="" name="username" placeholder="Aquí =)" oninvalid="this.setCustomValidity('Campo Obligatorio')">
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar">
    </form>
</body>
</html>