<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Formulario Nombre</title>
</head>
<body>
    <!-- Crea un formulario para enviar campo nombre. Si el nombre existe se da un saludo.
        Si no existe se vuelve atrás indicando que el campo es obligatorio. -->

    <form action="12action.php" method="post">
        <label>Nombre: </label>
        <input type="text" name="nombre" required oninvalid="this.setCustomValidity('Campo Obligatorio')"><br><br> <!--Campo obligatorio-->

        <input type="submit" value="Enviar">
    </form>
</body>
</html>