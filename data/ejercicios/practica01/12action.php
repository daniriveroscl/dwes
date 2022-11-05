<?php
 /* Crea un formulario para enviar campo nombre. Si el nombre existe se da un saludo.
 Si no existe se vuelve atrás indicando que el campo es obligatorio. */
 
// isset comprueba si una variable está definida y no es null
// empty comprueba si una variable contiene algún valor distinto de 0 o false
if(isset($_POST) && !empty($_POST)){
    echo "<h3>Saludos $_POST[nombre]";
}
 else {
     header("Location: ejercicio_12.php"); // Si no introduces los datos, te redirecciona a ejercicio_12.php
}