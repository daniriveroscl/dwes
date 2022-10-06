<!DOCTYPE html>
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
            if (!empty($_POST['nombreusu'])) {
                echo "<br> El nombre de usuario introducido es: " . $_POST['nombreusu'];
            } else {
                echo "<br><h3>No has intoducido ningun usuario</h3>";
            }
        }
    
    ?>

</body>
</html>