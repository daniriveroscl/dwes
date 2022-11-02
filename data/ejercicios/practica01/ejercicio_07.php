<?php
    /**Construye un array con el nombre de 4 países y muestralo por pantalla.*/

    echo "<h3>Recorrido Paises Favoritos</h3><hr>";

    $paises = ["Chile","España","Grecia","Japón"];

    // Recorrido mediante bucle foreach simple
    foreach ($paises as $element){
        echo $element . '<br><br>';
    }