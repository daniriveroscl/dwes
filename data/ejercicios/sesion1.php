<?php   
    // Crear o unirse a una sesión ya creada
    // Debe ser lo primero que debe haber en una página (por delante del html)
    $array = ["misesion"];
    session_start($array);

    // $_SESSION["NOMBRE_VARIABLE"]
    // Contador visitas

    if (!isset($_SESSION["contador"])) {
        $_SESSION["contador"] = 0;
    }else {
        $_SESSION["contador"]++;
    }

    echo "He visitado la página " .$_SESSION["contador"] . " veces";
    // La sesión caduca al cerrar el navegador

    echo "<br><a href=\"sesion2.php\">Siguiente página</a>";