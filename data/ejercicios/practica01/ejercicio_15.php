<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Array de Nombres</title>
</head>
<body>
    <!-- Crea un formulario que envíe un array de 3 nombres. 
    Para hacerlo debes usar el mismo nombre en todos los input (name="nombres[]"). -->

    <!--Formulario que se redirecciona a si mismo mediante el método Post -->
    <!--2 tipos de inputs: texto(text) y envío(submit)-->
    <form action="" method="post">
        <fieldset>
            <legend><h3>Insertar Nombres</h3></legend>
            <label for="nombre1">Primer Nombre: </label>
            <input type="text" name="nombres[]"> <!-- En "name" se especifica el nombre del array para meter el nombre -->
            <label for="nombre2">Segundo Nombre: </label>
            <input type="text" name="nombres[]">
            <label for="nombre3">Tercer Nombre: </label>
            <input type="text" name="nombres[]">
            &nbsp;&nbsp;
            <input type="submit" value="Enviar"> <!-- Botón para enviar los datos -->
        </fieldset>   
    </form>
    <br>

    <!-- Código PHP 
     isset comprueba si una variable está definida y no es null
     empty comprueba si una variable contiene algún valor distinto de 0 o false -->
    <?php
    if(isset($_POST) && !empty($_POST)){
        echo "Listado de nombres: ";
        foreach (($_POST["nombres"]) as $element){ // Bucle que muestra los nombres del array.
            echo "<b>$element" . "&nbsp;" ;
        }
    }
    ?>
</body>
</html>
