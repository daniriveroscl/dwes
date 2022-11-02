<?php
    // Sesión unida a la sesión1
    session_start(); // Creo la sesión

    $nombresesion = session_name();
    echo "Nombre de sesión creada anteriormente: " . $nombresesion;

    // Para eliminar sesión
    /* $_SESSION = array(); // unset($_SESSION)
    session_destroy();
    setcookie(session_name(),'',time()-7200,'/'); // session_name() nos devuelve el nombre de la sesión */

    echo "<br>La página se ha cargado " .$_SESSION["contador"] . " veces.";

