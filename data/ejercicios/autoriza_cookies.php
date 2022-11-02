<?php //IMPORTANTE: COOKIES SIEMPRE AL PRINCIPIO DEL TODO (Por delante del body)

    if (isset($_POST["envio"])) {
        if (!empty($_POST["idioma"]) && !isset($_COOKIE["idioma"])) { // Si ya está establecida no vuelva a poner la cookie.
            setcookie("idioma",$_POST["idioma"],time()+3600);
        }

        if (!empty($_POST["marca"]) && !isset($_COOKIE["marca"])) {
            setcookie("marca",$_POST["marca"],time()+3600);
        }

        if (!empty($_POST["idioma"]) && !empty($_POST["marca"])){
            // Redirige a la pag. visualizaopciones
            header("Location: visualizaopciones.php");
            exit(); // o die(); .Para que no se ejecute ningún otro código
        }
    } else {
        // Medida de seguridad (IMPORTANTE), para quien cargue la pagina(visualizaopciones.php) a mano no pueda hacer "travesuras".
        // Borrar las cookies y redirigir a inicio (webcookies.html)
        setcookie("idioma",'',time()-72000);
        setcookie("marca",'',time()-72000);
        header("Location: webcookies.html");
        exit();
    }






        // MEDIANTE COOKIES
        /*$datosUser = json_encode([$_POST["idioma"], $_POST["marcas"]]);
        setcookie("datosUsuario",$datosUser,time()+300); // Válido para establecer las cookies de esos datos.

        if (isset($_POST["envio"])) {
            $idioma = $_POST["idioma"];
            $marca = $_POST["marca"];
                if (($idioma == "spanish")) { 
                    echo "<h2>Bienvenido querido usuario.</h2>";
                    echo "<br>Su marca de coche seleccionada es: " . "<b>$marca</b>";
                }else if (($idioma == "english")) {
                    echo "<h2>Welcome dear user.</h2>";
                    echo "<br>Your preferred car brand is: " . "<b>$marca</b>";
                }else {
                    echo "<h2>Willkommen lieber Benutzer.</h2>";
                    echo "<br>Ihre bevorzugte Automarke ist: " . "<b>$marca</b>";
                } 
        }*/
    ?>