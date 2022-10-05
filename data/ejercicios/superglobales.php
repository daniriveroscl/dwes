
<?php 
    $miHost = $_SERVER['HTTP_HOST'];
    echo "<br> El host al  que va la petición es : " . $miHost;
/*  Ejercicio : Mostrar aquí:
    - el nombre del servidor web
    - el lenguaje
    - el nombre de la página actual que realiza la solicitud
    - el tipo de navegador que realiza la solicitud
    */

    $nombreServer = $_SERVER['SERVER_NAME'];
    echo"<br> El nombre del servidor web es : " . $nombreServer;

    $lenguaje =   $_SERVER ['HTTP_ACCEPT_LANGUAGE'];
    echo"<br> El lenguaje es : " . $lenguaje;

    $nombrePagina = $_SERVER['PHP_SELF'];
    echo"<br> El nombre de la página actual: " . $nombrePagina;

    echo "<br> El tipo de navegador: " . $_SERVER['HTTP_USER_AGENT'];