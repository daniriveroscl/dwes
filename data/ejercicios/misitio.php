<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
    <?php
        include_once "footer.php"; // include_once incrusta todo el código del otro archivo UNA VEZ. Intentar ponerlo siempre al principio
        echo "<br> El nombre del admin es " . $nombreAdmin;
        //require "footer.php";  Aborta la ejecución si hay un error
        // require_once solo una vez. Siempre tiene que ir al final
        ?>
    </footer>
</body>
</html>