<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Lista vacía</title>
</head>
<body>
    <!--Crea una lista usando etiquetas ul y li. La lista inicialmente estará vacía
        pero un formulario con un input servirá para añadir los elementos. 
        Usa input de tipo hidden para no "mostrar" los recuadros del input.-->

    <!--Formulario básico que agrega elementos dentro de la misma página -->
    <!--2 tipos de inputs: texto(text) y envío(submit)-->
    <form action="" method="get">
        <fieldset>
            <legend><h2>Lista Formulario</h2></legend>
            <input type="text" name="nombres[]">

            <input type="submit" value="Nuevo">
        </fieldset>

        <!-- Código PHP -->
        <?php
            echo "<ul>"; // Crea una lista desordenada
            if (isset($_GET["nombres"])) { // isset comprueba si la variable 'nombres' está definida y no es null.
            foreach($_GET["nombres"] as $nombre) { // Bucle que crea diferentes li para meter dentro del array "nombres[]".
                echo '<input type="text" name="nombres[]" value="' . $nombre . '" hidden><br>'; // hidden oculta el recuadro del input
                echo "<li>" . $nombre . "</li>"; // Muestra por pantalla los nombres insertados
                }
            }
            echo "</ul>";
        ?>
    </form>
</body>
</html>