<?php
 /* Crea un formulario para enviar campo nombre. Si el nombre existe se da un saludo.
 Si no existe se vuelve atrás indicando que el campo es obligatorio. */
 
if(isset($_POST) && !empty($_POST)){
    echo "<h3>Saludos $_POST[nombre]";
}
 else {
     header("Location: ejercicio_12.php");
}