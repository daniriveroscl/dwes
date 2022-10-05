<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de chequeo de credenciales: </h1>
    <h2>Si has llegado aqui eres un heroe</h2>
    <?php
        /*Metodo de abajo para obtener la info de method="get"
        echo "<br> El nombre de usuario introducido es: " . $_GET['nombreusu'];//Ponemos como clave del array el "name" de la etiqueta de formulario en miformulario, como he llamado al campo
        echo "<br> La password es: " . $_GET['passwd'];*/
        
        // Metodo de abajo para obtener la info de method="post" unido a if por si el usuario ha metido datos o no. isset nos dice si la variable esta definida y tiene datos
        if(isset($_POST['envio'])){//Este if sirve para cercionarse que el usuario le ha dado al boton "enviar" y se han mandado los datos
            if(!empty($_POST['nombreusu'])){
                echo "<br> El nombre de usuario introducido es: " . $_POST['nombreusu'];
            } else {
                echo "<br><h3>No has intoducido ningun usuario</h3>";
            } 
        }
        
        if(isset($_POST['envio'])){//Este if sirve para cercionarse que el usuario le ha dado al boton "enviar" y se han mandado los datos
            if(!empty($_POST['passwd'])){
                echo "<br> La password es: " . $_POST['passwd'];
            } else {
                echo "<br><h3>No has intoducido ninguna contraseña  </h3>";
            } 
        }

        //Recogida valores checkbox
        if(isset($_POST['envio'])){
            if (!empty($_POST['asignaturas'])){
                $asignaturas = $_POST['asignaturas'];
                foreach($asignaturas as $asignatura){
                    echo "<br> Te encanta el lenguaje de programación:" . $asignatura;
                }
                // var_dump ($asignaturas) Otra forma
            }else{
                echo "<br> No te gusta la programación";
            }
            
        }
        // Recogida datos RadioButton
        if (isset($_GET["envio"])) {
            $equipobasket = $_GET["equipo"];
            if(!empty($equipobasket)) {
                echo"<br> Tu equipo de basket preferido es: " . $equipobasket;
            }else{
                echo"<br>No has elegido ningún equipo";
            }
        }

        // Recogida lista desplegable Simple
        if (isset($_GET["envio"])) {
            $menupreferido = $_GET["menus"];
            if(!empty($menupreferido)) {
                echo"<br> Tu plato preferido es: " . $menupreferido;
            }else{
                echo"<br>No has elegido ningún plato";
            }
        }

         // Recogida listas desplegables Múltiple
         if (isset($_GET["envio"])) {
            $menupreferidos = $_GET["menusm"];
            if(!empty($menupreferidos)) {
                foreach($menupreferidos as $menu)
                echo"<br> Tu plato preferido es: " . $menu;
            }else{
                echo"<br>No has elegido ningún plato";
            }
        }
    ?>
</body>
</html>