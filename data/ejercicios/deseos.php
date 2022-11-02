<?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["envio"])) {
            session_start();
            $item = $_POST["deseosm"];
            $_SESSION["listadeseo"][]= $item; // Con [] creo un array bidimensional
            // Codificarlo
            $sesioncodif = json_encode($_SESSION);
            var_dump($sesioncodif);
            
            // Opcion 1: Decodificarlos como un array asociativo (MÁS FÁCIL)
            $sesiondecodif = json_decode($sesioncodif,true); // true para array
            echo "<br>";
            $_SESSION["listadeseo"][4] = "PS5"; // Si queremos cambiar el 4 elemento por otro
            //var_dump($sesiondecodif);

            // Opcion 2: Decodificarlos como un objeto 

                // Opción 2.1
            $sesiondecodif = json_decode($sesioncodif);
            //var_dump($sesiondecodif);
            $sesiondecodif ->{"listadeseo"}[6] = "Skate";// $this->método
            var_dump($sesiondecodif);

                // Opción 2.2
            /*$miarray = get_object_vars($sesiondecodif);
            print_r($miarray);

            for ($i=0; $i < count($miarray,COUNT_RECURSIVE); $i++) { //COUNT_RECURSIVE para array dentro de otro array
                echo"<br>Elemento $i es: " . $miarray['listadeseo'][$i];
            }*/

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de deseos</title>
</head>
<body>
    <h2>Haz tu lista de deseos:</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
         <p>
            <select name="deseosm[]" id="deseos" required> <!--required para que sea obligatorio escoger-->
                <option value="vaqueros">Vaqueros</option>             <!-- size="5" para establecer tamaño de la lista-->
                <option value="movil">Teléfono móvil</option>
                <option value="auto">Automóvil</option>
                <option value="collar">collar</option>
                <option value="cd">CD</option>
            </select>
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar Lista">
    </form>
</body>
</html>
