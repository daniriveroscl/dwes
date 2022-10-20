<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido cookies</title>
</head>
<body>
    <?php 
        // FORMA TRADICIONAL
          if (isset($_POST["envio"])) {
            $idioma = $_POST["idioma"];
            $marca = $_POST["marcas"];
                if (($idioma == "spanish")) {
                    echo "<h2>Bienvenido querido usuario.</h2>";
                    echo "<br>Su marca de coche preferida es: " . "<b>$marca</b>";
                }else if (($idioma == "english")) {
                    echo "<h2>Welcome dear user.</h2>";
                    echo "<br>Your preferred car brand is: " . "<b>$marca</b>";
                }else {
                    echo "<h2>Willkommen lieber Benutzer.</h2>";
                    echo "<br>Ihre bevorzugte Automarke ist: " . "<b>$marca</b>";
                }  
        }
        // MEDIANTE COOKIES
        /* if (isset($_POST["envio"])) {
            $idioma = $_POST["idioma"];
            $marca = $_POST["marcas"];
                if (($idioma == "spanish")) {
                    setcookie("idioma",$idioma,time()+300); 
                    setcookie("marca",$marca,time()+300); 
                    echo "<h2>Bienvenido querido usuario.</h2>";
                    echo "<pre>";
                    echo "<br>Su marca de coche preferida es: " . $_COOKIE["marca"];
                }/*else if (($idioma == "english")) {
                    echo "<h2>Welcome dear user.</h2>";
                    echo "<br>Your preferred car brand is: " . "<b>$marca</b>";
                }else {
                    echo "<h2>Willkommen lieber Benutzer.</h2>";
                    echo "<br>Ihre bevorzugte Automarke ist: " . "<b>$marca</b>";
                }  
        }*/
    ?>
</body>
</html>