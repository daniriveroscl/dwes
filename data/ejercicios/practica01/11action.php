<?php
// isset comprueba si una variable está definida y no es null
// empty comprueba si una variable contiene algún valor distinto de 0 o false
echo '<meta charset="UTF-8">';
if(isset($_POST["titulo"]) && !empty($_POST["titulo"])){
    echo "<h3>Datos enviados correctamente.</h3>";
}
 else {
     echo "<h3>No hemos recibido nada!</h3>";
}