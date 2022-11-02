<?php

    session_start();
    //$_SESSION["loginok"] = $_POST["deseosm"];
    
    
     if (isset($_POST["envio"])) {
        $listadedeseos = $_POST["deseosm"];
        $_SESSION["deseos"] = json_encode("$listadedeseos");
        if (isset($_SESSION["deseos"])) {
            echo "<h3>Tu lista de deseos es: </h3>";
            $listadeseos = json_decode($_SESSION["deseos"]);
            foreach ($listadeseos as $lista){
                echo $lista . ", ";
            }
        } else {
            echo "<br>No has elegido ningún producto.";
        }
    }