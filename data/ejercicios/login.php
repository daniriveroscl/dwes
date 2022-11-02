<?php 
    // Valores Válidos del caso:
    // usuario: 1234 , rol = 0
    // admin: 4567 , rol = 1

    function comprobarCredenciales($nombreusu,$clave) {
        if ($nombreusu === "usuario" && $clave === "1234") {
            $credenciales["nombreusu"] = "usuario";
            $credenciales["rol"] = 0;
            return $credenciales;
        }
        if ($nombreusu === "admin" && $clave === "4567") {
            $credenciales["nombreusu"] = "admin";
            $credenciales["rol"] = 1;
            return $credenciales;
        }
        return false;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["envio"])) {
            $credenciales = comprobarCredenciales($_POST["usuario"],$_POST["password"]);
            if ($credenciales === false) {
               $error = 1;
            }else{
                // Si las credenciales son válidas:
                session_start();
                $_SESSION["loginok"] = $credenciales;
                header("Location: principal_login.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php 
        if (isset($error) && $error == 1) {
            echo "<p><font color=\"red\">Credenciales inválidas.</font></p>";
        }
    
    ?>
    <form name="formulogin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post"> <!--PHP_SELF para redirigir a la propia pág.-->
                                                             <!--htmlspecialchars para convertir caracteres especiales en cadena, para evitar ataques-->
         <p><label for="usuario">Usuario:</label>
           <input type="text" name="usuario" id="usuario">
        </p>
        <p><label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
        </p>

        <input type="submit" value="Acceder" name="envio" id="envio">
    </form>
</body>
</html>