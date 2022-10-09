<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chequeo Libro</title>
</head>
<body>
    <h1>Chequeo de registro de libro</h1>

    <?php 

        if (isset($_POST['envio'])) { 
            if (!empty($_POST['titulolibro'])) {
                echo "<br> El título del libro introducido es: " . $_POST['titulolibro'];
            } else {
                echo "<br><h4>No has intoducido ningún título del libro.</h4>";
            }
        }

        if (isset($_POST['envio'])) { 
            if (!empty($_POST['nombreautor'])) {
                echo "<br> El nombre del autor es: " . $_POST['nombreautor'];
            } else {
                echo "<br><h4>No has intoducido ningún nombre del autor.</h4>";
            }
        }

        if (isset($_POST['envio'])) { 
            if (!empty($_POST['nombreeditorial'])) {
                echo "<br> El nombre de la editorial del libro es: " . $_POST['nombreeditorial'];
            } else {
                echo "<br><h4>No has intoducido ningún nombre de la editorial.</h4>";
            }
        }

        if (isset($_POST['envio'])) { 
            if (!empty($_POST['numpaginas'])) {
                echo "<br> El número de páginas del libro es: " . $_POST['numpaginas'];
            } else {
                echo "<br><h4>No has intoducido ningún número de páginas.</h4>";
            }
        }
    
    ?>

</body>
</html>