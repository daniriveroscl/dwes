<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Información del fichero:</h1>
    <?php 
        if (isset ($_POST["envio"])) {
            /*if (empty ($_POST["myfile"])) {
                echo "<br>No has enviado ningún fichero";
            } INCOMPLETO */ 

            // $_FILES función array bidimensional asociativo
        echo "Nombre del fichero: " . $_FILES["myfile"]["name"];
        echo "<br>Extensión del fichero: " . $_FILES["myfile"]["type"];
        echo "<br>Tamaño del fichero: " . $_FILES["myfile"]["size"];
        echo "<br>Nombre del fichero temporal: " . $_FILES["myfile"]["tmp_name"];

        $destino = "subidos/" . $_FILES["myfile"]["name"];
        $flag = move_uploaded_file($_FILES["myfile"]["tmp_name"],$destino);
        echo $flag ? "<br>Fichero subido correctamente" : "Fallo en la subida"; // Condición Ternaria Buleana
        } 
    ?>
</body>
</html>