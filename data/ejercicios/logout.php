<?php
    session_start(); // Unirme a la sesión.

    // Destruir cookies y cerrar sesión
    $_SESSION = array();
    session_destroy();
    setcookie(session_name(),"",time()-7200,'/');

    // Dos Formas
    echo "<h2>Cerrando sesión</h2>";
    echo "<br><a href=\"login.php\">Página de Login</a>";

    // header("Location: login.php");